module "eks" {
  source  = "terraform-aws-modules/eks/aws"
  version = "~> 20.0"

  cluster_name    = var.cluster_name
  cluster_version = "1.28"

  enable_cluster_creator_admin_permissions = true
  cluster_endpoint_public_access = true
  cluster_endpoint_private_access = true
  
  vpc_id     = module.vpc.vpc_id
  subnet_ids = module.vpc.private_subnets

  eks_managed_node_groups = {
    default = {
      desired_size = 2
      min_size     = 2
      max_size     = 5

      instance_types = ["t3.large"]
      ami_type = "AL2_x86_64"
      tags = {
        "k8s.io/cluster-autoscaler/enabled"                     = "true"
        "k8s.io/cluster-autoscaler/production-eks"             = "owned"
      }
    }
  }
}
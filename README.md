# 🚀 AWS EKS Cloud-Native Deployment Project

## 📌 Project Overview

This project demonstrates an end-to-end **cloud-native deployment** on **AWS EKS (Elastic Kubernetes Service)** using modern DevOps and Kubernetes practices.

The environment includes containerized **React** and **PHP** applications deployed on Kubernetes with secure HTTPS access, monitoring, autoscaling, and ingress-based routing.

---

# 🛠️ Technologies Used

- AWS EKS
- Kubernetes
- Docker
- React
- PHP
- AWS ALB Ingress Controller
- AWS ACM SSL
- Prometheus
- Grafana
- Node Exporter
- Linux
- Ingress
- Kubernetes Autoscaling

---

# 🏗️ Architecture

```text
Users
   ↓
AWS ALB Ingress Controller
   ↓
Kubernetes Ingress
   ↓
Services
   ↓
Deployments
   ↓
Pods (React / PHP Containers)
```

---

# ✨ Features

✅ React Application Deployment on Kubernetes  
✅ PHP Application Deployment on Kubernetes  
✅ Docker Containerization  
✅ AWS EKS Cluster Setup  
✅ ALB Ingress Controller Integration  
✅ HTTPS using AWS ACM SSL Certificates  
✅ Prometheus & Grafana Monitoring  
✅ Node Exporter Dashboards  
✅ Kubernetes Horizontal Pod Autoscaling  
✅ Domain Mapping & Ingress Routing  
✅ Troubleshooting Kubernetes Networking & Ingress Issues  

---

# 🌐 Live Applications

## React Application
🔗 https://akash.react.grootsdrive.in

## PHP Application
🔗 https://akash.php.grootsdrive.in

---

# 📊 Monitoring Stack

## Prometheus
Used for collecting Kubernetes and infrastructure metrics.

## Grafana
Used for visualizing:
- Cluster Metrics
- Node Metrics
- CPU & Memory Usage
- Pod Monitoring
- Infrastructure Health

## Node Exporter
Integrated for node-level monitoring and observability.

---

# 📦 Docker Containerization

## Build Docker Image

```bash
docker build -t react-app .
docker build -t php-app .
```

## Run Docker Container

```bash
docker run -d -p 3000:3000 react-app
docker run -d -p 80:80 php-app
```

---

# ☸️ Kubernetes Deployment

## Kubernetes Resources Used

- Deployments
- Services
- Ingress
- Horizontal Pod Autoscaler (HPA)
- ConfigMaps

## Apply Kubernetes Manifests

```bash
kubectl apply -f deployment.yaml
kubectl apply -f service.yaml
kubectl apply -f ingress.yaml
```

---

# 🔐 SSL & Ingress Configuration

- AWS ACM used for SSL certificate management
- HTTPS enabled using AWS ALB Ingress Controller
- Host-based routing configured for multiple applications

---

# 📈 Autoscaling

Horizontal Pod Autoscaler (HPA) configured for:
- Dynamic scaling
- Better resource utilization
- Production-style workload handling

---

# 🧪 Troubleshooting Experience

During this project, several production-like issues were identified and resolved:

- Kubernetes Networking Issues
- Ingress Routing Problems
- Webhook Errors
- Service Exposure Issues
- SSL Certificate Validation
- DNS Mapping Issues
- Prometheus Target Configuration

---

# 📂 Project Structure

```text
.
├── react-app/
├── php-app/
├── kubernetes/
│   ├── deployment.yaml
│   ├── service.yaml
│   ├── ingress.yaml
│   └── hpa.yaml
├── monitoring/
│   ├── prometheus/
│   └── grafana/
└── README.md
```

---

# 🚀 Useful Commands

## Kubernetes

```bash
kubectl get pods
kubectl get svc
kubectl get ingress
kubectl describe pod <pod-name>
kubectl logs <pod-name>
```

## Docker

```bash
docker images
docker ps
docker build -t app-name .
```

## AWS EKS

```bash
aws eks update-kubeconfig --region <region> --name <cluster-name>
```

---

# 🎯 Skills Gained

This project provided practical hands-on experience in:

- AWS Cloud
- Amazon EKS
- Kubernetes Administration
- Docker
- Linux
- Monitoring & Observability
- DevOps Troubleshooting
- Networking
- SSL & Ingress Management

---

# 📸 Project Demonstration

The project includes:
- React Application Deployment
- PHP Application Deployment
- Grafana Dashboards
- Prometheus Monitoring
- Kubernetes Resources
- AWS Load Balancer Integration

---

# 👨‍💻 Author

## Akash Bora

DevOps | Cloud | Kubernetes Enthusiast

GitHub: https://github.com/Akashbora02

---

# 📜 Conclusion

This project demonstrates a complete production-style Kubernetes deployment workflow on AWS EKS including monitoring, autoscaling, ingress management, SSL integration, and cloud-native DevOps practices.

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Kubernetes App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #0f172a, #1e293b);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }

        .card-box {
            background: #111827;
            padding: 40px;
            border-radius: 20px;
            width: 500px;
            box-shadow: 0px 0px 25px rgba(0,0,0,0.5);
        }

        .status {
            margin-top: 20px;
        }

        .status li {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .btn-custom {
            margin-top: 20px;
            width: 100%;
        }
    </style>
</head>

<body>

<div class="card-box text-center">

    <h1>🚀 PHP Application</h1>

    <p class="mt-3">
        Successfully running with Docker + Kubernetes
    </p>

    <ul class="list-group status">
        <li class="list-group-item">✅ PHP Running</li>
        <li class="list-group-item">✅ Apache Running</li>
        <li class="list-group-item">✅ Docker Working</li>
        <li class="list-group-item">✅ Kubernetes Connected</li>
        <li class="list-group-item">✅ Monitoring Enabled</li>
    </ul>

    <button class="btn btn-primary btn-lg btn-custom">
        Application Healthy
    </button>

</div>

</body>
</html>

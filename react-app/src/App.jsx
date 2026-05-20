import './App.css'

function App() {
  return (
    <div className="container">

      <div className="content">

        <h1>🚀 React DevOps Dashboard</h1>

        <p className="subtitle">
          Kubernetes + Docker + AWS EKS + Ingress
        </p>

        <div className="cards">

          <div className="card">
            <h2>Frontend</h2>
            <p>React App Running Successfully</p>
            <span>✅ Healthy</span>
          </div>

          <div className="card">
            <h2>Kubernetes</h2>
            <p>Pods & Services Running Properly</p>
            <span>✅ Connected</span>
          </div>

          <div className="card">
            <h2>Monitoring</h2>
            <p>Grafana & Prometheus Active</p>
            <span>✅ Monitoring Enabled</span>
          </div>

        </div>

        <button className="deploy-btn">
          Deployment Successful 🚀
        </button>

      </div>
    </div>
  )
}

export default App

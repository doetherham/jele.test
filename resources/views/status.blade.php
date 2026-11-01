<!DOCTYPE html>
<html>
<head>
    <title>Test API</title>
    <style>
        body { font-family: sans-serif; display: flex; align-items: center;
            justify-content: center; height: 100vh; margin: 0; background: #f5f5f5; }
        .card { background: white; padding: 40px 60px; border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1); text-align: center; }
    </style>
</head>
<body>
<div class="card">
    <h1>Test API</h1>
    <p id="status">Проверяем...</p>
</div>
<script>
    fetch('/health')
        .then(r => r.json())
        .then(d => document.getElementById('status').textContent =
            d.status === 'ok' ? 'Сервис работает ✅' : 'Есть проблемы ⚠️')
        .catch(() => document.getElementById('status').textContent = 'Сервис недоступен ❌');
</script>
</body>
</html>

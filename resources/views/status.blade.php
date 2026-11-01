<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test API: статус</title>
    <style>
        body { font-family: system-ui, sans-serif; background: #f5f5f5; margin: 0;
            display: flex; align-items: center; justify-content: center; height: 100vh; }
        .card { background: #fff; padding: 40px 50px; border-radius: 14px; min-width: 320px;
            box-shadow: 0 4px 20px rgba(0,0,0,.1); }
        h1 { margin: 0 0 6px; }
        .badge { display: inline-block; padding: 4px 12px; border-radius: 20px;
            color: #fff; font-weight: 600; margin-bottom: 20px; }
        .ok { background: #22c55e; }
        .degraded { background: #ef4444; }
        ul { list-style: none; padding: 0; margin: 0 0 16px; }
        li { display: flex; justify-content: space-between; padding: 8px 0;
            border-bottom: 1px solid #eee; }
        small { color: #888; }
    </style>
</head>
<body>
<div class="card">
    <h1>Test API</h1>

    <span class="badge {{ $status }}">
            {{ $status === 'ok' ? 'Работает' : 'Есть проблемы' }}
        </span>

    <ul>
        @foreach ($checks as $name => $value)
            <li>
                <span>{{ $name }}</span>
                <span>{{ $value === 'ok' ? '✅' : '❌' }}</span>
            </li>
        @endforeach
    </ul>

    <small>Обновлено: {{ \Carbon\Carbon::parse($timestamp)->format('d.m.Y H:i:s') }}</small>
</div>
</body>
</html>

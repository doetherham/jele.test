<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test API: статус</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg clip-path='url(%23clip0_551_14)'%3E%3Crect x='-1' y='1' width='18' height='14' fill='white'/%3E%3Crect x='1' y='17' width='18' height='14' transform='rotate(-90 1 17)' fill='white'/%3E%3Crect x='2' y='10' width='2' height='2' transform='rotate(-90 2 10)' fill='%232B2B2B'/%3E%3Crect x='5' y='6' width='3' height='3' transform='rotate(-90 5 6)' fill='%23F17A28' fill-opacity='0.49'/%3E%3Crect x='8' y='13' width='3' height='3' transform='rotate(-90 8 13)' fill='%23F6C84E'/%3E%3Crect x='9' y='9' width='3' height='3' transform='rotate(-90 9 9)' fill='%232B2B2B'/%3E%3Crect x='4' y='13' width='2' height='2' transform='rotate(-90 4 13)' fill='%232B2B2B'/%3E%3Crect x='3' y='5' width='3' height='3' transform='rotate(-90 3 5)' fill='%232B2B2B'/%3E%3Crect x='11' y='4' width='2' height='2' transform='rotate(-90 11 4)' fill='%23F17A28' fill-opacity='0.49'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='clip0_551_14'%3E%3Crect width='16' height='16' fill='white'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E">
    <style>
        body { font-family: system-ui, sans-serif; background: #f5f5f5; margin: 0;
            display: flex; align-items: center; justify-content: center; height: 100vh; }
        .card { background: #fff; padding: 40px 50px; border-radius: 14px; min-width: 320px;
            box-shadow: 0 0 2px -10px rgba(0,0,0,.1); }
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

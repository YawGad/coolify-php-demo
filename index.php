
<?php
$appName = "My First Coolify PHP App";
$phpVersion = PHP_VERSION;
$serverTime = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($appName) ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6fb;
            display: grid;
            place-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 30px #0001;
            text-align: center;
        }
        h1 { color: #6d28d9; }
    </style>
</head>
<body>
    <div class="card">
        <h1><?= htmlspecialchars($appName) ?></h1>
        <p>Version 2.0 — Successfully updated through GitHub and Coolify!</p>
        <p><strong>PHP version:</strong> <?= htmlspecialchars($phpVersion) ?></p>
        <p><strong>Server time:</strong> <?= htmlspecialchars($serverTime) ?></p>
    </div>
</body>
</html>

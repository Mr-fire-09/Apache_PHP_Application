<?php
date_default_timezone_set("UTC");
$hour = date("H");

if ($hour < 12) {
    $message = "Good morning, Docker enthusiast! ☀️";
} elseif ($hour < 18) {
    $message = "Good afternoon, keep building! 🚀";
} else {
    $message = "Good evening, keep coding! 🌙";
}

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Hello, Docker!</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #282c34;
            color: #61dafb;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            font-size: 3rem;
        }
        p {
            font-size: 1.5rem;
            margin: 10px 0;
        }
        .time {
            font-size: 1.2rem;
            color: #fff;
        }
        .btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2rem;
            background-color: #61dafb;
            color: #282c34;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn:hover {
            background-color: #21a1f1;
        }
    </style>
</head>
<body>
    <h1>🚀 Hello, Docker! 🎉</h1>
    <p>$message</p>
    <p class='time'>Current UTC Time: " . date("Y-m-d H:i:s") . "</p>
    <button class='btn' onclick='window.location.reload();'>🔄 Refresh</button>
</body>
</html>";
?>

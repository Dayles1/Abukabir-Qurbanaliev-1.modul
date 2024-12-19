<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register/Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6e7fef, #8e44ad);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
            animation: fadeIn 1s ease-out;
        }

        .content {
            text-align: center;
            padding: 30px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #fff;
            font-weight: 600;
        }

        a {
            font-size: 18px;
            color: #fff;
            text-decoration: none;
            border: 2px solid #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s ease;
            margin: 10px;
        }

        a:hover {
            background-color: #fff;
            color: #8e44ad;
            transform: translateY(-3px);
        }

        a:active {
            transform: translateY(1px);
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>

    <div class="content">
        <h1><a href="users/registr">REGISTER</a></h1>
        <h1><a href="users/login">LOGIN</a></h1>
    </div>

</body>
</html>
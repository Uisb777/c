<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./css/reset.css">
    <title>Login</title>
</head>
<body>
    <style>
        body {
            font-family: sans-serif;
            background-color: rgb(31, 28, 28);
            margin-top: 200px;
        }

        .container {
            text-align: center;
            margin-top: 10px;
        }

        .PowBtn {
            background: white;
            color: black;
            padding: 5px 20px;
            border-radius: 30px;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 25px;
            margin: 25px;
        }

        .log {
            text-align: center;
            margin: 30px;
        }

        .button {
            border-radius: 10px;
            height: 30px;
            width: 50px;
        }
        .all {
            background-color: rgb(43, 113, 226);
            border-radius: 20px;
            padding: 10px;
            margin-left: 350px;
            margin-right: 350px;
        }
    </style>
    </br>
    <div class="all">
        <div class="container">
            <a href="index.html" class="PowBtn">Logowanie</a>
        </div>

        <div class="log">
            <input id="login" type="text" placeholder="login">
        </div>

        <div class="log">
            <input id="HasloLog" type="password" placeholder="password">
        </div>

        <div class="log">
            <button id="LOGIN" onclick="login" class="button">login</button>
        </div>
    </div>
</body>
</html>
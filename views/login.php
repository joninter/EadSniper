<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type="text/css">
        form{
            width:300px;
            height:300px;
            background-color:#DDD;
            margin:auto;
            margin-top:30px;
            padding:20px;
            border-radius:10px;
        }
        input{
            width:250px;
            padding:15px;
            font-size:14px;
            border:1px solid #CCC;
        }
    </style>
</head>
<body>
    <form method="post">
        <h2>Login</h2>
        <input type="email" name="email" placeholder="E-mail"><br><br>
        <input type="password" name="senha"><br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>
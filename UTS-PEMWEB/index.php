<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body style="text-align: center;">
    <h1>login</h1>
    <form action="./backend/login.php" method="post">
        <input type="email" name="email" placeholder="masukkan email anda">
        <p><input type="password" name="password" placeholder="masukkan password anda"></p>
        <input type="submit" value="login" name="submit">
        <p><a href="register.php" style="color: black;">belum punya account?klik disini!</a></p>
    </form>

</body>

</html>
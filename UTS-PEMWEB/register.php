<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center">
    <h1>Register</h1>
    <form action="./backend/register.php" method="post">
        <input type="text" name="name" placeholder="masukkan nama anda">
        <p><input type="email" name="email" placeholder="masukkan email anda"></p>
        <p><input type="password" name="password" placeholder="masukkan password anda"></p>
        <p><input type="password" name="confirm" placeholder="konfirmasi password anda"></p>
        <p><a href="index.php" style="color: black;">sudah punya akun? klik disini!</a></p>
        <input type="submit" value="login" name="submit">
    </form>

</body>
</html>
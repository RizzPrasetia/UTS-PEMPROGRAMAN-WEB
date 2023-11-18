<?php

session_start();

if($_SESSION['role'] != 'user') {
    session_destroy();
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    a{
        color: black;
    }
</style>
<body>
    <h1>Selamat datang <?php echo $_SESSION['name'];?> </h1>
    <p><a href="create.php">belanja sekarang</a></p>
    <p><a href="show.php">atau ingin lihat lihat produk?</a></p>
    <a href="./backend/logout.php">Logout</a>
</body>
</html>


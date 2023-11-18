<?php
    require './config/db.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM products WHERE id = '$id'";
        $result = mysqli_query($db_connect, $query);
        $row = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image'];

        $query = "UPDATE products SET name = '$name', price = '$price', image = '$image' WHERE id = '$id'";
        $result = mysqli_query($db_connect, $query);

        if ($result) {
            echo "Data berhasil diupdate!";
        } else {
            echo "Data gagal diupdate!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Produk</title>
</head>
<body>
    <h1>Edit Data Produk</h1>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?=$row['id'];?>">
        <label for="name">Nama produk:</label>
        <input type="text" name="name" id="name" value="<?=$row['name'];?>">
        <br>
        <label for="price">Harga:</label>
        <input type="text" name="price" id="price" value="<?=$row['price'];?>">
        <br>
        <label for="image">Gambar produk:</label>
        <input type="text" name="image" id="image" value="<?=$row['image'];?>">
        <br>
        <input type="submit" name="submit" value="Edit">
    </form>
</body>
</html>
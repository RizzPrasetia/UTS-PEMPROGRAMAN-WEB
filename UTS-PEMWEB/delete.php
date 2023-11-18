<?php
    require './config/db.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM products WHERE id = '$id'";
        $result = mysqli_query($db_connect, $query);

        if ($result) {
            echo "Data berhasil dihapus!";
        } else {
            echo "Data gagal dihapus!";
        }
    }
?>
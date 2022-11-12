<?php
    session_start();
    require '../koneksi.php';
    if(isset($_SESSION['login'])){
        if($_SESSION['Role'] === "user"){
            $id = $_GET["id"];
            $hapus = mysqli_query($conn, "DELETE FROM cart WHERE Id_Produk = '$id'");
            if($hapus){
                header("Location: cart_user.php?pesan=berhasil");
            }else{
                header("Location: cart_user.php?pesan=gagal");
            }
        }else{
        header("Location: ../admin/index_admin.php");
        }
    }else{
        header("Location: ../umum/index.php");
    }
?>
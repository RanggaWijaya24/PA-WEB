<?php
    session_start();
    require '../koneksi.php';
    if(isset($_SESSION['login'])){
        if($_SESSION['Role'] === "user"){
            $id = $_GET["id"];
            $data = mysqli_query($conn, "SELECT Quantity,Sisa_Stok FROM cart INNER JOIN produk WHERE produk.Id_Produk = $id");
            $quantity = $data["Quantity"];
            $hapus = mysqli_query($conn, "DELETE FROM cart WHERE Id_Produk = '$id'");
            $stok_terbaru = $quantity + $data["Sisa_Stok"];
            $update_stok = mysqli_query($conn, "UPDATE produk SET Sisa_Stok = $stok_terbaru WHERE Id_Produk = $id");
            if($hapus && $update_stok){
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
<?php
    session_start();
    require '../koneksi.php';
    if(isset($_SESSION['login'])){
      if($_SESSION['Role'] === "admin"){
        //Langsung Masuk Ke Halaman Html dibawah
      }else{
        header("Location: ../user/index_user.php");
      }
    }else{
        header("Location: ../umum/index.php");
    }
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Edit Produk</title>
    <link rel="stylesheet" href="../css/edit.css">
    <link rel="icon" href="../img/CUYLOGO-removebg-preview.ico">
  </head>
  <body>
      <center>
      <h1>Edit Product</h1>
      <center>
      <form method="" action="" enctype="multipart/form-data" >
      <section class="base">
        <input name="id" value=""  hidden />
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_produk" value="" autofocus="" required="" />
        </div>
        <div>
            <label>Gambar Produk</label>
            <input type="file" name="gambar_produk" />
          </div>
        <div>
          <label>Harga </label>
         <input type="text" name="harga" required=""value="" />
        </div>
        <div>
          <label>Size</label>
         <input type="text" name="size" required="" value=""/>
        </div>
       
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>
<?php
    session_start();
    require '../koneksi.php';
    if(isset($_SESSION['login'])){
      if($_SESSION['Role'] === "admin"){
        if(isset($_POST['tambah'])){
          $nama = $_POST["nama_produk"];
          $harga = $_POST["harga"];
          $stok = $_POST["stok"];
          $gambar = $_FILES['gambar_produk']['name'];
          // Mengecek apakah ukuran file tidak lebih dari 4mb
          $jenis_file = array('png','jpg','jpeg');
          $memisahkan_ekstensi = explode('.',$gambar);
          $ekstensi = strtolower(end($memisahkan_ekstensi));
          //set zona waktu
          date_default_timezone_set("Asia/Makassar");
          //Membuat nama file baru menggunakan waktu upload dan nama file aslinya
          $waktu = date("Y-m-d H:i:s");
          $nama_gambar_baru = "$waktu-$gambar";
          $tmp = $_FILES['gambar_produk']['tmp_name'];
          //Mengecek jenis ekstensi apakah sudah sesuai
          if(in_array($ekstensi, $jenis_file) === true && move_uploaded_file($tmp,'../img/crud'.$nama_gambar_baru)){
            $sql = "INSERT INTO produk VALUES('','$nama', '$nama_gambar_baru', '$harga', '$stok')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                echo "
                    <script>
                        alert('Produk Berhasil Ditambahkan');
                    </script>
                ";
                header("Location: admin.php");
            }else{
                echo "
                    <script>
                        alert('Produk Gagal Ditambahkan');
                        document.location.href = 'crud.php';
                    </script>
                ";
                header("Location: admin.php");
            }
            //Jika ekstensinya salah
          }else{
            echo "
              <script>
                  alert('File yang di Upload Bukan Gambar!!!');
              </script>
            ";
            header("Location: admin.php");
          }
        
        }else{

        }
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
    <title>Tambah Product</title>
    <link rel="stylesheet" href="../css/edit.css">
    <link rel="icon" href="../img/CUYLOGO-removebg-preview.ico">
  </head>
  <body>
      <center>
      <h1>Tambah Produk</h1>
      <center>
      <form method="POST" action="" enctype="multipart/form-data" >
      <section class="base">
        <input name="id" value=""  hidden />
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_produk" value="" autofocus="" required/>
        </div>
        <div>
            <label>Gambar Produk</label>
            <input type="file" name="gambar_produk" required/>
          </div>
        <div>
          <label>Harga </label>
         <input type="text" name="harga" required=""value="" required/>
        </div>
        <div>
          <label>Stok</label>
         <input type="text" name="stok" required="" value="" required/>
        </div>
       
        <div>
         <button type="submit" name="tambah">Simpan</button>
        </div>
        </section>
      </form>
  </body>
</html>
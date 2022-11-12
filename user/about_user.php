<?php
    session_start();
    require '../koneksi.php';
    if(isset($_SESSION['login'])){
      if($_SESSION['Role'] === "user"){
        //Langsung Masuk Ke Halaman Html dibawah
      }else{
        header("Location: ../admin/index_admin.php");
      }
    }else{
      header("Location: ../umum/index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuy Thrift Store</title>
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/CUYLOGO-removebg-preview.ico">
    <script src="../js/script.js"></script>
</head>
<body>
    <section id="header">
        <a href="#"><img src="../img/CUYLOGO-removebg-preview.png" class="logo " alt=""></a>
        <div>
            <ul id="navbar">
               <div class="navigation">
                <li><a href="index_user.php">Home</a></li>
                <li><a href="shop_user.php">Shop</a></li>
                <li><a  href="blog_user.php">Blog</a></li>
                <li><a class="active" href="about_user.php">About</a></li>
                <li><a href="contact_user.php">Contact</a></li>
                <li id="bg-lg"><a href="cart_user.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li id="bg-lg"><a href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>  
               </div>
            </ul>
        </div>
        <div id="mobile">
            <img src="../img/menu.png" alt="" class="bar" width="25px" height="25px">
            <a href="#" ><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </section>


    <section id="page-header" class="about-header">
        
        <h2>Know Us</h2>
        
        <p>Programmer Cuy Thrift Store</p>
       
    </section>

   <section id="about-head" class="section-p1">
    <img src="../img/about/a6.jpg" alt="">
    <div>
        <h2>Siapa Kami?</h2>
        <p>Kami adalah mahasiswa dari Universitas Mulawarman yang sedang belajar mengenai Web Programming 
            Disini kami membuat Cuy Thrift Store sebagai Projek Akhir dari Praktikum Web
        </p>
            
        <abbr title="">Membuat website dengan sesederhana mungkin dan memudahkan user
            dalam menggunakanya
        </abbr>     

        <br><br>


        <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Membuat website dengan sesederhana mungkin dan memudahkan user
            dalam menggunakanya</marquee>
    </div>
   </section>

   <section id="about-app" class="section-p1">
    <h1>Let's See Our <a href="#">Photo</a></h1>
    <div class="photo">
        <img src="../img/about/anime.gif" alt="">
    </div>
   </section>

   <section id="features" class="section-p1">
    <div class="fe-box">
        <img src="../img/features/f1.png" alt="">
        <h6>Mudah di akses</h6>
    </div>
    <div class="fe-box">
        <img src="../img/features/f2.png" alt="">
        <h6>Hemat waktu</h6>
    </div>
    <div class="fe-box">
        <img src="../img/features/f3.png" alt="">
        <h6>Hemat Uang</h6>
    </div>
    <div class="fe-box">
        <img src="../img/features/f4.png" alt="">
        <h6>Customer senang</h6>
    </div>
    <div class="fe-box">
        <img src="../img/features/f5.png" alt="">
        <h6>Admin senang</h6>
    </div>
    <div class="fe-box">
        <img src="../img/features/f6.png" alt="">
        <h6>24/7 Support</h6>
    </div>
</section>



<section id="newsletter" class="section-p1 section-m1">
    <div class="news">
        <h4>Sign Up untuk Info lebih lanjut</h4>
        <p>Masukan email anda agar dapat info dan update mengenai <span>barang terbaru</span> </p>
    </div>

    <div class="form">
        <input type="text"placeholder="Your E-Mail" name="" id="">
        <button class="normal">Sign Up</button>
    </div>
</section>


   <footer class="section-p1">
    <div class="col">
        <img class="logo" src="../img/CUYLOGO-removebg-preview.png " alt="">
        <h4>Contact</h4>
        <p><strong>Address :</strong> Jalan Perjuangan 60 Samarinda, Indonesia</p>
        <p><strong>Phone   :</strong> +6212345679</p>
        <p><strong>Open    :</strong> 09.00-21.00 </p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>
   
    <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Condition</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Chart</a>
        <a href="#">My Whislist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>

   <div class="col install">
     <h4>Install App</h4>
     <p>From App Store or Google Play</p>
     <div class="row">
        <img src="../img/pay/app.jpg" alt="">
        <img src="../img/pay/play.jpg" alt="">
     </div>
     <p>M-Banking juga bisa cuy</p>
     <img src="../img/pay/pay.png" alt="">
   </div>

   <div class="copyright">
    <p>@ Copyright 2022 Cuy Thrift Store SMD</p>
   </div>

   </footer>


    <script src="../js/script.js"></script>
</body>
</html>
<?php
    session_start();
    require '../koneksi.php';
    if(isset($_SESSION['login'])){
      if($_SESSION['Role'] === "user"){
        header("Location: ../user/index_user.php");
      }else{
        header("Location: ../admin/index_admin.php");
      }
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
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="kontak" onclick="myFunction()"><a href="../login.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
               </div>
            </ul>
        </div>
        <div id="mobile">
            <img src="../img/menu.png" alt="" class="bar" width="25px" height="25px">
            <a href="../login.php" ><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </section>


    <section id="prodetails" class="section-p1"> 
        <div class="single-pro-image">
            <img src="../img/products/n5.jpg" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="../img/products/n5.jpg"width="100%" class="small-img"  alt="">
                </div>
                <div class="small-img-col">
                    <img src="../img/products/n6.jpg"width="100%" class="small-img"  alt="">
                </div>
                <div class="small-img-col">
                    <img src="../img/products/n7.jpg"width="100%" class="small-img"  alt="">
                </div>
                <div class="small-img-col">
                    <img src="../img/products/n8.jpg"width="100%" class="small-img"  alt="">
                </div>
            </div>
        </div>
              
        <div class="single-pro-details">
            <h6>Home / T-Shirt</h6>
            <h4>Men's Fashion T-Shirt</h4>
            <h2>Rp.130.000</h2>
            <select>
                <option>Select Size</option> 
                <option>XL</option> 
                <option>XXL</option> 
                <option>Small</option> 
                <option>Large</option> 
            </select>
            <input type="number" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>Baju dengan bahan terbaik dan ternyaman harga asli bisa sampai puluhan juta
                tapi di cuy thrift store lebih murah 100x lipat!
            </span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Product</h2>
        <p>Enjoy Our Produxt</p>
        <div class="pro-container">
            <div class="pro">
                <img src="../img/products/n1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Baju</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp.78.000</h4>
                </div>
                <a href="#"><i id="cart"  class="fa-solid fa-cart-shopping "></i></a>
            </div>
            <div class="pro">
                <img src="../img/products/n2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Baju</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp.78.000</h4>
                </div>
                <a href="#"><i id="cart"  class="fa-solid fa-cart-shopping "></i></a>
            </div>
            <div class="pro">
                <img src="../img/products/n3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Baju</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp.78.000</h4>
                </div>
                <a href="#"><i id="cart"  class="fa-solid fa-cart-shopping "></i></a>
            </div>
            <div class="pro">
                <img src="../img/products/n4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Baju</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp.78.000</h4>
                </div>
                <a href="#"><i id="cart"  class="fa-solid fa-cart-shopping "></i></a>
            </div>
        </div>
       </section>


   <!-- <section id="sm-banner" class="section-p1">
      <div class="banner-box">
            <h4>Harga</h4>
            <h2>Buy 1 Get 2</h2>
            <span>Baju khas pantai termurah disini</span>
            <button class="white">Learn More</button>
      </div>
      <div class="banner-box banner-box2">
        <h4>Harga</h4>
        <h2>Buy 1 Get 2</h2>
        <span>Baju khas pantai termurah disini</span>
        <button class="white">Learn More</button>
       </div>
   </section> -->
  

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

<!-- JS untuk bisa pindah-pindah click baju -->
   <script>
     var MainImg  = document.getElementById("MainImg");
     var smallimg = document.getElementsByClassName("small-img");

     smallimg[0].onclick = function(){
        MainImg.src = smallimg[0].src;
     }
     smallimg[1].onclick = function(){
        MainImg.src = smallimg[1].src;
     }
     smallimg[2].onclick = function(){
        MainImg.src = smallimg[2].src;
     }
     smallimg[3].onclick = function(){
        MainImg.src = smallimg[3].src;
     }
   </script>

    <script src="../js/script.js"></script>
</body>
</html>
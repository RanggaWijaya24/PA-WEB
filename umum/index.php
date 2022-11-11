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
                <li><a class="active"href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a  href="blog.php">Blog</a></li>
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


    <section id="promosi">
        <h4>Sedang Trend!!!</h4>
        <h2>Harga Murah</h2>
        <h1>Semua Product Ori</h1>
        <p>Selalu kunjungi web kami karena akan ada diskon 50%</p>
        <button> <a href="../login.php">Masuk    /</a><a href="../register.php">    Daftar</a></button>
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

   <section id="product1" class="section-p1">
        <h2>Featured Product</h2>
        <p>Lagi trend baju modern</p>
        <div class="pro-container">
            <div class="pro">
                <img src="../img/products/f1.jpg" alt="">
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
                <img src="../img/products/f2.jpg" alt="">
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
                <img src="../img/products/f3.jpg" alt="">
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
                <img src="../img/products/f4.jpg" alt="">
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
                <img src="../img/products/f5.jpg" alt="">
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
                <img src="../img/products/f6.jpg" alt="">
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
                <img src="../img/products/f7.jpg" alt="">
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
                <img src="../img/products/f8.jpg" alt="">
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


   <section id="banner" class="section-m1">
    <h4>Memberikan service terbaik</h4>
    <h2>Diskon <span>70% cuy</span> Semua Baju & Aksesoris di musim panas </h2>
    <button class="normal">Explore More</button>
   </section>

   <section id="product1" class="section-p1">
    <h2>New Arrival</h2>
    <p>Pernah di pakai artis</p>
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
        <div class="pro">
            <img src="../img/products/n5.jpg" alt="">
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
            <img src="../img/products/n6.jpg" alt="">
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
            <img src="../img/products/n7.jpg" alt="">
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
            <img src="../img/products/n8.jpg" alt="">
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

   <section id="banner3">
        <div class="banner-box">
            <h2>SEASON SALE</h2>
            <h3>Baju Musim Dinfgin -50%</h3>
        </div>
        <div class="banner-box banner-box2 ">
            <h2>SEASON SALE</h2>
            <h3>Baju Musim Dinfgin -50%</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>SEASON SALE</h2>
            <h3>Baju Musim Dinfgin -50%</h3>
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
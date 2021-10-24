
<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.html?action=login");  
 }  
 ?> 
 
 



<!DOCTYPE html>
<html lang="en">
<head>
  

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,300&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <!--<div class="logo"><img src="logo1.png"></div>-->
    <a class="navbar-brand kol" href="#"><img src="images1/logo-white.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="entry.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Order
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="order_history.php" >History</a></li>
           
            <li><a class="dropdown-item" href="invoice.php">Invoice</a></li>
          
          </ul>
        </li>
       
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="product.php" >Electronics</a></li>
           
            <li><a class="dropdown-item" href="product.php">Furnitures</a></li>
            <li><a class="dropdown-item" href="product.php">Clothing</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" required>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
        <li class="nav-item dropdown">
        <a class="col nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php
               echo 'Welcome - '.$_SESSION["username"].' ';
        ?>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="index.php">Profile</a></li>
          <li><a class="dropdown-item" href="cart.php">My Cart</a></li>
          <li><a class="dropdown-item" href="#">History</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="forget_pas.php">Forget Password</a></li>
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
      </li>

    </div>
  </div>
</nav>


<section id="showcase" style="background: url('back_images/uprk1 (3).jpg') ">
      <div class="txt">
        <ul>
          <li><p class="main"><b>Welcome to Online Red Store<br>Now available everywhere in India.</b></p></li>
          <li><p class="not-main">India's biggest trading Company<br>Why wait? Shop now, stocks are limited.
            </p></li>
          <li class="rect"><div class="rectangle child"></div></li>

        </ul>
      </div>
    </section>

<!-------------------------------featured categories-------------------------------------->

<div class="categories">
  <div class="row">
    <div class="col-3">
      <img src="images1/category-1.jpg">
    </div>
    <div class="col-3">
      <img src="images1/category-2.jpg">
    </div>
    <div class="col-3">
      <img src="images1/category-3.jpg">
    </div>
  </div>
</div>
<!---------------------------------------------->

<div class="small-container">
    <h2 class="title"><b>Featured Products</b></h2>
    <div class="row">
      <div class="col-4">
        <img src="images1/product-1.jpg">
        <h4><b>Red Printed T-Shirts</b></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$50.00</p>
      </div>
      <div class="col-4">
        <img src="images1/product-2.jpg">
        <h4><b>Zack Shoes</b></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>$30.00</p>
      </div>
      <div class="col-4">
        <img src="images1/product-3.jpg">
        <h4><b>Men Lower</b></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>$70.00</p>
      </div>
      <div class="col-4">
        <img src="images1/product-4.jpg">
        <h4><b>T-Shirt</b></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$20.00</p>
      </div>
    </div>

    <!---------------------------------------clothing--------------------------------------->
    <div id="clothing">
    <h2 class="title"><b>Latest Products</b></h2>

    <div class="row">
      <div class="col-4">
        <img src="images1/product-5.jpg">
        <h4><b>Zara Shoes</b></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$200.00</p>
      </div>
      <div class="col-4">
        <img src="images1/product-6.jpg">
        <h4><b>T-shirt</b></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>$20.00</p>
      </div>
      <div class="col-4">
        <img src="images1/product-7.jpg">
        <h4><b>HRx Socks</b></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>$10.00</p>
      </div>
      <div class="col-4">
        <img src="images1/product-8.jpg">
        <h4><b>Fossil Watch</b></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$299.00</p>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
        <img src="images1/product-9.jpg">
        <h4><b>Esclee Watch</b></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$99.00</p>
      </div>
      <div class="col-4">
        <img src="images1/product-10.jpg">
        <h4><b>Cobra Black Shoes</b></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>$399.00</p>
      </div>
      <div class="col-4">
        <img src="images1/product-11.jpg">
        <h4><b>Zigzag Shoes</b></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>$70.00</p>
      </div>
      <div class="col-4">
        <img src="images1/product-12.jpg">
        <h4><b>Tommy Lower</b></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$200.00</p>
      </div>
    </div>
  </div>
</div>

  <!---------------------------------offer--------------------------------->

  <div id="electronics" class="offer">
    <div class="small-container">
      <div class="row row1">
        <div class="col-2">
          <img src="images1/exclusive.png" class="offer-img">
        </div>
        <div class="col-3">
          <p class="xt"><b>Exclusively Available on Online Shopping Store</b></p>
          <h1><b>Smart Band 4</b></h1>
            <small class="xt"><b>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can be.</b></small>
            <a href="" class="btn btn1 btn-full"><b>Buy Now</b> &#8594;</a>
        </div>
      </div>
    </div>
  </div>

  <!--------------------------------testimonial----------------------------------->

  <div class="testimonial">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p><b>I am so glad, to be a part of this amazing RedStore. It's been 5 years now and i didn't received any bad product. Like the best online shopping website ever.</b></p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <img src="images1/user-1.png">
          <h3><b>Sean Parker</b></h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p><b>To be honest, I have been wasting time doing shoping from stores. It's so bazzared and frustrated at the same time. Now my life is so easy seriously Thanking you.</b></p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="images1/user-2.png">
          <h3><b>Dev Roy</b></h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p><b>I never liked to shop from Online shopping websites. It's is easy isn't it, I never trusted one until i became a member of this fantastic online shop. Every Product I have bough is same as they show in pictures, so satisfied.</b></p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <img src="images1/user-3.png">
          <h3><b>Hermioni Granger</b></h3>
        </div>
      </div>
    </div>
  </div>

  <!-----------------------------brands------------------------------------------------>

  <div class="brands">
    <div class="small-container">
      <div class="row">
        <div class="col-5">
          <img src="images1/logo-godrej.png">
        </div>
        <div class="col-5">
          <img src="images1/logo-oppo.png">
        </div>
        <div class="col-5">
          <img src="images1/logo-coca-cola.png">
        </div>
        <div class="col-5">
          <img src="images1/logo-paypal.png">
        </div>
        <div class="col-5">
          <img src="images1/logo-philips.png">
        </div>
      </div>
    </div>
  </div>

  <!----------------------------------------footer------------------------------------------>

  <div class="footer">
    <div class="container">
      <div class="row" class="kol">
        <div class="footer-col-2">
          <img src="images1/logo-white.png">
          <p>Our purpose is to Sustainably make the pleasure and Benefits of Sports Accessible to the many.</p>
        </div>
        <div class="footer-col-3">
          <h3>Useful Links</h3>
          <ul>
            <li>Coupons</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
          </ul>
        </div>
        <div class="footer-col-4">
          <h3>Follow us</h3>
          <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>Youtube</li>
          </ul>
        </div>
      </div>
      <hr>
      <p class="copyright">Copyright © 2010-2021 Freepik Company S.L. All Rights Reserved.</p>
    </div>
  </div>
</body>
</html>

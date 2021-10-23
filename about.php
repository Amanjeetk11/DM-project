<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.html?action=login");  
 }  
 ?> 

 

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,300&display=swap" rel="stylesheet">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <!--<div class="logo"><img src="logo1.png"></div>-->
    

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
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="product.php" >Electronics</a></li>
           
            <li><a class="dropdown-item" href="product.php">Furniture</a></li>
            <li><a class="dropdown-item" href="product.php">Clothing</a></li>
          </ul>
        </li>
        <li class="logo"><a class="navbar-brand kol" href="#"><img src="images1/logo-white.png"></a></li>
      </ul>
      
      <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
        <?php
               echo 'Welcome - '.$_SESSION["username"].' ';
        ?>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="index.php">My Profile</a></li>
         
          <li><a class="dropdown-item" href="#">History</a></li>

          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="forget_pas.php">Forget Password</a></li>
          <li>
               <a class="dropdown-item" href="logout.php">Logout</a>
         </li>
        </ul>
      </li>

    </div>
  </div>

</nav>

<div class="second-nav">
  <h3><b><a href="entry.php">Home  </a>  <span><i class="fa fa-angle-right"></i>  </span>  <a href="about.php"> About</a></b></h3>
</div>

<div class="text">
  <div class="red">
    <h1>Red Store</h1>
    <p>Red Store is a world renowned Online Shopping Store: Known for the perfection in products. Red Store Private Limited is an Indian e-commerce company established in 2007. It started with a primary focus on online book sales and soon, expanded to lifestyle products, electronics, home essentials and groceries. Today, Red Store is the biggest online Indian marketplace competing with the world leader Amazon.</p>
  </div>
</div>

<div class="line"></div>
<br><br>

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

  <style>
    * {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}

html {
  font-size: 62.5%;
  scroll-behavior: smooth;
}

body {
  overflow-x: hidden;
  color:rgba(0,0,0,0.8);
  background-color: #fff;
  font-family: 'Poppins', sans-serif;
  margin:0;
  display: flex;
    flex-direction: column;
    min-height: 100vh;
}

/*---------------------------------------NAV-BAR----------------------------------------------*/

.navbar-brand{
  font-size: 2.2rem;
}
.nav-item a{
  font-size: 1.8rem;
}

.kol{
  padding: 1.5rem;
  font-size: 2.2rem;
}
.kol img{
  width: 12rem;
}
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: white;
  position: fixed;
  width: 100vw;
  padding: 1.2rem;
  z-index: 10000;
}
nav .logo{
  padding-left: 36rem;
}
.navbar{
  position: fixed;
}
.log{
  color: white;
}
.log:hover{
  color: white;
}

/*---------------------------------------------- second-nav -----------------------------------------------*/

.second-nav{
  width: 100%;
  height: 10rem;
  background-color: rgb(255, 76, 48);
  color: white;
}
.second-nav h3{
  padding: 7rem;
  padding-left: 15rem;
}
.second-nav a{
  color: white;
  text-decoration: none;
  padding: 0 1rem;
}

/*--------------------------------------------------red store----------------------------------------------*/

.text {
  display: flex;
  flex-direction: column;
  font-size: 1.7rem;
  color:#555;
  padding: 0 20rem;
  padding-top: 50px;
  font-family:Arial, Helventica, sans-serif;
  font-weight: lighter;
  word-spacing: .18rem;
  letter-spacing: .07rem;
  line-height: 3rem;
}

.text h1 {
  font-family: 'Vollkorn', serif;
  color: black;
  font-size: 5rem;
  text-decoration: italic;
  padding: 5rem 0;
}

.text p a {
  text-decoration: none;
  color: rgb(255, 76, 48);
}

.text .red {
  background-color: white;
  padding: 3rem 5rem 5rem 5rem;
  border-radius: 7px;
  box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
  margin-bottom: 15rem;
}

.red h1 {
  font-family: 'Vollkorn', serif;
  color: black;
  font-size: 5rem;
  text-decoration: italic;
  padding: 3rem 0;
}
.line{
  width: 70%;
  height: 3px;
  background-color: rgb(255, 76, 48);
  transform: translate(21%,-20%);
}

/*-----------------------------testimonial--------------------------------*/

.testimonial{
  padding-top: 3rem;
  margin-left: 22rem;
}
.testimonial .col-3{
  text-align: center;
  padding: 6rem 2rem;
  box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
  cursor: pointer;
  transition: transform 0.5s;
  margin-left: 2rem;
}
.testimonial .col-3 img{
  width: 50px;
  margin-top: 2rem;
  border-radius: 50%;
}
.testimonial .col-3:hover{
  transform: translateY(-10px);
}
.testimonial .col-3 p{
  font-size: 1.1rem;
  margin: 1.2rem 0;
  color: #777;
}
.testimonial .col-3 h3{
  padding-top: 1rem;
}
.fa.fa-quote-left{
  font-size: 2rem;
  color: #ff523b;
}

/*-------------------------------brands------------------------------------*/

.brands{
  margin: 10rem auto;
}
.col-5{
  width: 16rem;
  margin: 2rem;
}
.col-5 img{
  width: 100%;
  cursor: pointer;
  filter: grayscale(100%);
}
.col-5 img:hover{
  filter: grayscale(0);
}

/*------------------------------------footer-------------------------------*/

.footer{
  background: #000;
  color: #8a8a8a;
  font-size: 1.4rem;
  padding: 6rem 2rem;
}
.footer p{
  color: #8a8a8a;
}
.footer h3{
  color: #fff;
  margin-bottom: 2rem;
}

.footer-col-1, .footer-col-2, .footer-col-3, .footer-col-4{
  min-width: 25rem;
  margin-bottom: 2rem;
}
.footer-col-2{
  flex:1;
  text-align: left;
}
.footer-col-2 img{
  width: 18rem;
  margin-bottom: 2rem;
}
.footer-col-3, .footer-col-4{
  flex-basis: 12%;
  text-align: center;s
}
ul{
  list-style-type: none;
}
.footer hr{
  border: none;
  background: #b5b5b5;
  height: 2px;
  margin: 2rem 0;
}
.copyright{
  text-align: center;
}
  </style>

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
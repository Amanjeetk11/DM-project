<?php
$count=1;
session_start();
if(!isset($_SESSION["username"])){
    header("location:index.html?action=login");
  
}
?>

<?php

$connect = mysqli_connect("localhost",'root','','test');

$use_id=$_SESSION['u_id'];

$totalAmt=$_SESSION['totalAmt'];

if(isset($_POST["submit"])){
  $Add = mysqli_real_escape_string($connect, $_POST["street_address"]);  
$city = mysqli_real_escape_string($connect, $_POST["city"]);  
$state = mysqli_real_escape_string($connect, $_POST["state"]);
$country = mysqli_real_escape_string($connect, $_POST["country"]);  
$landmark = mysqli_real_escape_string($connect, $_POST["landmark"]);  
$postcode = mysqli_real_escape_string($connect, $_POST["postcode"]);


$first = mysqli_real_escape_string($connect, $_POST["first_name"]);
$second = mysqli_real_escape_string($connect, $_POST["last_name"]);
$name =$first.' '.$second;
$_SESSION['card_holder_name']=$name;

$cardno = mysqli_real_escape_string($connect, $_POST["credit_card_number"]);

$month = mysqli_real_escape_string($connect, $_POST["month"]);
$year = mysqli_real_escape_string($connect, $_POST["year"]);

$exdate=$month.'/'.$year;
$cvv = mysqli_real_escape_string($connect, $_POST["csc"]);


$_SESSION["Add1"]= $Add.' '.$landmark.', '.$city;
$_SESSION["Add2"]  = ' -'.$postcode.' ('.$state.') '.$country;

$Address=$Add.' '.$landmark.', '.$city .' -'.$postcode.' ('.$state.') '.$country;
$_SESSION['Add']=$Address;
  $fname = mysqli_real_escape_string($connect, $_POST["first_name"]);
  
$password=rand();
$tran_id = substr(password_hash($password, PASSWORD_DEFAULT),40);


//order_info
$or_date= gmdate(DATE_RFC822);
  $query=mysqli_query($connect,"INSERT INTO order_info (user_id,total_Amt,card_holder_name,credit_card_no,exp_date,cvv,Shipping_Add,order_date) VALUES ('$use_id','$totalAmt','$name','$cardno','$exdate','$cvv','$Address','$or_date')");

if($query)  echo "Query has been successfully inserted";


$res="Select * from order_info ORDER BY odr_Id DESC LIMIT 1";
$re=mysqli_query($connect,$res);


  while($row= mysqli_fetch_array($re)){

$or_id= $row['odr_Id'] ;


  }








// for Valid Card Nuber

$res="Select * from order_info ORDER BY odr_Id DESC LIMIT 1";
$re=mysqli_query($connect,$res);


  while($row= mysqli_fetch_array($re)){

$number= $row['credit_card_no'] ;
$no=strlen($number);

if($no>=20)
echo "<script> alert('Invalid Card Number') </script>";
else{

  $sql="INSERT INTO `order` (user_id,tran_id,order_status) VALUES ('$use_id','$tran_id','Active')";
  mysqli_query($connect,$sql);
  
  $res=mysqli_query($connect,"select * from cart where user_id='$use_id'");

  
  if(mysqli_num_rows($res)>0){

  
    
    while($row=mysqli_fetch_array($res)){
             $pro_id=$row['pro_id'];
             $qty=$row['qty'];
           

          
$sql="INSERT INTO `ordered_products` (ordr_id,product_id,usr_id,qty) VALUES ('$or_id','$pro_id','$use_id','$qty')";
      
if(!mysqli_query($connect,$sql))
  echo "<script>alert('order is not placed')</script>";
  
 
       
          }

       echo "<script> 
       alert('Your Payment successfully done');
       alert('Congrats!! Your order is placed');
       window.location.href='product.php';
       
      
       </script>"; 
     $count++;
          
  }

  mysqli_query($connect,"delete from cart where user_id='$use_id'");

}

}  



 



  //remove cart Items

    

/////////////

}

/*
  if(mysqli_query($connect,$res)){   
    
    $Add = mysqli_real_escape_string($connect, $_POST["street_address"]);  
    $city = mysqli_real_escape_string($connect, $_POST["city"]);  
    $state = mysqli_real_escape_string($connect, $_POST["state"]);
    $country = mysqli_real_escape_string($connect, $_POST["country"]);  
    $landmark = mysqli_real_escape_string($connect, $_POST["landmark"]);  
   $postcode = mysqli_real_escape_string($connect, $_POST["postcode"]);
  
   $Address=$Add+$city+$state+$country+$landmark+$postcode;

  
 //   $password = password_hash($password, PASSWORD_DEFAULT);  
 
 $query= mysqli_query($connect,"Select * product where user_id='$use_id' ");
  while($row=mysqli_fetch_array())
  if(mysqli_num_rows($query)>0){
    echo '<script>alert("username already exists")</script>';  
  }

    header("location:invoice.php");
    die();
}
*/
         
      
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
<body >
    

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
           
            <li><a class="dropdown-item" href="product.php">Furnitures</a></li>
            <li><a class="dropdown-item" href="product.php">Clothing</a></li>
          </ul>
        </li>
        <li class="logo"><a class="navbar-brand kol" href="#"><img src="images1/logo-white.png"></a></li>
      </ul>
      
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

<div class="second-nav">
  <h3><b><a href="entry.php">Home  </a>  <span><i class="fa fa-angle-right"></i>  </span>  <a href="#"> Transaction</a></b></h3>
</div>

<div class="text">
  <div class="red">
    <h1>Transaction</h1>
  </div>
</div>




<div class="line"></div>
<br><br>

<div class="text">
  <div class="red">
  <h1>Address</h1>
    <br>
    <form class="form" method="post">
    <div class="ha">
    <p>Street Address</p><input type="text" name="street_address" placeholder="Street address" required>
      </div>
      <div class="ha">
        <p>City</p><input type="text" name="city" placeholder="City" required>
      </div>
      <div class="ha">
       <p>State</p> <input type="text" name="state" placeholder="State" required>
      </div>
      <div class="ha">
        <p>Country</p><input type="text" name="country" placeholder="Country" required>
      </div>
      <div class="ha">
        <p>Landmark</p><input type="text" name="landmark" placeholder="Landmark" required>
      </div>
      <div class="ha">
        <p>Postcode</p><input type="text" name="postcode" placeholder="Postcode" required>
      </div>
      <br><br>

      <h1>Payment</h1>
    <h2>Pay with Credit Card</h2>
    <br>
      <div class="ha1">
        <p>First Name</p><input type="text" name="first_name" placeholder="First Name" required>
      </div>
      <div class="ha1">
        <p>Last Name</p><input type="text" name="last_name" placeholder="Last Name" required>
      </div>
      <div class="ha1">
        <p>Credir Card Number</p><input type="text" name="credit_card_number" placeholder="Credit Card Number" required>
      </div>
      <div class="ha1">
        <p class="shift_me">Payment Type</p>
        <div>
          <ul class="payments">
                <li><img src="images1/visa.png" width="50" height="30"></li>
                <li><img src="images1/mastercard.png" width="50" height="30"></li>
                <li><img src="images1/paypal.png" width="50" height="30"></li>
                <li><img src="images1/discover.png" width="50" height="30"></li>
          </ul>
        </div>
      </div>
      <div class="ha1">
        <p class="exp">Expiration Date</p>
        <div class="small">
          <ul class="make">
            <div>
            <li><input type="text" name="month" placeholder="mm" required ></li>
            <li>/</li>
            <li><input type="text" name="year" placeholder="yy" required></li>
          </div>
          <div>
            <li>CSC</li>
            <li><input type="text" name="csc" placeholder="CSC" required></li>
          </div>
          </ul>
        </div>
      </div>
      <div class="ha1">
         
  <input type='submit'  name='submit' value='Make Payment'>  
     
      </div>
    </form>
  </div>
</div>

<div class="line"></div>
<br><br>


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
  margin-right: 5rem;
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
  background-color: #fff;
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

/*---------------------------------transaction-----------------------------------------------------*/

.red button[type="button"] {
  background-color: white;
  text-decoration: none;
  font-size: 4rem;
  color: rgba(0,0,0,0.5);
  border: none;
  display: flex;
  justify-content: space-around;
  width: 2rem;
  cursor: pointer;
  outline: none;
  box-shadow: none;
  transform: translate(40rem,-3.5rem);
}

.red input {
  width: 60%;
  color:rgba(0,0,0,0.8);
}

.red input[type="text"]{
  border: 1px solid rgba(0,0,0,0.4);
  border-radius: .3rem;
  height: 3rem;
  font-size: 1.5rem;
  color:rgba(0,0,0,0.8);
  margin-top: 1rem;
  padding-left: 1rem;
}

.red input[type="submit"]{
  border: none;
  outline: none;
  line-height: 3rem;
  color: #fff;
  font-size: 1.6rem;
  background-color: rgba(0,0,0,0.8);
  cursor: pointer;
  border-radius: .5rem;
  margin-top: 3rem;
  padding: .5rem;
}
.ha{
  display: flex;
  justify-content: space-around
}
.ha p{
  width: 12rem;
}
.ha1{
  display: flex;
  justify-content: space-around;
}
.ha1 p{
  width: 18rem;
}

.red a {
  color:black;
  font-size: 1.5rem;
}

.red p {
  font-size: 1.5rem;
}


::placeholder {
  color: rgba(0,0,0,0.3);
}

/********************************************/

.payments{
  list-style: none;
}
.payments li{
  display: inline;
  padding: .8rem;
}
.payments img{
  margin-top: 2rem;
}
.shift_me{
  margin-right: 30rem;
}
.exp{
  margin-left: 1rem;
}

.small input[type="text"]{
  border: 1px solid rgba(0,0,0,0.4);
  border-radius: .3rem;
  height: 3rem;
  font-size: 1.5rem;
  color:rgba(0,0,0,0.8);
  margin-top: 1rem;
  padding-left: 1rem;
  width: 13%;
}
.small li{
  display: inline;
}
.make {
  display: flex;
  justify-content: space-around;
}
.small input[name="csc"]{
  width: 23%;
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

</body>
</html>




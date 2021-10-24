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

<link rel="stylesheet" type="text/css" href="../style.css">

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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Order
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="order_history.php" >History</a></li>
           
            <li><a class="dropdown-item" href="invoice.php">Invoice</a></li>
          
          </ul>
        </li>
       

        <li class="logo"><a class="navbar-brand kol" href="#"><img src="images1/logo-white.png"></a></li>
      </ul>
      
      <li class="nav-item dropdown">
        <a class="log nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       <?php 
       $user=$_SESSION['username'];
       echo $user;  ?>
        </a>
       
      </li>
      
      

    </div>
  </div>

</nav>




<div class="second-nav">
  <h3><b><a href="entry.php">Home  </a>  <span><i class="fa fa-angle-right"></i>  </span>  <a href="about.php"> Invoice</a></b></h3>
</div>

<div class="text">
  <div class="red">
    <h1>Invoice</h1>
  </div>
</div>

<?php

$user=  $_SESSION['username'];
$Add1 =$_SESSION['Add1'];
$Add2 = $_SESSION['Add2'];
$mail= $_SESSION['mail'] ;

     if(isset($_SESSION['Add1'])&&isset($_SESSION['Add2'])){
     $time=date(DATE_RFC822);
       echo "

       <form method='post'>

       <div class='one'>
  <div class='invoice-1'>
    <h2>Invoice number</h2>
    <p>126546</p>
  </div>
  <div class='invoice-1'>
    <h2>Date of Issue</h2>

    <p> $time  </p>

  </div>
</div>
<br>

<div class='line'></div>
<br><br>

<div class='two'>
  <div class='invoice-2'>
    <ul>
      <li>BILLED TO</li>
      <li> $user </li>
      <li> $Add1  </li>
      <li>$Add2</li>
      <li>  $mail  </li>
    </ul>
  </div>
  <div class='invoice-2'>
    <ul>
      <li>RED STORE</li>
      <li>17-A Chandigarh</li>
      <li>Pakistan</li>
      <li>564-555-1234</li>
      <li>redstore@gmail.com</li>
    </ul>
  </div>
</div>

<!-------------------------------------- table --------------------------------------------->


<div class='table'>
      <table>
          <tr>
            <th><label>Description</label></th>
            <th><label>Unit Cost($)</label></th> 
            <th><label>Quantity</label></th> 
            <th><label>Amount($)</label></th>   
          </tr>

";
        
           $total=0;
           $id=$_SESSION['u_id'];
            // for order id 
            $conn=mysqli_connect('localhost','root','','test');

                                          
            $res="Select * from order_info ORDER BY odr_Id DESC LIMIT 1";
            $re=mysqli_query($conn,$res);


              while($row= mysqli_fetch_array($re)){

            $or_id= $row['odr_Id'] ;


              }
////////////////////////////////////////////////////////////////////
          
          
           $Amt=0;
            
             $res=mysqli_query($conn,"select * from ordered_products,product where ordr_id='$or_id' and p_id=product_id");
             if(mysqli_num_rows($res)>0){

              

                    while($row=mysqli_fetch_array($res)){
                             
                        $pro_name=$row['p_name'];
                        $pro_image=$row['p_image'];
                        $pro_price=$row['p_price'];
                        $pro_qty = $row['qty'];
                       
                 


                        $total+=$pro_price;
                        $Amt=$pro_price*$pro_qty;
                        echo "
                        
                       <tr>
                        
                        <td> $pro_name </td>
                        <td> $pro_price</td>
                        <td> $pro_qty </td>
                        <td>$Amt</td>
                        
                       </tr>
                        
                        ";
                     
                       
                         
                    }
                    
                  

             }
            
echo "


         
</table>
</div>

<div class='total'>
  <h2>Invoice Total</h2>
  <h1><b> $total $   </b></h1>
</div>



<div class='total'>
<input type='submit' class='btn btn-primary' name='Download' value='Download Invoice' style='font-size:15px;' />  
</div>

 </form>


";

       
       
     }
     else
{
     echo "
     <div class='text'>
  <div class='red'>
    <h2>You have not yet ordered any item !</h2>
  </div>
</div>
     
     
     ";
}

?>

    <div class='line'></div>
<br><br>


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

/*----------------------------------------- invoice-1,2 ---------------------------------------------*/ 

.one {
  display: flex;
  justify-content: space-around;
} 
.invoice-1{
  width: 17rem;
  height: auto;
}

.two{
  display: flex;
  justify-content: space-around;
}
.invoice-2 li{
  list-style: none;
  font-size: 1.5rem;
}
.invoice-2 li:nth-child(1){
  font-size: 2rem;
}

/*---------------------------------------------TABLE---------------------------------------------------------*/

table {
    border: 1px #DDD solid;
    border-collapse: collapse;
    position: relative;
    z-index: 20;
    font-family: Arial, Helvetica, sans-serif;
  margin-left: auto; 
  margin-right: auto;
  margin-top: 10rem;
  margin-bottom: 5rem;
  width: 80%;
}
table td, table th {
    border: 1px #DDD solid;
    background: #EEE;
    border: 1px solid #ddd;
  padding: 1rem;
  text-align: center;
  font-size: 1.7rem;
}

table th {
  padding-top: 1.2rem;
  padding-bottom: 1.2rem;
  background-color: #4CAF50;
  color: rgba(255,255,255,.8);
 }

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table:after {
    position: absolute;
    top: -3px;
    left: -3px;
    bottom: 100%;
    right: 100%;
    background: green;
    content: '';
    z-index: -1;
    -webkit-animation-name: border;
    -webkit-animation-duration: 3s;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-timing-function: lenear;
    -webkit-animation-fill-mode: forwards;
}

@-webkit-keyframes border {
    from {
        top: -3px;
        top: -3px;
    }
    to {
        bottom: -4px;
        right: -4px;
    }
}

/*----------------------------------*/

.total{
  margin-left: 117rem;
  margin-bottom: 10rem;
  width: 20rem;
  padding: 2rem;
  background-color: rgba(255,255,255,.8);
}
.total h1{
  color: coral;
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


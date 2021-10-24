<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:index.html?action=login");
  
}

?>
<?php
$usr_id=$_SESSION['u_id'];
$conn=mysqli_connect('localhost','root','','test');

if(isset($_GET['id'])){
  $p_id=$_GET['id'];
 
  $sql=mysqli_query($conn,"Delete from cart where pro_id='$p_id' and user_id='$usr_id'");
if($sql){
         echo "
         <script>
         alert('Item is removed successfully');
         window.location.href='cart.php';
         
         
         
         </script>";
         
  }
  else{
    echo "
    <script>
    alert('not removed ');
   
    
    
    </script>";
  }

}

?>
 


<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,300&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="style.css">

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
  <h3><b><a href="product.php">Continue to Shopping   </a>  <span><i class="fa fa-angle-right"></i>  </span>  <a href="#"> Shopping Cart</a></b></h3>
</div>

        
    <style>
        
.table-container{
    padding :32px;
    font-family:"Roboto", sans-serif;
    margin-right:100px;
    margin-left:100px;
}

.table-container h2.table-heading{
    text-align: center;
    text-transform:uppercase;
    font-size: 24px;
    margin-bottom:32px;
    border-bottom: 1px solid #eee;
    padding-bottom: 8px;
}

.table-container table{
    width:100%;
    background:#fff;
    color: #222;
    padding: 24px;
    box-shadow: 5px 8px 15px -8px rgba(0,0,0,0.4);
     border-collapse: collapse;
}

.table-container table thead tr{
  background: #222;
  color: #fff;
}

.table-container table td,
.table-container table th{
    padding:16px 32px;
    text-align:center;
}


.table-container table tr{
    border-bottom : 1px solid #eee;
}
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
  padding-top: 1.5rem;
}
nav .logo{
  padding-left: 36rem;
}
.navbar{
  position: fixed;
  padding: 1.5rem;
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
.table-container{
  font-size: 2rem;
  margin-bottom: 8rem;
}

.cross button[type="button"] {
  background-color: white;
  text-decoration: none;
  font-size: 4rem;
  color: rgba(0,0,0,.7);
  border: none;
  display: flex;
  justify-content: space-around;
  width: 2rem;
  cursor: pointer;
  outline: none;
  box-shadow: none;
  padding-left: 3rem;
}


    </style>


  
<div class="table-container">

     <h2 class="table-heading"> Shopping Cart</h2>
   
   <table>
   <thead>
   
   <th>Product</th>
   <th>Product Name</th>
   <th>Category</th>
   <th>Brand</th>
   <th>Price($)</th>
   <th>quantity</th>
   <th>Discard</th>
   
   </thead>
   
         <tbody>
  
           <?php
            $code = $_SESSION['u_id'];
           $total=0;
             $conn=mysqli_connect("localhost","root",'','test');
             $res=mysqli_query($conn,"select * from product,cart,category,brand where pro_id=p_id and cat_id=p_category and brand_id=p_brand ");
             if(mysqli_num_rows($res)>0){

                    

                    while($row=mysqli_fetch_array($res)){
                             
                        $pro_name=$row['p_name'];
                        $pro_image=$row['p_image'];
                        $pro_price=$row['p_price'];
                        $p_id=$row['pro_id'];
                        $pro_cat= $row['category_name'];
                        $pro_brand=$row['brand_name'];
                        $userid= $row['user_id'];


                      
                         if($_SESSION['u_id']==$userid){
                            $total+=$pro_price;
                            $_SESSION['totalAmt']= $total;
                        echo "
                        
                       <tr class='cross'>
                       
                            
                            <td> <img src='images/$pro_image' style='width:100px;height=100px;'> </td>
                            <td>$pro_name</td>
                            <td> $pro_cat</td>
                            <td> $pro_brand</td>
                            <td> $pro_price</td>
                           
                            <td> <input id='action' type='number' name='qty' value='1' style='width:40px; text-align:center'/></td>
                            <td><a href='cart.php?id=$p_id'>  <button  type='button' class='close' aria-label='Close'> 
                              <span >&times;</span>
                            </button></a></td>
                       
                          
                      
                       
                       </tr>
                        
                        ";
            



                         }
                       
                         
                    }
                   
                    echo "Total Amount: ".$total. "$";  
                    echo" 
                    <a href='transaction.php'> <button class='btn btn-warning'> Buy </button></a>
                    <a href='cart.php?remove=$code'> <button class='btn btn-danger'> Remove all items </button></a>

                    ";

             }

             if(isset($_GET['remove'])){
                  
              $remove=$_GET['remove'];
          $re=mysqli_query($conn,"delete from cart where user_id='$remove'");

          if($re){
            
          echo "<script>
          alert('All items removed ');
          window.location.href='cart.php';
          </script>";
        
         
          }
          }
             ?>

   
        </tbody>
   
   
   </table>
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




  



<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.html?action=login");  
 }  
 ?>  

<?php
$conn=mysqli_connect("localhost",'root','','test');

 
$ip_add = getHostByName(getHostName());



if(isset($_GET['addtocart'])){

  $pid=$_GET["addtocart"];

  

   
     
      $use_id= $_SESSION["u_id"];
     

     $res=mysqli_query($conn,"select * from cart where pro_id='$pid' and user_id='$use_id' ");

     if(mysqli_num_rows($res)>0)
         echo "
        
         <script>
         alert('Product has alredy added into cart');
         window.location.href='product.php';
         </script>
         ";
     else{
       $sql="Insert into cart (pro_id,ip_address,user_id,qty) values('$pid','$ip_add','$use_id','1')";
      
      if(mysqli_query($conn,$sql)){
        echo "
      
        <script>
        alert(' Product added successfully into cart');
        window.location.href='product.php';
        </script>
        ";
       
      }
    }
   
  }
    

?>
 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Products</title>  
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
          <!-- JavaScript Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
          <!-- CSS only -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,300&display=swap" rel="stylesheet">


          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
          <!----------font awesome-------------->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
          <style>
.header{
    
    text-align:center;
    padding :1px;
    color: white;
  }
          </style>

          <!-- footr style -->
          <style>
          
          .footer{
  background: #000;
  color: #8a8a8a;
  font-size: 15px;
  padding: 48px 16px;
}
.footer p{
  color: #8a8a8a;
}
.footer h3{
  color: #fff;
  margin-bottom: 16px;
}

.footer-col-1, .footer-col-2, .footer-col-3, .footer-col-4{
  min-width: 200px;
  margin-bottom: 16px;
}
.footer-col-2{
  flex:1;
  text-align: left;
}
.footer-col-2 img{
  width: 18rem;
  margin-bottom: 1rem;
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
  height: 1px;
  margin: 1rem 0;
}
.copyright{
  text-align: center;
}

  
    
          </style>
         
        </head>  
      <body> 
          <div method="post">

     

           <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand kol" href="#"><img src="images1/logo-white.png" width="80"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="entry.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about/about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Electronics</a></li>
           
            <li><a class="dropdown-item" href="#">Furnitures</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Clothing</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" onkeyup="search(this.value)" placeholder="Search" aria-label="Search" required>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <ul class="navbar-nav  mb-2 mb-lg-0">
      <li class="nav-item dropdown" >
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

      <li>
      <a class="nav-link" href="cart.php" style="margin-right:20px">  <img src="images/cart5.png" style="width:30px; height:30px;background:black;border-radius:50%"> </a>
  
      </li>
      
      </ul>
    
       
    </div>
  </div>
</nav>




<style>

.sidebar {
  float: left;
  width: 15%;
  height: 100%; /* only for demonstration, should be removed */
  background: #282828;
  color: white;
  padding: 40px;
  text-align:center;
}

.content{
  float: left;
  width: 80%;
  height: 1800px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
  
}
 
 

  .navsec::after {
  content: "";
  display: table;
  clear: both;

}
.resize{
  height: 100vh;
  width: 250px;
  background: white;
}

</style>

<div class="navsec">
  
  <div class="sidebar" >

  <h3 class="font-weight-bold" style="color:lightgreen"> Catagories</h3><br>
  <dl>
<!--
  <dt class="navbar-brand">   Electronics  </dt><br>
  <dt> <a class="navbar-brand" href="#"> Furnitures</a>   </dt><br>
  <dt>  <a class="navbar-brand" href="#"> Clothes</a>   </dt><br>
  <dt>  <a class="navbar-brand" href="#">  Home Appliances</a>   </dt><br>
 -->
 <dd class="navbar-brand"> Electronics </dd>
  <dd class="navbar-brand"> Furnitures </dd>
  <dd class="navbar-brand">Clothes</dd>
  <dd class="navbar-brand">Home Appliances</dd>
 

  </dl>
 


  <h3 class="font-weight-bold" style="color:lightgreen"> Brands</h3><br>
  <dl>
  <dd class="navbar-brand"> Apple </dd>
  <dd class="navbar-brand"> Samsung </dd>
  <dd class="navbar-brand">Asley</dd>
  <dd class="navbar-brand">Kartell</dd>
  <dd class="navbar-brand"> Nike </dd>
<dd class="navbar-brand"> Adidas </dd>
<dd class="navbar-brand"> LG </dd>
<dd class="navbar-brand"> Whirlpool </dd>


 
</dl>


  
   </div>

   <script>
    function search(v) {
  reset();

  var out = document.querySelectorAll('img:not([alt*="' + v + '"])');
  [].forEach.call(out, function(x) {
    x.style.display = 'none';
  });
}

function reset() {
  [].forEach.call(document.querySelectorAll('img'), function(x) {
    x.removeAttribute('style');
  });
}
</script>

<style>
.setinline{
   display:inline;
   padding :  2rem;
   float:left;
   margin: 1rem;
   box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
  transition: transform 0.5s;
}
.setinline:hover{
  transform: translateY(-10px);
}
.content1{
    display: block;
    position : relative;
    white-space : nowrap;
    padding :  0px;
    margin: 0px;
    top: 0px;
}
.product-name a{
  text-decoration: none;
  color: black;
}
.rating i{
  color: #FFD700;
}

</style>

  <?php 
  if(isset($_GET['p'])){
    $pid=$_GET['p'];

$conn = mysqli_connect("localhost","root","","test");

$res=mysqli_query($conn, "select * from product,category where p_category=cat_id and p_id='$pid' ");
if(mysqli_num_rows($res)>0){

  while($row=mysqli_fetch_array($res)){
      $pro_id    = $row['p_id'];
      $pro_cat   = $row['p_category'];
      $pro_brand = $row['p_brand'];
      $pro_title = $row['p_name'];
      $pro_price = $row['p_price'];
      $pro_image = $row['p_image'];

      $cat_name = $row['category_name'];
  }    
      echo "
    
      <div class='content1' align='center' >
         <div class='setinline' align='center'> 
             <h2  class='product-price header-cart-item-info' style='color:red;font-size:28px;'>$cat_name</h2>
             <a href='product_details.php?p=$pro_id'><div class='product'>
                  <div class='product-img'>
                     <img src='images/$pro_image' style='max-height: 170px;' alt='$cat_name'>
                  </div>
              </a>

             <div class='product-body' style='text-align:center'>
                 
                  <h5  class='product-name header-cart-item-name'><a href='product_details.php?p=$pro_id'>$pro_title</a></h5>
                
                   <div class='rating'>
                      <i class='fa fa-star'></i>
                      <i class='fa fa-star'></i>
                      <i class='fa fa-star'></i>
                      <i class='fa fa-star'></i>
                      <i class='fa fa-star-o'></i>
                   </div>

                  <h6  class='product-price header-cart-item-info' style='color:red;font-size:20px;'>$pro_price<del class='product-old-price' style='font-size:13px;'>$999.00</del></h6>
         
                  <div class='product-btns' style='text-align:center'>
        
           
                  </div>
             </div>
        
             <div class='add-to-cart' style='text-align:center;margin-top: 3px'>
                 <a href='product.php?addtocart=$pro_id'>
                      <button  pid='$pro_id' id='product' class='btn btn-warning'  href='#'><i class='fa fa-shopping-cart'></i> Add To Cart</button>
                 </a>
             </div>

           
             <h4 class='product-price header-cart-item-info' style='margin-top:20px' >
             Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut<br> enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
             </h4>
             
        </div>
     </div>

     
 </div>
      ";
  

}

  }
?>



  </div>
 


<!--footer-->

<div class="footer">
    <div class="container">
      <div class="row" class="kol">
        <div class="footer-col-2">
          <img src="images/logo-white.png">
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
 












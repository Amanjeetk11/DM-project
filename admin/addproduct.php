
<?php  
session_start(); 
include "Sidenav.php";
 //entry.php  
  
 if(!isset($_SESSION["admin"]))  
 {  
      header("location:admin_log.php?action=login");  
 }  
 ?> 
 
 <?php
$connect = mysqli_connect("localhost", "root", "", "test");  
 
if(isset($_POST["addproduct"])){

    $product_category = mysqli_real_escape_string($connect, $_POST["p_category"]);  
    $product_brand = mysqli_real_escape_string($connect, $_POST['p_brand']);
    $product_name = mysqli_real_escape_string($connect, $_POST["p_name"]);
    $product_price = mysqli_real_escape_string($connect, $_POST["p_price"]);  
    $product_image = mysqli_real_escape_string($connect, $_POST['p_image']);
   
   

   //$password = password_hash($password, PASSWORD_DEFAULT);  
   $res= mysqli_query($connect,"select * from product where p_image='$product_image' ");

 if(mysqli_num_rows($res)>0){
 
      $query="Update product set  p_category='$product_category', p_brand='$product_brand', p_name='$product_name', p_price='$product_price'where p_image='$product_image'";
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Product updated sucessfully")</script>';  
      } 
    }
  else
 {


    $query = "INSERT INTO product (p_category, p_brand,  p_name,  p_price, p_image) VALUES('$product_category', '$product_brand','$product_name', '$product_price', '$product_image')";  
    if(mysqli_query($connect, $query))  
    {  
         echo '<script>alert("Product added sucessfully")</script>';  
    } 
    else
   {
    echo '<script>alert("Product not added ")</script>';  
   }
  
                     }

  
                    }  


?>


  
 <!DOCTYPE html>
 <html >
 <head>
  
 <title>Webslesson Tutorial | PHP Login Registration Script by using password_hash() method</title>  
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
       
           <style>
       body{
      background: url("../back_images/abs.jpg");
      
      background-color: grey;
     
       }
    </style>

 </head>
 
 <body >
<br><br><br>
 <div class="container" style="width:500px;background:light-grey; margin-left :500px"> 
 
 <h3 align="center"style="color:lightgrey" >Add Product</h3>  
                <br />  <br/>

     <form class="row g-3" method="post">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" style="color:lightgrey">Product Name</label>
    <input type="text" class="form-control" name="p_name" placeholder="Enter product name" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label" style="color:lightgrey"  > Product Price</label>
    <input type="text" class="form-control" name="p_price" placeholder="price($)" required>
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" style="color:lightgrey" >Product Categories</label>
    <select  class="form-control" name="p_category" style="width: 230px; height: 38px"  placeholder=" Choose interger for electric,furniture or clothes category," required>
  
    <option selected>1</option>
    <option selected>2</option>
    <option selected>3</option>
    <option selected>4</option>
    <option selected> </option>
   
  </select>
  </div>
  <div class="col-md-6">
  <label for="formFile" class="form-label" style="color:lightgrey"   >Add Image</label>
  <input class="form-control" type="file" name="p_image" placeholder="Attach product image " required>
</div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" style="color:lightgrey"  >Product Brand</label>
    <select name="p_brand" class="form-control" style="width: 230px; height: 38px" placeholder=" Choose interger for HP,Samsung or Asley category" required>
   
    <option selected>1</option>
    <option selected>2</option>
    <option selected>3</option>
    <option selected>4</option>
    <option selected>5</option>
    <option selected>6</option>
    <option selected>7</option>
    <option selected>8</option>
    <option selected> </option>
   
  </select>
  </div>

   
  <div class="col-12" align="center">
     <input type="submit"  name="addproduct" value="Update Product" class="btn btn-primary"  style="background:lightgreen;color:black;margin-top:14px"/> 
    </div>


  
</form>



    
   
  

 </body>
 </html>
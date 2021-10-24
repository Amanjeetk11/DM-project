
<?php  
 //entry.php    
 if(!isset($_SESSION["admin"]))  
 {  
      header("location:admin_log.php?action=login");  
 }  
 ?>  
 


<!DOCTYPE html>
<html lang="en">
<head>

<title>Webslesson Tutorial | PHP Login Registration Script by using password_hash() method</title>  
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        

<style>

.sidebar {
  float: left;
  width: 23%;
  height: 662px; /* only for demonstration, should be removed */
  background: #282828;
  color: white;
  padding: 60px;
  background: url("../back_images/abs.jpg");

}

</style>

</head>

<body>
    

<div class="navsec" >
  
  <div class="sidebar" >

  <h1 class="font-weight-bold"> <?php echo  $_SESSION["admin"]?></h1><br>
  <ul>
      <br>
      <li> <a class="navbar-brand" href="AdminEntry.php"> Dashboard</a>  </li> <br>
      <li> <a class="navbar-brand" href="userlist.php">User List</a>  </li> <br>
      <li> <a class="navbar-brand" href="addproduct.php"> Add Product</a>  </li> <br>
      <li>  <a class="navbar-brand" href="product_list.php"> Product List</a></li>  <br>
      
      <li>   <a class="navbar-brand" href="admin_order.php">Orders</a> </li> <br>
     
      <li>   <a class="navbar-brand" href="admin_forgetpass.php">  Change password</a> </li> <br>
      <li>   <a class="navbar-brand" href="admin_logout.php">Logout</a> </li>
  </ul>
  

    
  
   </div>


</div>

</body>
</html>
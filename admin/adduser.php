
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

  
 
if(isset($_POST["update"])){

    $u_name = mysqli_real_escape_string($connect, $_POST['username']);  
    $u_pass = mysqli_real_escape_string($connect, $_POST['password']);
    $u_email = mysqli_real_escape_string($connect, $_POST['email']);
  

   //$password = password_hash($password, PASSWORD_DEFAULT);  
   $res= mysqli_query($connect,"select * from users where username='$u_name' ");

 if(mysqli_num_rows($res)>0){
 
      $query="Update users set  password='$u_pass', email='$u_email' where username='$u_name'";
      if(mysqli_query($connect, $query))  
      
      
      echo '<script>alert("User details updated successfully")</script>'; 
    }
}

    if(isset($_POST["add"])){
  $u_name = mysqli_real_escape_string($connect, $_POST['username']);  
  $u_pass = mysqli_real_escape_string($connect, $_POST['password']);
  $u_email = mysqli_real_escape_string($connect, $_POST['email']);


        $res= mysqli_query($connect,"select * from users where username='$u_name' ");
        if(mysqli_num_rows($res)>0){
          echo '<script>alert("Username already exists")</script>';  
        }
        else{

        $query = "INSERT INTO users (username,password,email) VALUES('$u_name', '$u_pass','$u_email')";  
        if(mysqli_query($connect, $query))  
        {  
             echo '<script>alert("User added sucessfully")</script>';  
        } 
        else
       {
        echo '<script>alert("User is not added ")</script>';  
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
 
 <h3 align="center"style="color:lightgrey" >Manage user</h3>  
                <br />  <br/>

     <form class="row g-3" method="post">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" style="color:lightgrey"> Username</label>
    <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label" style="color:lightgrey"  > Password</label>
    <input type="text" class="form-control" name="password" placeholder="Enter Password" required>
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" style="color:lightgrey"> Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
  </div>
  
 

   
  <div class="col-12" align="center">
     <input type="submit"  name="add" value="Add User" class="btn btn-primary"  style="background:lightgreen;color:black;margin-top:14px"/> 
    </div>
    <div class="col-12" align="center">
     <input type="submit"  name="update" value="Update user details" class="btn btn-primary"  style="background:lightgreen;color:red;margin-top:14px"/> 
    </div>


  
</form>



    
   
  

 </body>
 </html>

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
 
 
 if(isset($_POST["Changepass"]))  
 {  
      
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $Confpass = mysqli_real_escape_string($connect, $_POST["confpass"]);
          
        //   $password = password_hash($password, PASSWORD_DEFAULT);  
      
        
        if($Confpass==$password){
           
             $res="UPDATE users SET password='$password' where username='$username' ";
             
             if(mysqli_query($connect,$res)&& $_SESSION['username']==$username){
             echo '<script>alert("Password upated successfully")</script>';
             
             }
             else 
             echo "<script>alert('Password is not changed')</script>";
             
          }
          else{
             
             echo "<script>alert(' Password does not match')</script>";
          } 
}
        
 ?>  

 <!DOCTYPE html>  
 <html>  
      <head>  
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
       
           <style>
               body{
                background:url("../back_images/abs.jpg");
               }
              
           </style>

        
      </head>  
      <body>  
      <br><br><br><br><br>
 <div class="container" style="width:500px;background:light-grey; margin-left :500px"> 
 
 <h3 align="center"style="color:lightgrey" >Change password</h3>  
               <br/>

     <form class="row g-3" method="post">
  <div class="row-md-6">
    <label for="inputEmail4" class="form-label" style="color:lightgrey"> Username</label>
    <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
  </div>
  <br><br><br>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label" style="color:lightgrey"  >New Password</label>
    <input type="text" class="form-control" name="password" placeholder="Enter New Password" required>
  </div>
  <br><br><br>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" style="color:lightgrey"> Confirm password</label>
    <input type="text" class="form-control" name="confpass" placeholder="Confirm Password" required>
  </div>
  <br><br><br>
 
  <br><br>

   
  <div class="col-12" align="center">
     <input type="submit"  name="Changepass" value=" Upadate Password" class="btn btn-primary"  style="background:lightgreen;color:black;margin-top:14px"/> 
    </div>
   


  
</form>



    
      </body>  
 </html>
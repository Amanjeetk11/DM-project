<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 session_start();  
if(!isset($_SESSION['username']))
header('location:index.html?action=login'); 

 if(isset($_POST["forgetpass"]))  
 {  
      
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $Confpass = mysqli_real_escape_string($connect, $_POST["confirmpassword"]);
          
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
           <title>Forgot password</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <br />  
                
            
                <h3 align="center">Forget Password</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" placeholder="Enter Username" required />  
                     <br />  
                     <label>New Password</label>  
                     <input type="text" name="password" class="form-control"  placeholder="New Password" required/>  
                     <br /> 
                     <label>Confirm Password</label>  
                     <input type="text" name="confirmpassword" class="form-control"  placeholder="Confirm Password" required/>  
                     <br /> 
                     
                     <input type="submit" name="forgetpass" value="Update Password" class="btn btn-info" />  
                    
                </form> 
            
                
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
  background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.3)), url('images/Online_shop.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top-center;
  /*background-attachment: fixed;*/
  height: 72.5rem;
  width: 100%;
  margin bottom: 3rem;
}
.container{
  background: rgba(0,0,0,.4);
  color: rgba(255,255,255,.8);
  padding: 5rem;
  padding-left: 5rem;
  padding-right: 5rem;
}
form a{
  color: coral;
}
.hmm{
  padding-top: 5rem;
  margin-top: 5rem;
}
.container img{
  width: 12rem;
}
form input[type="submit"]{
  align-items: center;
  align-content: center;
  text-align: center;
  padding: .7rem 14.5rem;
  border-style: none
}

</style> 
      </body>  
 </html>
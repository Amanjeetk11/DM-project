 <?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 session_start();  

 
 if(isset($_SESSION["username"]))  
 {  
      header("location:entry.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $Confpass = mysqli_real_escape_string($connect, $_POST["confirmpassword"]);
           $email = mysqli_real_escape_string($connect, $_POST['email']);

          
        //   $password = password_hash($password, PASSWORD_DEFAULT);  
        $res= mysqli_query($connect,"select * from users where username='$username' ");
        if(mysqli_num_rows($res)>0){
          echo '<script>alert("username already exists")</script>';  
        }
        else
        {

        if($Confpass==$password){
           $query = "INSERT INTO users(username, password,  email) VALUES('$username', '$password','$email')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           } 
          }
          else{
             
             echo "<script>alert(' Password does not match')</script>";
          } 
       }
        
 }  
 if(isset($_POST["login"]))  
 {  
       
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
               $row=mysqli_fetch_array($result);
              
             /*  echo "$row[0] $row[1] $row[3]";  */
                     if($_POST['username']==$username&&$_POST['password']==$password) 
                     {  

                          //return true;  
                          $_SESSION["username"] = $username;  
                         
                          
                          $_SESSION["mail"] = $row[3];
                       
                          $_SESSION["u_id"] =$row[0];

                         
                            
                         header("location:entry.php");   
                     }  
                     else  
                     {  
                          //return false;  
                          
                          echo '<script>alert("Wrong User Details")</script>';  
                     }  
                
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }      
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Registration form</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container hmm" style="width:500px;">  
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?> 
                <div align="center"><img src="images1/logo-white.png"></div> 
                <h3 align="center">Login</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" placeholder="Enter Username" required/>  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="text" name="password" class="form-control" placeholder="Enter Password" required />  
                     <br> 
                     <p class="forgot"><a href="forget_pas.php">Forgot Password ?</a></p>
                     <input type="submit" name="login" value="Login" class="btn btn-success" />  
                     <br>  <br>
                    
                     <p align="center">Don't have a login ? <a href="index.php">Register now</a>.</p>  
                     <br />
                     <p>Use of this constitutes acceptance of our User Agreement and Privacy Policy</p>
                </form>  
                <?php       
                }  
                else  
                {  
                ?> 
                <div align="center"><img src="images1/logo-white.png"></div>
                <h3 align="center">Register</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" placeholder="Enter Username" required />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="text" name="password" class="form-control"  placeholder="Enter Password" required/>  
                     <br /> 
                     <label>Confirm Password</label>  
                     <input type="text" name="confirmpassword" class="form-control"  placeholder="Confirm Password" required/>  
                     <br /> 
                     <label>Enter Email</label>  
                     <input type="email" name="email" class="form-control"  placeholder="Enter email " required/>  
                     <br /> 
                     <p align="center">By registering, you agree to our <a href="#">User Agreement</a> & <a href="#">privacy policy</a></p> 
                     <div class="sub">
                     <input type="submit" name="register" value="Register" class="btn btn-danger" />
                     </div>  
                     <br />  
                     <p align="center">Already registered ? <a href="index.php?action=login">Log In now</a>.</p>  
                </form> 
            
                <?php  
                }  
                ?>  
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
  background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.3)), url('back_images/rk1 (8).jpg');
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
  padding: 3rem;
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
  padding: .7rem 17.2rem;
  border-style: none
}

</style> 

      </body>  
 </html>
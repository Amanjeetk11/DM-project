
<?php  
session_start(); 
include "Sidenav.php";
 //entry.php  
  
 if(!isset($_SESSION["admin"]))  
 {  
      header("location:admin_log.php?action=login");  
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
                  }
       </style>
         

 </head>
 
 <body >
   
 </body>
 </html>
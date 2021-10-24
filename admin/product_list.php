
<?php  
session_start();


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
      background: url("../back_images/123 (2).jpg");
      
      background-color: grey;
     
       }

      
        
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
            background:#54644;
            color: lightgrey;
            padding: 24px;
            box-shadow: 5px 8px 15px -8px rgba(0,0,0,0.4);
             border-collapse: collapse;
        }
        
        .table-container table thead tr{
          background:#B22222;
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
           
    </style>

 </head>
 
 <body >





<div class="table-container">
<h2 align='center' style='color:lightgrey' class='table-heading'>product List </h2>

  
<a  href='addproduct.php'>
    <input  type='button'  value ='Add Product'  class='btn btn-success' style='width:15%;margin-bottom:10px' />
                </a>
   <table>
   <thead>

   <th>Sr no.</th>
   <th>Image</th>
   <th> Product Name</th>
   <th> Price($)</th>
   <th>Action</th>
   
   
   
   </thead>
   
         <tbody>
   
        
           <?php
        
        
          //date
        
          $conn= mysqli_connect("localhost","root",'','test');
          $res = mysqli_query($conn,"select* from  product");         
          if(mysqli_num_rows($res)>0){
           
              while($row=mysqli_fetch_array($res)){
                  
                     $pid=$row['p_id'];
                     $car=$row['p_category'];
                     $bra=$row['p_brand'];
                     $name=$row['p_name'];
                     $price=$row['p_price'];
                     $img=$row['p_image'];

            
              echo"
                  <form method='post'>

                     <tr class='cross'>
                           
                           <td>$pid</td>
                           <td> <img src='../images/$img' style='width:50px;height=50px;background:white'> </td>
                           <td style='color:darkpink'><b>$name</b> </td>
                           <td> $price</td>
                           <td>  
                                 <a href='checkout.php?id=$pid'>
                                 <input type='button'  value ='remove'  class='btn btn-danger' style='width:60%' />
                                 </a>
                           </td>
                           
                        
                     </tr>
                           
                  </form>
              
              
              ";

              }
              
          }

             ?>
   
        </tbody>
   
   
   </table>
</div>

 </body>
 </html>
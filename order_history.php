<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.html?action=login");  
 }  
 ?> 



<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        
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
  background: brown;
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
<body>


<div class="table-container">

     <h2 class="table-heading"> Order History</h2>
   
   <table>
   <thead>

   <th>Order ID</th>
   <th>Transaction ID</th>
   <th>Date</th>
   <th>Name</th>
   <th>Address</th>
   <th>Status</th>
   <th>Total Amount</th>
   
   
   </thead>
   
         <tbody>
   
        
           <?php
          $count=0;
          $id=$_SESSION['u_id'];
        
          //date
        
          $conn= mysqli_connect("localhost","root",'','test');
          $res = mysqli_query($conn,"select* from `order`,order_info where odr_Id=order_id ");
         
          if(mysqli_num_rows($res)>0){
           
              while($row=mysqli_fetch_array($res)){
                  
                     $order_id=$row['order_id'];
                     $tran_id=$row['tran_id'];
                    $usr_ID=$row['user_id'];
                     $name=$row['card_holder_name'];
                     $Add=$row['Shipping_Add'];
                     $status=$row['order_status'];
                     $total_amt=$row['total_Amt'];
                     $date=$row['order_date'];

            if($id==$usr_ID){
              echo"
              
              <tr class='cross'>
             
              <td>$order_id</td>
             <td style='color:red'> $tran_id</td>
              <td> $date</td>
              <td> $name</td>
              <td>$Add</td>
              <td> $status</td>
              <td> $total_amt$</td>
             
             </tr>
              
              ";
                          }
          
                
          
          
              }
              
          }
          
             ?>
   
        </tbody>
   
   
   </table>
</div>
    
</body>
</html>
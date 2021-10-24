
<?php  
session_start();


 //entry.php  
  
 if(!isset($_SESSION["admin"]))  
 {  
      header("location:admin_log.php?action=login");  
 }  
 ?> 
 
 <?php


if( isset($_POST['status'])){

    $conn=mysqli_connect('localhost','root','','test');
    $st=mysqli_real_escape_string($conn, $_POST["status"]);
    $_SESSION['st']=$st;
    echo "<script>alert($st)</script>";
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
      background: url("../back_images/123 (3).jpg");
      
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
<h2 align='center' style='color:lightgrey' class='table-heading'>Order</h2>
   
<
   
   <table>
   <thead>
   <th>Sr. no.</th>
   <th>Transaction ID</th>
   <th>Customer Name</th>
   <th>Products</th>
   
   <th> Address </th>
   <th> Status </th>
   <th> Action </th>
  
   
   
   
   </thead>
   
         <tbody>
   
        
           <?php
        
        
          //date
        
          $conn= mysqli_connect("localhost","root",'','test');
        //  $res = mysqli_query($conn,"select* from  product, order_info,`order` where odr_Id=order_id ");
     // $res = mysqli_query($conn,"select* from  `order`,ordered_products,product,order_info where order_id=ordr_id and product_id=p_id  ");         
            //$res=mysqli_query($conn,"Select * from ordered_products,product,users where product_id=p_id and user_ID=usr_id  ");
             $res= mysqli_query($conn,"select* from  product, order_info,`order`,ordered_products where ordr_Id=order_id and product_id=p_id  and order_id=odr_id ");

            if(mysqli_num_rows($res)>0){
           
              while($row=mysqli_fetch_array($res)){
                  
                  $srno= $row['ordered_pro_id'];
                   $tranid=$row['tran_id'];
                  //   $name=$row['card_holder_name'];
                     $name=$row['card_holder_name'];
                   
                     $Add=$row['Shipping_Add'];
                     $status=$row['order_status'];
                     $pro=$row['p_name'];
                    $order_id=$row['order_id'];
                    $o_id=$row['odr_Id'];
              
            
              echo"
        

               <tr class='cross'>
               <form method='get' action='checkout3.php'>

                     <td>$srno</td>         
                     <td>   <input type='text' name='tranid' value ='$tranid'  class='form-control' style='width: 230px; height: 35px;' placeholder='Transaction Id' required/></td> 
                     <td style='color:darkpink'><b>$name</b> </td>
                     <td>$pro</td> 
                    
                     <td>$Add </td>  
                     <td >
             
                          <div align='center'>
                                    <select  class='form-control' name='status' style='width: 100px; height: 35px;'  placeholder=' Choose interger for electric,furniture or clothes category,' required>
                                    
                                    <option selected>Completed</option>
                                    <option selected>Processing</option>
                                    <option selected>Refunded</option>
                                    <option selected>Canceled</option>
                                    <option selected>Failed</option>
                                    <option selected>Pending Payment</option>
                                    <option selected></option>
                                    

                                
                                </select>
                          </div>
            
                      
                     </td>  

                     <td>  
                           
                            <input type='submit'  name='$order_id' value ='Update'  class='btn btn-danger' style='width:100%' />
                           
                     </td> 
                        
                           
            </form>  
            
                </tr>
                           
         
              
              
              ";



              }
              
          }

          
                    

             ?>
   
        </tbody>
   
   
   </table>
</div>

 </body>
 </html>
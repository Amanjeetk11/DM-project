<?php  
session_start(); 

 //entry.php  
  
 if(!isset($_SESSION["admin"]))  
 {  
      header("location:admin_log.php?action=login");  
 }  
 ?>  
<?php



  //USER_LIST
  $conn=mysqli_connect('localhost','root','','test');
  
  

          if(isset($_GET['tranid']) and isset($_GET['status'])){

           $status = $_GET['status'];
            $tid = $_GET['tranid'];
        
            echo "<script>alert($tid $status)</script>";
              $res="UPDATE `order` SET order_status='$status' where tran_id='$tid' ";

              if(mysqli_query($conn,$res)){
              echo "<script>
              alert('Order Status Updated Successfully')
              window.location.href='admin_order.php';
              </script>";
               }
              
              else {
              echo "<script>
              alert('Order Status is not Changed');
              window.location.href='admin_order.php';
              </script>";
              }

              
            }
            else{
            echo "
            <script>
            alert('Some Error');
            window.location.href='admin_order.php';

            </script>";
            }
  
?>






<?php 
/*
  //USER_LIST
  $conn=mysqli_connect('localhost','root','','test');

          if(isset($_GET['ordrid'])and isset($_GET['ordr_product_id'])){

           // and isset($_GET['or_info_id'])
          $oid= $_GET['ordrid'];
          $opid= $_GET['ordr_product_id'];
       //   $ord_info_id=$_GET['or_info_id'];

          
          $sql1=mysqli_query($conn,"delete from `order` where order_id='$oid'");
          $sql2=mysqli_query($conn,"delete from ordered_products where ordered_pro_id='$opid'");
       //   $sql3=mysqli_query($conn,"delete from order_info where odr_Id='$opid'");

          if($sql1&&$sql2){
          echo "
          <script>alert('Order deleted successfully !! ');
          window.location.href='admin_order.php';
          </script>";
        }
        else{
          
          echo "
          <script>alert('Order is not deleted  ');
          window.location.href='admin_order.php';
          </script>";
        }

  }

*/  
?>
<?php 
  
  $conn=mysqli_connect('localhost','root','','test');

  //PRODCUT LIST
            if(isset($_GET['id'])){
                 $conn=mysqli_connect('localhost','root','','test');
                $id= $_GET['id'];
                $sql=mysqli_query($conn,"delete from product where p_id='$id'");
                if($sql)
                echo "
                <script>alert('Product deleted successfully  ');
                window.location.href='product_list.php';
                </script>";
              }
              else{
               echo "
               <script>alert('Product not deleted successfully  ');
               window.location.href='product_list.php';
               </script>";
              }
   

?>
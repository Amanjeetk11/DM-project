
<?php 
  //USER_LIST
  $conn=mysqli_connect('localhost','root','','test');
  if(isset($_GET['usrid'])){
    $conn=mysqli_connect('localhost','root','','test');
  $id= $_GET['usrid'];
  $sql=mysqli_query($conn,"delete from users where user_id='$id'");
  if($sql)
  echo "
  <script>alert('User deleted successfully  ');
  window.location.href='userlist.php';
  </script>";
}
else{
  echo "
  <script>alert('User not deleted successfully  ');
  window.location.href='userlist.php';
  </script>";
}

?>
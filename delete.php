<?php
  include 'connect.php';
  $id=$_GET['deleteid'];
  $sql= "DELETE FROM crud WHERE `id` = '$id'";
  $result=mysqli_query($conn,$sql);
  if($result){
    header('location:index.php');
  }
?>
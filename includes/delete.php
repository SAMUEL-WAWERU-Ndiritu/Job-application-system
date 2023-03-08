<?php
require_once '../connect.php';
  $sql = "DELETE FROM application_form WHERE id =' ". $_GET['id']."'";
  $result = mysqli_query($conn,$sql);
  if($result){
      echo "<script>alert('Record Delete succefully')</script>";
      echo "<script>window.location='../home.php'</script>";
    
      
  
  }else{
      echo "<script>alert ('Unable to delete')</script>";
  }



?>
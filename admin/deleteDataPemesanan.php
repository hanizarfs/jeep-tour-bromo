<?php
  include "../connection/config.php";
  
  $id = $_GET['id'];
  $sql = "DELETE FROM `orders` WHERE id=$id";
  if(mysqli_query($conn, $sql)) {
    header("Location: dashboard.php");
  } else {
    echo "Error";
  }
?>
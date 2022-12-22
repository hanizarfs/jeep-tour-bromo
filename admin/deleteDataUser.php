<?php
  include "../connection/config.php";
  
  $nin = $_GET['nin'];
  $sql = "DELETE FROM `users` WHERE nin=$nin";
  if(mysqli_query($conn, $sql)) {
    header("Location: dashboard.php");
  } else {
    echo "Error";
  }
?>
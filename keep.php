<?php


    
  
  $update = false;
  $id = 0;
  if (isset($_POST['submit'])) {
      
    $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
      $msg = $_POST['msg'];
      $mysqli->query("INSERT INTO `chat`(`msg`) VALUES ('$msg')") or die($mysqli->error);
      header("location: Groupchat.php");
  }

?>
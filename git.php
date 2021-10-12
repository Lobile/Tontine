<?php
  session_start();
  $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
  

$update = false;
$id = 0;

if (isset($_POST['update'])) {
    $date=$_POST['date'];
    $id = $_GET['update'];
  
    $mysqli->query("Update beneficiary set beneficiary='$date' WHERE id=$id") or die($mysqli->error);
    $_SESSION['message'] = "advancement done!";
    $_SESSION['msg_type'] = "success";
  
    header("location:borrows.php");
  }   

?>
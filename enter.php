<?php
  
  session_start();
  $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
  

$update = false;
$id = 0;
if (isset($_POST['paste'])) {
    $firstname = $_POST['login'];
    $comment = $_POST['message'];
    $News = $_POST['News'];
    $order = $_POST['order'];
    $project = $_POST['project'];
   $obj=$_POST['obj'];
    $goals = $_POST['goals'];
    $mysqli->query("INSERT INTO `report`(`report_name`, `News`, `object`, `message`, `projects`, `Salut`,  `goals`) VALUES ('$firstname', '$News', '$obj', '$comment', '$project','$order',  '$goals')") or die($mysqli->error);
    $_SESSION['message'] = "New report added";
    $_SESSION['msg_type'] = "success";
    header("location: report.php");   
}

?>
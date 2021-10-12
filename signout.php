<?php
include("connection.php");
session_start();
$pabs=$_SESSION['username'];
$sql="update member set status='offline' where firstname='".$pabs."'";
$query= mysqli_query($connect,$sql) or die('error on query');
unset($_SESSION['username']);
header('location: login.php');
?>
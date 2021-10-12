<?php
session_start();

use function mysql_xdevapi\expression;

require "sendEmail8.php";
include("connection.php");

$mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
$update = false;
$id = 0;
if (isset($_POST['add'])) {
  $firstname = $_POST['name'];
  $avalist = $_POST['aName'];
  $amount = (int)$_POST['amount'];
  $Email = $_POST['Email'];


  if ($avalist != $firstname) {
    $sql = "select saving_amount * 2 as saving_amount from savings where sname ='" . $firstname . "'";
    $query = mysqli_query($connect, $sql) or die('error on query');
    $data = mysqli_fetch_assoc($query);
    if ($data['saving_amount'] >= $amount) {
      $sql12 = "select bname,avalist from borrows";
      $query12 = mysqli_query($connect, $sql12) or die('error on query');
      $data12 = mysqli_fetch_assoc($query12);
      if ($data12['avalist'] != $firstname) {
        if ($data12['bname'] != $avalist) {
          $sql5 = "INSERT INTO borrows(bname, bEmail,avalist, amount) VALUES ('$firstname','$Email', '$avalist', '$amount')";
          if (mysqli_query($connect, $sql5)) {
            $_SESSION['name'] = $firstname;
            $_SESSION['message'] = "New borrow added";
            $_SESSION['msg_type'] = "success";
            header("location: borrows.php");
          } else {
            $_SESSION['message'] = "A user cannot borrow twice a year";
            $_SESSION['msg_type'] = "danger";
            header("location: borrows.php");
          }
        } elseif ($data12['bname'] == $avalist) {
          $_SESSION['message'] = "Your avalist has debts";
          $_SESSION['msg_type'] = "danger";
          header("location: borrows.php");
        }
      } elseif ($data12['avalist'] == $firstname) {
        $_SESSION['message'] = "Sorry an avalist cannot loan";
        $_SESSION['msg_type'] = "danger";
        header("location: borrows.php");
      }
    } else {
      $_SESSION['message'] = "Amount in savings insufficient!";
      $_SESSION['msg_type'] = "danger";
      header("location: borrows.php");
    }
  } else {
    $_SESSION['message'] = "An adherent cannot have himself as Endorser!";
    $_SESSION['msg_type'] = "danger";
    header("location: borrows.php");
  }
}
?>
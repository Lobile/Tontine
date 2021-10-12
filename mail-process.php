<?php
use function mysql_xdevapi\expression;

require "sendEmail4.php";
require_once "global.php";

if (isset($_POST['send'])){
$firstname=$_POST['Name'];
$subject=$_POST['subject'];
$message = $_POST['message'];
$Email = $_POST['email'];
        $sql= "insert into comment(name,subject,Email, message) values ('$firstname','$subject','$Email','$message')";
     
        if(mysqli_query($connect, $sql)){
            $_SESSION['name'] = $firstname;
        }
        $Email = $_POST['Email'];
        $subject = "Appreciation";
        sendEmailby($Email, $firstname, $subject, $message);
        header("Location:contact.php " );
    }
      

?>

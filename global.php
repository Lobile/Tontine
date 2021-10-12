<?php 
session_start();
 require "connection1.php";
$mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
$cur_user = $cur_img = "";
$cur_name = $cur_pass ="";

if(isset($_SESSION['name'])){
    $rand= rand(0, 15);
    $cur_user = $_SESSION['name'];
 
   
    $result = $pdo->query("SELECT images,firstname from member where firstname='$cur_user' ");
    
    foreach($result as $row){
        $cur_img = $row['images'];
        $cur_pass = $row['firstname'];

    }

            
}
?>
<?php
 $server="localhost";
 $login="root";
 $pwd="";
 $db="meetings";
 $connect=mysqli_connect($server, $login, $pwd) or die("error connecting to server");
 mysqli_select_db($connect, $db) or die("error connecting to database");

 try{
    $pdo = new PDO("mysql:host=localhost;dbname=meetings","root",'');
    echo "success";
 }catch(PDOException $e){
     echo $e;
 }
?>
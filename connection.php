<?php
 $server="localhost";
 $login="root";
 $pwd="";
 $db="meetings";
 $connect=mysqli_connect($server, $login, $pwd) or die("error connecting to server");
 mysqli_select_db($connect, $db) or die("error connecting to database");
?>
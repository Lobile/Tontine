<?php
 if (isset($_POST['submit'])){
$name=$_POST['name'];
$comment=$_POST['message'];
$today=date("d-m-Y h:i:s a");
$handle=fopen('files/comment.txt','w');
fwrite($handle,"Date of today: ".$today."\n");
fwrite($handle,"report name: ".$name."\n");
fwrite($handle,"What hapenned today: \n".$comment."\n");
fclose($handle);

$read= file('files/comment.txt');
foreach($read as $fname){
     echo "Day: ".$today."\n";
    echo $fname."\n";
    echo $fcomment."\n";
    header('location: reprendre.php');
}
 }

?>
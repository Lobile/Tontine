<?php
use function mysql_xdevapi\expression;


require_once "Groupchat2.php";

include "connection.php";
if (isset($_POST['proof'])&& isset($_FILES['my_image'])){

echo "<pre>";
print_r($_FILES['my_image']);
echo "</pre>";

$uname=$_SESSION['username'];
$tery=rand();
$img_name =$_FILES['my_image']['name'];
$img_size = $_FILES['my_image']['size'];
$tmp_namee = $_FILES['my_image']['tmp_name'];
$error = $_FILES['my_image']['error'];
if($error===0){
    if($img_size > 125000){
        $em ="sorry, your file is too large";
        $_SESSION['message'] = "sorry, your file is too large!";
        $_SESSION['msg_type'] = "danger";
        header("Location: Groupchat2.php?fileSize=sorry file is too large");
      
    }else{
     $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
     $img_ex_lc = strtolower($img_ex);
     $allowed_exs= array("jpg","jpeg","png");
     if(in_array($img_ex_lc,$allowed_exs)){
        $new_img_name= $img_name;
        $img_upload_path ='chats/'.$new_img_name;
        move_uploaded_file($tmp_namee,$img_upload_path);
        
$sql= "insert into chat(uname,images) values ('$uname','$img_upload_path')";
        if(mysqli_query($connect, $sql)){
            $_SESSION['message'] = "Insertion successfull!";
            $_SESSION['msg_type'] = "success";
           
        }
        header("location:Groupchat2.php");
     }else{
         $em = "You can't upload this file type";
         $_SESSION['message'] = "Can't upload this file!";
         $_SESSION['msg_type'] = "danger";
         header("location: Groupchat2.php?fileSize=$em");
       
     }
    }

}else{
   $em = "unknown error occured";
   $_SESSION['message'] = "Insertion failed!";
   $_SESSION['msg_type'] = "danger";
    header("Location: Groupchat2.php " );
 

}
}
?>
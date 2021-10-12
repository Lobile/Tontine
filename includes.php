<?php
use function mysql_xdevapi\expression;

require "sendEmail.php";
require_once "global.php";

if (isset($_POST['host'])&& isset($_FILES['my_image'])){

echo "<pre>";
print_r($_FILES['my_image']);
echo "</pre>";
$firstname=$_POST['login'];
$phone=$_POST['phone'];
$Email = $_POST['Email'];
$job = $_POST['job'];
$Email = $_POST['Email'];

$password = $_POST['password'];
$img_name =$_FILES['my_image']['name'];
$img_size = $_FILES['my_image']['size'];
$tmp_namee = $_FILES['my_image']['tmp_name'];
$error = $_FILES['my_image']['error'];
if($error===0){
    if($img_size > 125000){
        $em ="sorry, your file is too large";
        $_SESSION['message'] = "sorry, your file is too large!";
        $_SESSION['msg_type'] = "danger";
        header("Location: Create_Admins.php?fileSize=sorry file is too large");
      
    }else{
     $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
     $img_ex_lc = strtolower($img_ex);

     $allowed_exs= array("jpg","jpeg","png");
     if(in_array($img_ex_lc,$allowed_exs)){
        $new_img_name= $_POST['login'].'.'.$img_ex_lc;
        $img_upload_path ='admin/'.$new_img_name;
        move_uploaded_file($tmp_namee,$img_upload_path);
        $sql= "insert into admin(username,password,job,phone,email,images) values ('$firstname','$password', '$job', '$Email', '$phone','$img_upload_path')";
        if(mysqli_query($connect,$sql)){
            $_SESSION['name'] = $firstname;
            $_SESSION['phone']=$phone;
           
        }
        $Email = $_POST['Email'];
        $subject = "credentials";
        $message = "Enter the following to login to start the Tontine <br> your username:".$firstname."<br> your password:".$password;
        sendEmail($Email, $firstname, $subject, $message,$password);
        
        
     }else{
         $em = "You can't upload this file type";
         $_SESSION['message'] = "Can't upload this file!";
         $_SESSION['msg_type'] = "danger";
         header("location: Create_Admins.php?fileSize=$em");
       
     }
    }

}else{
   $em = "unknown error occured";
   $_SESSION['message'] = "Insertion failed!";
   $_SESSION['msg_type'] = "danger";
    header("Location: Create_Admins.php " );
 

}
}else{
    header("Location:Create_Admins.php " );
}

if (isset($_GET['2000'])) {
    $id = $_GET['2000'];
    $mysqli->query("Update member set payment='2000' WHERE member_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=contribute2000");
}

if (isset($_GET['5000'])) {
    $id = $_GET['5000'];
    $mysqli->query("Update member set payment='5000' WHERE member_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=high");
}
if (isset($_GET['7000'])) {
    $id = $_GET['7000'];
    $mysqli->query("Update member set payment='7000' WHERE member_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=contribute7000");
}
if (isset($_GET['Not5'])) {
    $id = $_GET['Not5'];
    $mysqli->query("Update member set payment='not_paid2000' WHERE member_id=$id") or die($mysqli->error);
    $mysqli->query("Update member set fine='500' WHERE member_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution not done!";
    $_SESSION['msg_type'] = "danger";

    header("location:cotisation.php?page=contribute2000");
}
if (isset($_GET['Not4'])) {
    $id = $_GET['Not4'];
    $mysqli->query("Update member set payment='not_paid7000' WHERE member_id=$id") or die($mysqli->error);
    $mysqli->query("Update member set fine='500' WHERE member_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution not done!";
    $_SESSION['msg_type'] = "danger";

    header("location:cotisation.php?page=contribute7000");
}
if (isset($_GET['Not'])) {
    $id = $_GET['Not'];
      $mysqli->query("Update member set payment='not_paid5000' WHERE member_id=$id") or die($mysqli->error);
      $mysqli->query("Update member set fine='500' WHERE member_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution not done!";
    $_SESSION['msg_type'] = "danger";

    header("location:cotisation.php?page=high");
}
if (isset($_GET['2500'])) {
    $id = $_GET['2500'];
    $mysqli->query("Update member set paidfine='2500' WHERE member_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=contribute2000");
}
if (isset($_GET['5500'])) {
    $id = $_GET['5500'];
    $mysqli->query("Update member set paidfine='5500' WHERE member_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=high");
}
if (isset($_GET['7500'])) {
    $id = $_GET['7500'];
    $mysqli->query("Update member set paidfine='7500' WHERE member_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=contribute7000");
}
    
// require 'PHPMailerAutoload.php';

// $mail = new PHPMailer;
// $firstname=$_POST['login'];
// $Email = $_POST['Email'];
// $password = $_POST['password'];
// $subject = "credentials";
// $message = "your username:".$firstname."<br> your password:".$password;
// try {
//     $mail->SMTPOptions = array(
//         'ssl' => array(
//             'verify_peer' => false,
//             'verify_peer_name' => false,
//             'allow_self_signed' => true
//         )
//     );
//     $mail->SMTPDebug = 2;
//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';
//     $mail->SMTPAuth = true;
//     $mail->Username = 'yakubaba1234@gmail.com';
//     $mail->Password = 'laetiaym';
//     $mail->SMTPSecure = 'tls';
//     $mail->Port = 587;

//     $mail->setFrom('yakubaba1234@gmail.com', $firstname);
//     $mail->addAddress('yakubaba1234@gmail.com',$Email);
//     $mail->addAddress($Email, 'Name');

//     $mail->isHTML(true);
//     $mail->Subject = $subject;
//     $mail->Body = "<center>  <h3>You have recieved an email from Ndjangi</h3> </center><br> <span>$message</span>  ";
//     $mail->AltBody = "<center>  <h3>You have recieved an email from Ndjangi</h3> </center><br> <span>$message</span> ";
//     $mail->send();
//     $sql= "insert into admin(username,job,password,email,images) values ('$firstname','$job','$password', '$Email', '$phone','$img_upload_path')";
//     return true;
   
// } catch (Exception $e) {
//     $_SESSION['e'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//     return false;
// }
?>


<?php
use function mysql_xdevapi\expression;

require "sendEmail2.php";
require_once "global.php";

if (isset($_POST['save'])&& isset($_FILES['my_image'])){

echo "<pre>";
print_r($_FILES['my_image']);
echo "</pre>";

$firstname=$_POST['login'];
$phone=$_POST['phone'];
$code=rand();
$lastname = $_POST['lastname'];
$DOB = $_POST['DOB'];
$Email = $_POST['Email'];
$gender = $_POST['gender'];
$Contribution =(int)$_POST['contribution'];
$status = $_POST['status'];
$address = $_POST['address'];
$password = $_POST['password'];

$avalist = $_POST['avalist'];


$img_name =$_FILES['my_image']['name'];
$img_size = $_FILES['my_image']['size'];
$tmp_namee = $_FILES['my_image']['tmp_name'];
$error = $_FILES['my_image']['error'];
if($error===0){
    if($img_size > 125000){
        $em ="sorry, your file is too large";
        $_SESSION['message'] = "sorry, your file is too large!";
        $_SESSION['msg_type'] = "danger";
        header("Location: Register.php?fileSize=sorry file is too large");
      
    }else{
     $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
     $img_ex_lc = strtolower($img_ex);

     $allowed_exs= array("jpg","jpeg","png");
     if(in_array($img_ex_lc,$allowed_exs)){
        $new_img_name= $_POST['login'].'.'.$img_ex_lc;
        $img_upload_path ='uploads/'.$new_img_name;
        move_uploaded_file($tmp_namee,$img_upload_path);
        $sql= "insert into member(firstname,lastname,password, DOB, Email, gender, contribution,  mstatus, phone,images,address, avalist_name) values ('$firstname','$lastname','$password','$DOB', '$Email', '$gender', '$Contribution', '$status',  '$phone','$img_upload_path','$address','$avalist')";
        $sql5="insert into Contribution(contribution_amount) values ('$Contribution')";
        if(mysqli_query($connect, $sql5)){
            $_SESSION['name'] = $firstname;
            $_SESSION['phone']=$phone;

        }
        if(mysqli_query($connect, $sql)){
            $_SESSION['name'] = $firstname;
            $_SESSION['phone']=$phone;

        }
        $Email = $_POST['Email'];
        $subject = "credentials";
        $message = "Enter the following to login to start the Tontine <br> your username:".$firstname."<br> your password:".$password;
        header("Location:login.php " );
     


     }else{
         $em = "You can't upload this file type";
         $_SESSION['message'] = "Can't upload this file!";
         $_SESSION['msg_type'] = "danger";
         header("location: Register.php?fileSize=$em");
       
     }
    }

}else{
   $em = "unknown error occured";
   $_SESSION['message'] = "Insertion failed!";
   $_SESSION['msg_type'] = "danger";
    header("Location: Register.php " );
 

}
}else{
    header("Location:login.php " );
}

if (isset($_GET['2000'])) {
    $id = $_GET['2000'];
    $mysqli->query("Update Contribution set contribution_payment='2000' WHERE contribution_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=contribute2000");
}

if (isset($_GET['5000'])) {
    $id = $_GET['5000'];
    $mysqli->query("Update Contribution set contribution_payment='5000' WHERE contribution_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=high");
}
if (isset($_GET['7000'])) {
    $id = $_GET['7000'];
    $mysqli->query("Update Contribution set contribution_payment='7000' WHERE contribution_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=contribute7000");
}
if (isset($_GET['Not5'])) {
    $id = $_GET['Not5'];
    $mysqli->query("Update Contribution set contribution_payment='not_paid2000' WHERE contribution_id=$id") or die($mysqli->error);
    $mysqli->query("Update Contribution set contribution_fine='500' WHERE contribution_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution not done!";
    $_SESSION['msg_type'] = "danger";

    header("location:cotisation.php?page=contribute2000");
}
if (isset($_GET['Not4'])) {
    $id = $_GET['Not4'];
    $mysqli->query("Update Contribution set contribution_payment='not_paid7000' WHERE contribution_id=$id") or die($mysqli->error);
    $mysqli->query("Update Contribution set contribution_fine='500' WHERE contribution_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution not done!";
    $_SESSION['msg_type'] = "danger";

    header("location:cotisation.php?page=contribute7000");
}
if (isset($_GET['Not'])) {
    $id = $_GET['Not'];
      $mysqli->query("Update Contribution set contribution_payment='not_paid5000' WHERE contribution_id=$id") or die($mysqli->error);
      $mysqli->query("Update Contribution set contribution_fine='500' WHERE contribution_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution not done!";
    $_SESSION['msg_type'] = "danger";

    header("location:cotisation.php?page=high");
}

if (isset($_GET['2500'])) {
    $id = $_GET['2500'];
    $mysqli->query("Update Contribution set contribution_paidfine='2500' WHERE contribution_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=contribute2000");
}
if (isset($_GET['5500'])) {
    $id = $_GET['5500'];
    $mysqli->query("Update Contribution set contribution_paidfine='5500' WHERE contribution_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=high");
}
if (isset($_GET['7500'])) {
    $id = $_GET['7500'];
    $mysqli->query("Update Contribution set contribution_paidfine='7500' WHERE contribution_id=$id") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=contribute7000");
}
if (isset($_GET['benefit'])) {
    $id = $_GET['benefit'];
    $mysqli->query("update Contribution set contribution_benefit = (select sum(contribution_amount)* 80/100 where contribution_amount='7000')  WHERE contribution_id=$id  and (select beneficiary from beneficiary where beneficiary=curdate())") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=contribute2000");
}

if (isset($_GET['benefit2'])) {
    $id = $_GET['benefit2'];
    $mysqli->query("update Contribution set contribution_benefit = (select sum(contribution_amount)* 80/100 where contribution_amount='5000')  WHERE contribution_id=$id  and (select benefiter from benefiter where benefiter=curdate())") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=high");
}
if (isset($_GET['benefit3'])) {
    $id = $_GET['benefit3'];
    $mysqli->query("update Contribution set contribution_benefit = (select sum(contribution_amount)* 80/100 where contribution_amount='7000')  WHERE contribution_id=$id  and (select beneficiary from beneficiary where beneficiary=curdate())") or die($mysqli->error);
    $_SESSION['message'] = "contribution done!";
    $_SESSION['msg_type'] = "success";

    header("location:cotisation.php?page=contribute7000");
}
if (isset($_GET['case'])) {
    $id = $_GET['case'];
    $mysqli->query("update beneficiary set verify = false where benefit_id=$id") or die($mysqli->error);
    header("location:index.php");
   

   
}
?>

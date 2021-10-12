<?php
  session_start();
  $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
  

$update = false;
$id = 0;
if (isset($_POST['funds'])) {
    $firstname = $_POST['name'];
   
    $amount = $_POST['amount'];
   
  
    
    $mysqli->query("INSERT INTO `withdraw`(`withdraw_name`,  `withdrawed_savings`) VALUES ('$firstname', '$amount')") or die($mysqli->error);

    $_SESSION['message'] = "New borrow added";
    $_SESSION['msg_type'] = "success";
     header("location: helps.php");
    ?>
    <script language="JavaScript">
        alert("Your records were entered successfully");
        header("location: helps.php");
        </script>
        <?php
        
    
}


?>
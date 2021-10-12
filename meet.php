<?php
  session_start();
  $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
  

$update = false;
$id = 0;
if (isset($_POST['save'])) {
    
    $DOB = $_POST['DOB'];
   
    $mysqli->query("INSERT INTO `beneficiary`(`beneficiary`) VALUES ('$DOB')") or die($mysqli->error);

    $_SESSION['message'] = "New helps added";
    $_SESSION['msg_type'] = "success";
     header("location: meetings.php");
    ?>
    <script language="JavaScript">
        alert("Your records were entered successfully");
        // header("location: data.php");
        </script>
        <?php
        
    
}


?>
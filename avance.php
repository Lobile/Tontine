<?php
  session_start();
  $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
  

$update = false;
$id = 0;
if (isset($_POST['refund'])) {
    $firstname = $_POST['name'];
   
    $amount = (int)$_POST['amount'];
    $mysqli->query("INSERT INTO `avance`(`avance_name`,  `refunded_amount`) VALUES ('$firstname', '$amount')") or die($mysqli->error);

    $_SESSION['message'] = "New borrow added";
    $_SESSION['msg_type'] = "success";
     header("location: borrows.php");
    ?>
    <script language="JavaScript">
        alert("Your records were entered successfully");
        header("location: borrows.php");
        </script>
        <?php
        
    
}
if (isset($_POST['update'])) {
  $id = $_GET['update'];
  $amount = $_POST['amount'];
  $mysqli->query("Update avance set refunded_amount='$amount' WHERE id=$id") or die($mysqli->error);
  $_SESSION['message'] = "advancement done!";
  $_SESSION['msg_type'] = "success";

  header("location:borrows.php");
}

?>
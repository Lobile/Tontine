<?php
  session_start();
  use function mysql_xdevapi\expression;

  require "sendEmail9.php";
  $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
  

$update = false;
$id = 0;
if (isset($_POST['live'])) {
    $firstname = $_POST['name'];
    $amount = $_POST['amount'];
    $Email = $_POST['Email'];
   
    $mysqli->query("INSERT INTO `helps`(`hname`,`hEmail`, `helps_amount`) VALUES ('$firstname','$Email', '$amount')") or die($mysqli->error);
    $mysqli->query("update member set activeres = 1 where firstname='".$firstname."'") or die($mysqli->error);
    $updare=$mysqli->query("select Email from member where firstname='".$firstname."'") or die($mysqli->error);
    while($mailer=$updare->fetch_assoc()):
      $mail=$mailer['Email'];
  
    sendEmailfrom($mail, $firstname, $subject, $message,$amount);
  endwhile;
    $_SESSION['message'] = "New helps added";
    $_SESSION['msg_type'] = "success";
     header("location: savings.php");
    ?>
    <script language="JavaScript">
        alert("Your records were entered successfully");
        // header("location: data.php");
        </script>
        <?php
        
    
}


?>
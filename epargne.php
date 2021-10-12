<?php
  session_start();
  use function mysql_xdevapi\expression;

require "sendEmail5.php";
  $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
  

$update = false;
$id = 0;
$today=date("m");
if (isset($_POST['done'])) {
    $firstname = $_POST['name'];
    
    $Email = $_POST['Email'];
    $amount = (int)$_POST['amount'];
    if ((int)$today>0 && (int)$today<=3) {
      $mysqli->query("INSERT INTO `savings`(`sname`,`sEmail`,  `savings_interest`, `saving_amount`) VALUES ('$firstname','$Email', 5/100 ,'$amount')") or die($mysqli->error);
    }
    elseif ((int)$today>3 &&(int)$today<=6) {
      $mysqli->query("INSERT INTO `savings`(`sname`,`sEmail`,  `savings_interest`, `saving_amount`) VALUES ('$firstname','$Email', 4/100 ,'$amount')") or die($mysqli->error);
    }
    elseif ((int)$today>6 &&(int)$today<=9) {
      $mysqli->query("INSERT INTO `savings`(`sname`,`sEmail`,  `savings_interest`, `saving_amount`) VALUES ('$firstname','$Email', 3/100 ,'$amount')") or die($mysqli->error);
    }
    elseif ((int)$today=10 && (int)$today=11) {
      $mysqli->query("INSERT INTO `savings`(`sname`,`sEmail`,  `savings_interest`, `saving_amount`) VALUES ('$firstname','$Email', 2/100 ,'$amount')") or die($mysqli->error);
    }

    $_SESSION['message'] = "New savings added";
    $_SESSION['msg_type'] = "success";
     header("location: helps.php");
     $updare=$mysqli->query("select Email from member where firstname='".$firstname."'") or die($mysqli->error);
    while($mailer=$updare->fetch_assoc()):
      $mail=$mailer['Email'];
    
     sendEmailhi($mail, $firstname, $subject, $message,$amount);
    endwhile;
    ?>
    <script language="JavaScript">
        alert("Your records were entered successfully");
        // header("location: data.php");
        </script>
        <?php
        
    
}


?>
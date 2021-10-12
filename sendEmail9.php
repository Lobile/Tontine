<?php

require_once 'class.phpmailer.php';

require_once 'class.smtp.php';

function sendEmailfrom($remail, $firstname, $subject, $message,$amount)
{

//    return true;
$subject = "Tontine";
$message = "Hello mr/miss ".$firstname."<br>Enter the following to login and start the Tontine in the app 
<br><i><b> your username:</b></i>  ".$firstname.

"<br><i><b> Your Rescue contribution:</b></i>  ".$amount.
"
<br><i><b>link of Tontine app:</b></i><br>Thank you ";
    $mail = new PHPMailer(true);
    $remail = $_POST['mail'];

    try {
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'yakubaba1234@gmail.com';
        $mail->Password = 'laetiaym';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('yakubaba1234@gmail.com', $firstname);
        $mail->setFrom($remail,'yakubaba1234@gmail.com');
        $mail->addAddress($remail, 'Name');

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "<center>  <h3>Welcome to Ndjangi.com</h3> </center><br> <span>$message</span>  ";
        $mail->AltBody = "<center>  <h3>Welcome to Ndjangi.com</h3> </center><br> <span>$message</span> ";
        $mail->send();
        $_SESSION['success'] = "Mail has been sent successfully!";
        return true;
    } catch (Exception $e) {
        $_SESSION['e'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
   
}
?>
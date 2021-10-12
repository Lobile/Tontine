<?php

require_once 'class.phpmailer.php';

require_once 'class.smtp.php';

function sendEmailby($Email, $firstname, $subject, $message)
{

//    return true;
$subject = "Appreciation";
$message = $_POST['message'];
    $mail = new PHPMailer(true);
    $Email = $_POST['Email'];

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
        $mail->setFrom($Email,'yakubaba1234@gmail.com');
        $mail->addAddress($Email, 'Name');

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = " <span>$message</span>  ";
        $mail->AltBody = " <span>$message</span> ";
        $mail->send();
        $_SESSION['success'] = "Mail has been sent successfully!";
        header("Location:contact.php");
        return true;
    } catch (Exception $e) {
        $_SESSION['e'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
   
}
?>
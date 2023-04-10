<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Include PHPMailer library files
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

// Create a new PHPMailer object
$mail = new PHPMailer;

// Set SMTP configuration
$mail->isSMTP();
$mail->Host = 'fahimfaisal.net';
$mail->SMTPAuth = true;
$mail->Username = 'buddyhub@fahimfaisal.net';
$mail->Password = 'faisal@123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set email content
$mail->setFrom("fahimfaisal@gmail.com", "Fahim Faisal");
$mail->addAddress('fahimfaisal1998@gmail.com');
$mail->Subject = 'New Form Submission';
$mail->Body = "Name: " . "Fahim Faisal" . "<br>" .
    "Email: " . "fahimfaisal1998@gmail.com" . "<br>" .
    "Message: " . "HEllo amna" . "<br>";
$mail->isHTML(true);

// Send the email
if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent.';
}

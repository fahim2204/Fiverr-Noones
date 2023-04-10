<?php
// Set the recipient email address
$to = "fahimfaisal1998@gmail.com";

// Set the email subject
$subject = "Greetings from your website!";

// Set the email message
$message = "Name: " . $_POST['name'] . "<br>" .
"Email: " . $_POST['email'] . "<br>" .
"Message: " . $_POST['message'] . "<br>";

// Set the email headers
$headers = "From: fahimfaisal.net <mail@fahimfaisal.net>" . "\r\n" .
           "Reply-To: mail@fahimfaisal.net" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Send the email
mail($to, $subject, $message, $headers);

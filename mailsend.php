<?php

include "connect.php";
// Include the PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';
require 'mailer/Exception.php';

// Check if the button was clicked
if (isset($_POST['sendEmail'])) {
    $address = $_POST['address'];
    // Create a new PHPMailer instance
    $mail = new PHPMailer();

    // SMTP configuration for Gmail
    $mail->isSMTP();
    $mail->Host       = 'mail.simpel.biz'; // Gmail SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'complaint@simpel.biz'; // Your Gmail email address
    $mail->Password   = 'simpel2023'; // Your Gmail password
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    // Set the sender and recipient
    $mail->setFrom('complaint@simpel.biz', 'SIMPEL - PERTAMINA'); // Your address
    $mail->addAddress($address, 'Recipient Name'); // Recipient's email

    // Email content
    $mail->isHTML(true);
    $mail->Subject = '[Simpel] Email test body';
    $mail->Body    = 'Dear Thank you for writing your complaint. We appreciate any positive input to make our company better. Here is your complaint ticket number  You can track your complaint report regularly via https://simple.biz/tracking.php?tiket=';

    //Send the email
    if ($mail->send()) {
        echo 'Email sent successfully.';
    } else {
        echo 'Error: ' . $mail->ErrorInfo;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Email Notification Example</title>
</head>
<body>
    <h1>Email Notification Example</h1>

    <!-- Button to trigger email sending -->
    <form action="mailsend.php" method="post">
        <input type="text" name="address">
        <input type="submit" name="sendEmail" value="Send Email">
    </form>
</body>
</html>

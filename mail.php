<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ntiamoahone123@gmail.com';                     // SMTP username
    $mail->Password   = 'L@d@m0b@';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, 'PK Poultry');


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Reset your password on pkpoultry.com';
    $mail->Body    = 'Hi there, click on this <a href=\"new_password.php?token=" . $token . "\">link</a> to reset your password on our site';

    $mail->send();
    header('location: pending.php?email=' . $email);
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
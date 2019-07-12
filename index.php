<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'deepakkumarpy10@gmail.com';                 // SMTP username
$mail->Password = 'agilepython';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // 587                                  // TCP port to connect to

$mail->setFrom('deepakkumarpy10@gmail.com', 'deepak');
$mail->addAddress('kumardeepak9719@gmail.com', 'kumar');     // Add a recipient
//$mail->addAddress('deepakkumarpy10@gmail.com');               // Name is optional
$mail->addReplyTo('deepakkumarpy10@gmail.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = '<b>Hello Deepak Kumar
                   Your password is 123
                   pls click here to activate your account<a href="www.google.com">click</a></b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
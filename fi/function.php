<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
//require 'vendor/autoload.php';
function send_code($code,$emailid){
require 'phpmailer/PHPMailerAutoload.php';
n


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


    //Server settings
    $mail->SMTPDebug = 4;                                       // Enable verbose debug output
    $mail->isSMTP();       
    $mail->Host = 'tls://smtp.gmail.com';                                     // Set mailer to use SMTP
    //$mail->Host='smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth=true;                                   // Enable SMTP authentication
    $mail->Username='nishakumari3199@gmail.com';                     // SMTP username
    $mail->Password='11602184N';                               // SMTP password
    $mail->SMTPSecure='tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port=587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('nishakumari3199@gmail.com');
    $mail->addAddress($emailid);     // Add a recipient
   // $mail->addAddress('ellen@example.com');               // Name is optional
   // $mail->addReplyTo('nishakumari3199@gmail.com');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
     //$mail->AuthType = 'XOAUTH2';
    // Content
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject='Here is the subject';
    $mail->Body="Thank you for joining us Your Confirmation Code is :".$code;
    $mail->AltBody='This is the body in plain text for non-HTML mail clients';

    if($mail->send()){
    echo 'Message has been sent';}
  else {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }
}
?>
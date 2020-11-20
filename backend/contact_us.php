<?php
require '../config.php';
require '../autoloader/class_autoloader.php';
require_once "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// include '../vendor/phpmailer/phpmailer/src/PHPMailer.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = strip_tags($_POST['email']);
    $name = strip_tags($_POST['name']);
    $subject = strip_tags($_POST['subject']);
    $text = strip_tags($_POST['message']);
    $message = new Message($conn);
    $message->Create($name, $email, $subject, $text);
  
    echo ($_SERVER["REQUEST_METHOD"]);
//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "ppmogunstatealerts@gmail.com";                 
$mail->Password = "whychangepassword%";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;

$mail->From = $email;
$mail->FromName = $email;
$_ENV['MAIL_TO']="iamaqim@gmail.com";
//

// $mail->addAddress("support@hspmsolutions.com", "HSPM SOLUTIONS");
$mail->addAddress($_ENV["MAIL_TO"], "HSPM");

$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = "<i>".$text."</i>";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    // print_r(error_get_last());
    echo "Mailer Error: " . $mail->ErrorInfo;
}
    // $success = $message->send($to, $subject,$text);
    // if (!$success) {
    //     $errorMessage = error_get_last()['message'];
    // }
}
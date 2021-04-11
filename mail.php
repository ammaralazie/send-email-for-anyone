<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'mailer/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
//يستخدم هذا الجزء لعؤض اخطاء في كان هناك اخطاء في عمليه ارسال الرسالة 
$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'your email';                     //SMTP username
$mail->Password   = 'your password';                               //SMTP password
$mail->SMTPSecure = 'ssl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged


$mail->Port= 465;//465 this port is supported by gmail
 //Content
 $mail->isHTML(true);  //حتى الايميل يدعم رموز html ,css
 $mail->CharSet='UTF-8'; //ظفنه charset حتى الايميل يدعم جميع الروز او اللغات

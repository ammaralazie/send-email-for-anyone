<?php require_once 'mail.php';
$mail->setFrom('alaziiammar@example.com', 'Instagram');
$mail->addAddress('azzzza5552@gmail.com'); 

#الرسالة تتكون من قسمين الموضوع و المحتولا
$mail->Subject = 'Here is the subject';

#المحتوى ممكن يكون رسالة عادية او قالب تم انشائه عن طريق الج تي ام ال وكذلك سي  اس اس
$mail->Body    = '<h1>hellow ammar </h1><br><p>dklgf dslhb fbhsjg srb sjbh </p><form><input type="text"></form>';
$mail->send();
?>
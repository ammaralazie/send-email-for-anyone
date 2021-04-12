<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Send Email</title>
</head>

<body>
    <div class="container-form">
        <div class="box-form">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="subject" id="" placeholder="subject">
                <textarea name="message" id="" cols="30" rows="10" placeholder="message"></textarea>
                <input type="file" name="file" id="" placeholder="file">
                <input type="email" name="recevire" id="" placeholder="recevire">
                <button type="submit" name="send">Send Message</button>
            </form>
        </div>
    </div>

    <?php require_once 'mail.php';
    if (isset($_POST['send'])) {
        $subject = $_POST['subject'];
        $email = $_POST['recevire'];
        $message = $_POST['message'];
        move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
        $fie = $_FILES['file']['name'];

        $mail->setFrom('alaziiammar@example.com', 'Some One'); //this is email will send the message for recevire
        $mail->addAddress($email);

        #الرسالة تتكون من قسمين الموضوع و المحتوى
        $mail->Subject =  $subject;

        #المحتوى ممكن يكون رسالة عادية او قالب تم انشائه عن طريق الج تي ام ال وكذلك سي  اس اس
        $mail->Body = strip_tags($message);
        if (!empty($fie)) {
            $mail->addAttachment($fie);
        }
        //send file to recevire
        $mail->send();
    } //end if 
    ?>
</body>

</html>
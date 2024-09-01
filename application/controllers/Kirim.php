<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PhpParser\Node\Stmt\Echo_;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['submit'])) {

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    $name        = $_POST['name'];
    $email       = $_POST['email'];
    $perihal     = $_POST['perihal'];
    $tulis_pesan = $_POST['tulis_pesan'];



    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'saefulazhar4767@gmail.com';                     //SMTP username
    $mail->Password   = 'zarr9969577';                               //SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('saefulazhar4767@gmail.com', 'percobaan');
    $mail->addAddress('$email', 'saepul');     //Add a recipient
    //Name is optional
    $mail->addReplyTo('saefulazhar4767@gmail.com', 'percobaan');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'tes';
    $mail->Body    = 'tess' . $nama . ' ';

    if ($mail->send()) {
        echo 'Message has been sent';
    } else {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "tekan";
}

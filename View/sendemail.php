<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';
    $mail->isHTML();
    $mail->Username = 'domingamateo3105@gmail.com';
    $mail->Password = 'verlyn28';
    $mail->SetFrom('no-reply@howcode.org');
    $mail->Body = 'Testing email';
    $mail->AddAddress('verlyn2800@gmail.com');
    
    $mail->Send();
?>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

# use "use" after include or require

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

$message = trim($_POST['message']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$subject = trim($_POST['subject']);


$mail = new PHPMailer(true);


try {

    // opções do servidor
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'tiago.dores.td@gmail.com';
    $mail->Password   = 'onsexrontsvuttqg';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';

    // emissor e recetor
    $mail->setFrom('tiago.dores.td@gmail.com');
    $mail->addAddress($email);

    // assunto
    $mail->isHTML(true);
    $mail->Subject =  $subject;


    // mensagem
    $html = '<p>Obrigado pela sua questão - ' . $name . '</p>';
    $html .= '<p>Em breve será contactado</p>';


    $mail->Body = $html;

    $mail->send();

    // opções do servidor
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'tiago.dores.td@gmail.com';
    $mail->Password   = 'onsexrontsvuttqg';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';

    // emissor e recetor
    $mail->setFrom('tiago.dores.td@gmail.com');
    $mail->addAddress('tiago.dores.td@gmail.com');

    // assunto
    $mail->isHTML(true);
    $mail->Subject =  $subject;

    // mensagem
    $html = '<p><b>Nome: </b>' . $name . '</p>';
    $html .= '<p><b>Email: </b>' . $email . '</p>';
    $html .= '<p><b>Assunto: </b>' . $subject . '</p>';
    $html .= '<p><b>Mensagem: </b>' . $message . '</p>';

    $mail->Body = $html;

    $mail->send(); 

    return  header("location:formContacto.php?msg=$msg");
} catch (Exception $e) {
    return false;
}



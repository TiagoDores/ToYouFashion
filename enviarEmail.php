<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();
 
if(isset($_POST['send'])){
 
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = ("Nome: " + $nome + "\\nMensagem: "+$_POST['message']);

    $headers = "Content-Type: text/html; charset=UTF-8";
 
    //Load composer's autoloader
    require 'vendor/autoload.php';
 
    $mail = new PHPMailer(true);                     // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'tiago.dores.td@gmail.com';     // Your Email/ Server Email
        $mail->Password = 'Fuiscamado';                     // Your Password
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );                         
        $mail->SMTPSecure = 'ssl';                           
        $mail->Port = 465;                                   
 
        //Send Email
        $mail->setFrom($email);
 
        //Recipients
        $mail->addAddress("tiago.dores.td@gmail.com");              
        $mail->addReplyTo($email);
 
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->header = $headers;
 
        $mail->send();
        $_SESSION['message'] = 'Message has been sent';
    } catch (Exception $e) {
        $_SESSION['message'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
    }
 
    header('location:index.php');
}
else{
    $_SESSION['message'] = 'Por favor preencha';
    header('location:index.php');
}
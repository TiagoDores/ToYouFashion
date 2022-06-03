<?php   
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$email = $_POST['email'];
$assunto =$_POST['subject'];
$mensagem = $_POST['message'];
$nome = $_POST['name'];

// Inicia a classe PHPMailer 
$mail = new PHPMailer(true);

// Método de envio 
$mail->IsSMTP(); 

// Enviar por SMTP 
$mail->Host ="smtp.gmail.com"; 

// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
$mail->Port = 25; 

// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 

// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = 'tiago.dores.td@gmail.com'; 
$mail->Password = 'Fuiscamado'; 

// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 

// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
//$mail->SMTPDebug = 2; 

// Define o remetente 
// Seu e-mail 
$mail->From = $email; 

// Seu nome 
$mail->FromName = $nome; 

// Define o(s) destinatário(s) 
$mail->AddAddress('tiago.dores.td@gmail.com'); 

// Opcional: mais de um destinatário
// $mail->AddAddress('erasmusmais@aehn.net'); 

// Opcionais: CC e BCC
// $mail->AddCC('joana@provedor.com', 'Joana'); 
// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 

// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 

// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 

// Assunto da mensagem 
$mail->Subject = $assunto; 

// Corpo do email 
$mail->Body = "Mensagem enviada pelo site: " .$mensagem; 

// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 

// Envia o e-mail 
$enviado = $mail->Send(); 

// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
     $sucesso="A sua mensagem foi enviado com sucesso!";
    header("location:formContacto.php?sucesso=".$sucesso);  
  }else{
      $erro="Houve um erro ao enviar o email";
      header("location:formContacto.php?erro=".$erro);
} 
?>

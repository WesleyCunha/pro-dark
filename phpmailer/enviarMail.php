<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../phpmailer/Exception.php";
require_once "../phpmailer/PHPMailer.php";
require_once "../phpmailer/SMTP.php";


$nome = filter_input(INPUT_POST,"nome", FILTER_DEFAULT);
$email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
$mensagem = filter_input(INPUT_POST,"menssagem", FILTER_DEFAULT);

if(empty($nome) || empty($email) || empty($mensagem)):
    $_SESSION["errorForm"] = "Favor Preencher todos os campos";
    header("Location: ../index.php#contato");
else:
   $mail = new PHPMailer(true);

   try {
       //Server settings
       //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
       $mail->isSMTP();                                            //Send using SMTP
       $mail->Host       = 'mail.wesleycsv.com.br';                     //Set the SMTP server to send through
       $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
       $mail->Username   = 'contato@wesleycsv.com.br';                     //SMTP username
       $mail->Password   = 'asdf1234@.';                               //SMTP password
       //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
       $mail->SMTPSecure = "ssl";
       $mail->SMTPAuth = true;

       $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
       $mail->CharSet = 'UTF-8';

       //Recipients
       $mail->setFrom('contato@wesleycsv.com.br', 'Portifolio Wesley Cunha');
       $mail->addAddress('contato@wesleycsv.com.br','Portifolio Wesley Cunha');    //Add a recipient
       //$mail->addAddress('ellen@example.com');               //Name is optional
       //$mail->addReplyTo('info@example.com', 'Information');
       //$mail->addCC('cc@example.com');
       //$mail->addBCC('bcc@example.com');

       //Attachments
       // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
       //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

       //Content
       $mail->isHTML(true);                                  //Set email format to HTML
       $mail->Subject = 'Orçamento';
       $mail->Body    = $mensagem;

       // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
       $mail->send();
       //echo 'enviado com sucesso';
       $_SESSION["sucessoForm"] = "<span class='sucesso_email'>E-mail enviado com sucesso</span>";
       header("Location: ../index.php#contato");
   } catch (Exception $e) {
       echo "Erro ao enviar a mensagem: {$mail->ErrorInfo}";
   }
endif;
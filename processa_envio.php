<?php
require './bibliotecas/PHPMailer/Exception.php';
require './bibliotecas/PHPMailer/OAuth.php';

require './bibliotecas/PHPMailer/PHPMailer.php';
require './bibliotecas/PHPMailer/POP3.php';
require './bibliotecas/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Mensagem
{
    private $para = null;
    private $assunto = null;
    private $mensagem = null;

    public function __get($attr)
    {
        return $this->$attr;
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }

    public function mensagemValida()
    {
        if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
            return false;
        }
        return true;
    }
}
$msg = new Mensagem();
$msg->__set('para', $_POST['para']);
$msg->__set('assunto', $_POST['assunto']);
$msg->__set('mensagem', $_POST['mensagem']);


if (!$msg->mensagemValida()) {
    echo "Mensagem não é válida";
    header('Location: index.php');
}
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'smtp-relay.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'paulo.ifcebaturite@gmail.com'; //SMTP username
    $mail->Password = 'senhasecreta'; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('paulo.ifcebaturite@gmail.com', 'Mailer');
    $mail->addAddress('luapfran@hotmail.com', 'Joe User'); //Add a recipient
    //$mail->addAddress('ellen@example.com'); //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
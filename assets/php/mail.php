<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'php/Exception.php';
require_once 'php/PHPMailer.php';
require_once 'php/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.orange.fr';
    $mail->SMTPAuth = true;
    $mail->Username = 'alexis.phelippon98@orange.fr'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'F@nnyP!260616!'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('alexis.phelippon98@orange.fr'); // Gmail address which you used as SMTP server
    $mail->addAddress('alexis.phelippon98@orange.fr'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3> Nom | Prénom : $name <br> E-mail : $email <br> Message : $message </h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span> Merci, j\'ai bien reçu votre message ! </span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
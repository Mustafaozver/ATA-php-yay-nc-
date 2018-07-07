<?php

require_once('class.phpmailer.php');

$mail = new PHPMailer(true);
$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->Host       = "mail.xxx.com"; 
  $mail->Username   = "mail@xxx.com"; 
  $mail->Password   = "mailxxx";  
  $mail->SMTPAuth   = true;
  $mail->SMTPSecure = "ssl"; 
  $mail->Port       = 465;  

  $mail->SetFrom('hata@xxx.com', 'İletiyi Gönderen');
  $mail->AddReplyTo('hata@xxx.com', 'Yanıtlama Adresi');
  $mail->Subject = 'İleti Konusu';
  $mail->Body = "Mesaj İçeriği";
  
  $mail->AddAddress('buadresegonder@xxx.com', 'Gönderilen Adres'); 
  $mail->Send();
  
} catch (phpmailerException $e) {
  echo $e->errorMessage(); 
} catch (Exception $e) {
  echo $e->getMessage();
}

?>
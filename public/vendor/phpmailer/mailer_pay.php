<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer.php';
require 'SMTP.php';

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
 
// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;

$mail->Host = 'ssl://server33.hosting.reg.ru';
$mail->Port = 465;
$mail->Username = 'admin@sk-miass.ru';
$mail->Password = 'xD6uJ9xH1u';

// От кого
$mail->From = 'admin@sk-miass.ru';
$mail->FromName = 'admin';

// Кому
// $mail->addAddress('sk-miass@mail.ru', 'admin');
$mail->addAddress('260443@mail.ru', 'admin');
 
// Тема письма
$mail->Subject = 'Оплата с сайта sk-miass.ru';

$mail->isHTML(true);

// Тело письма
$mail->Body = "$paymentDescription $paymentAmountValue руб";
$mail->AltBody = "$paymentDescription $paymentAmountValue руб";
 
$mail->send();

$mail->smtpClose();

?>
<?php

$order_number = $_POST["order_number"];

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
$mail->addAddress('sk-miass@mail.ru', 'admin');
 
// Тема письма
$mail->Subject = 'Заказ с сайта sk-miass.ru';

$mail->isHTML(true);

// Тело письма
$mail->Body = "Новый заказ №" . $order_number;
$mail->AltBody = "Новый заказ №" . $order_number;
 
$mail->send();

$mail->smtpClose();

?>
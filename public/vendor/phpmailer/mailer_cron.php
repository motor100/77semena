<?php
// $name = htmlspecialchars($_POST["name"]);
// $phone = htmlspecialchars($_POST["phone"]);
// $oproduct = $_POST["oproduct"];
// $checkbox = htmlspecialchars($_POST["checkbox"]);

$name = "name";
$phone = "phone";
$oproduct = "oproduct";
$checkbox = "on";

$order_number = "15";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($name) && isset($phone) && isset($checkbox)) {

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

  if (strlen($name) > 2 && strlen($name) <= 20 && strlen($phone) == 16 && $checkbox == "on" ) {

    // Тело письма
    $mail->Body = "Новый заказ №" . $order_number;
    $mail->AltBody = "Новый заказ №" . $order_number;

    $mail->send();
  }

  $mail->smtpClose();

}

exit();

?>
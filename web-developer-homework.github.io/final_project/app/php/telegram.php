<?php

/* https://api.telegram.org/bot1393445137:AAF3NKExgrRhkKkuAy3OoZ8Obm02rBctTkk/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$bluetooth = $_POST['availability_bluetooth'];
$token = "1393445137:AAF3NKExgrRhkKkuAy3OoZ8Obm02rBctTkk";
$chat_id = "779379836ad";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Наличие bluetooth: ' => $bluetooth
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ../thanks.html');
} else {
  echo "Error";
}
?>
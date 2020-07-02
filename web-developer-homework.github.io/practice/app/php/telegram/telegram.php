<?php

/* https://api.telegram.org/bot913948794:AAFzEx7XhSBoDZEy16nMYtEY3DunM-BQH7k/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];
$token = "913948794:AAFzEx7XhSBoDZEy16nMYtEY3DunM-BQH7k";
$chat_id = "779379836";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email: ' => $email,
  'Телефон: ' => $phone,
  'Сообщение: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  // echo 'Спасибо, позже мы с вами свяжимся :)';
  // return true; //по умолчанию
	header('Location: ../../index.html');
} else {
	echo 'Извините, но что-то пошло не так :(';
  // return false; //по умолчанию
}
?>
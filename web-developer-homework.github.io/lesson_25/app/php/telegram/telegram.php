<?php

/* https://api.telegram.org/bot975609057:AAGtcFIUsx2Wf1sKjDmGFydBWMlL6_maquU/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$site = $_POST['user_site'];
$message = $_POST['user_message'];
$image = $_FILES['user_image'];
$token = "975609057:AAGtcFIUsx2Wf1sKjDmGFydBWMlL6_maquU";
$chat_id = "-397189815";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email: ' => $email,
  'Телефон: ' => $phone,
  'Сайт пользователя: ' => $site,
  'Сообщение: ' => $message,
  'Изображение: ' => $image
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  // echo 'Извините, но что-то пошло не так :(';
    return false; //по умолчанию
} else {
	// echo 'Спасибо, позже мы с вами свяжимся :)';
    return true; //по умолчанию
		// .header(location: //путь к файлу html)
}
?>
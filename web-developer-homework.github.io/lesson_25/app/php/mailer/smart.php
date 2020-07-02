<?php 

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$site = $_POST['user_site'];
$message = $_POST['user_message'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'kaverin.egorka@mail.ru';                 // Наш логин
$mail->Password = '+380507603161071057';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('kaverin.egorka@mail.ru', 'Веб-разработчик 10.0 - Урок 25');   // От кого письмо 
$mail->addAddress('hamoydoerik@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment($_FILES['upload']['tmp_name'], $_FILES['upload']['name']);    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Пользователь внёс данные';
$mail->Body    = '
	Пользователь оставил свои данные: <br> 
	Name: ' . $name . ' <br>
	Email: ' . $email . ' <br>
	Phone: ' . $phone . ' <br>
	Web-site: ' . $site . ' <br>
	Message: ' . $message . ''; 
$mail->AltBody = '';

if(!$mail->send()) {
		echo 'Извините, но что-то пошло не так :(';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
    // return false; //по умолчанию
} else {
	echo 'Спасибо, позже мы с вами свяжимся :)';
    // return true; //по умолчанию
		// .header(location: //путь к файлу html)
}

?>
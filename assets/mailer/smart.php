<?php 

$name = $_POST['userName'];
$email = $_POST['userEmail'];
$text = $_POST['userComment'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'teklagogrichianiofficial@gmail.com';                 // Наш логин
$mail->Password = 'kueuvjjmapylphmr';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('teklagogrichianiofficial@gmail.com', 'Tekla');   // От кого письмо 
$mail->addAddress('hepot68054@inkiny.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Guest left contact in the web-site';
$mail->Body    = '
		Guest left contacts info. Please contact with them. <br> 
	Имя: ' . $name . ' <br>
	E-mail: ' . $email . '<br>'
	.$text;

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>
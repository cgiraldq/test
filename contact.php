<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/

include 'contact_config.php';
session_start();
error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
include 'functions.php';

$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$phone = stripslashes($_POST['phone']);
$subject = stripslashes($_POST['subject']);
$message = "Site visitor information:

Name: ".$_POST['name']
."

E-mail Address: ".$_POST['email']
."

Phone: ".$_POST['phone']
."

Message: ".$_POST['content'];


$error = '';

// Check name

if(!$name)
{
$error .= 'Por favor ingrese su nombre.<br />';
}
// Check email

if(!$email)
{
$error .= 'Por favor ingrese una dirección de correo.<br />';
}

if($email && !ValidateEmail($email))
{
$error .= 'Por favor ingrese una dirección de correo valida.<br />';
}


if(isset($_SESSION['captcha_keystring']) && strtolower($_SESSION['captcha_keystring']) != strtolower($_POST['capthca']))
{
$error .= " Captcha incorecto.<br />";
}


if(!$error)
{

	$mail = mail(WEBMASTER_EMAIL, $subject, $message,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());

if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>

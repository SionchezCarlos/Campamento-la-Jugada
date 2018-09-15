<?php

//return "success"; die(); // Remove this line in live site, it is only for testing

if($_REQUEST['author'] == '' || $_REQUEST['email'] == '' || $_REQUEST['message'] == ''):
	return "error";
endif;

if (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)):

// Receiver email address (Change it to your Email ID)
//	$to = 'webmaster@funkyjunkytechies.com';
//$to = 'labudiu@gmail.com';
	$to = 'contactos@campamentolajugada.com.ve';
//mercadeo.laaventura@gmail.com

// prepare header
$header = 'From: '. $_REQUEST['author'] . ' <'. $_REQUEST['email'] .'>'. "\r\n";
$header .= 'Reply-To:  '. $_REQUEST['author'] . ' <'. $_REQUEST['email'] .'>'. "\r\n";
// $header .= 'Cc:  ' . 'example@domain.com' . "\r\n";
// $header .= 'Bcc:  ' . 'example@domain.com' . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion();

// Contact Subject
$subject = "Email enviado desde www.campamentolajugada.com.ve";

// Contact Message
$message .= 'Nombre Completo: ' . $_REQUEST['author'] . "\n";
$message .= 'Email: ' . $_REQUEST['email'] . "\n";
$message .= 'Mensaje: '. $_REQUEST['message'];

// Send contact information
$mail = mail( $to, $subject , $message, $header );

//return $mail ? "éxito" : "error";
echo'<script> window.location="http://campamentolajugada.com.ve/#contactos"</script>';
else:
	return "error";
endif;
?>

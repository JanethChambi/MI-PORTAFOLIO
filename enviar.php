<?php
$name = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['asuntos']; // Aquí se cambió 'asunto' por 'asuntos'
$message = $_POST['message'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "MIME-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain; charset=utf-8\r\n";
$header .= "Content-Transfer-Encoding: 8bit\r\n";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Asunto: " . $asunto . " \r\n";
$message .= "Mensaje: " . $message . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'j.david.jdrc21@gmail.com';
$asunto = 'Mensaje de: ' . $name;

mail($para, $asunto, utf8_decode($message), $header);

header("Location: index.html");
?>

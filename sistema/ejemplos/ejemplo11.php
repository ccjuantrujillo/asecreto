<?php
//incluyendo e instanciando la clase PHPMailer  
require("class.phpmailer.php");  
$mail = new PHPMailer();     
//Nombre del servidor  
$mail->Host  = "localhost";  
//Email del remitente  
$mail->From  = "craftyman.dw@gmail.com";  
//Nombre del remitente  
$mail->FromName = "Cesar Mancilla";  
//Asunto  
$mail->Subject   = "Propuesta de trabajo";  
//Email y nombre destinatario  
$mail->AddAddress("destino@hotmail.com","Juan Perez");  
//Mensaje  
$mail->Body = "Hola, esta es mi propuesta de trabajo.";  
//Enviar  
$mail->Send();  
?>
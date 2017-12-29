<?php
require_once "../../libreria/class.phpmailer.php";
require_once "../../libreria/class.smtp.php";
  $mail = new phpmailer();
  $mail->PluginDir = "includes/";
  $mail->Mailer = "smtp";
  $mail->Host = "localhost";
  $mail->SMTPAuth = true;
  $mail->Username = "ventas@kallpahost.com"; 
  $mail->Password = "950162";
  $mail->From = "ventas@kallpahost.com";
  $mail->FromName = "Martin Trujillo";
  $mail->Timeout=30;
  
  $mail->AddAddress("martin_trujillo1105@hotmail.com");
  $mail->Subject = "Prueba de phpmailer";
  $mail->Body = "<b>Mensaje de prueba mandado con phpmailer en formato html</b>";
  $mail->AltBody = "Mensaje de prueba mandado con phpmailer en formato solo texto";
  $exito = $mail->Send();
  $intentos=1; 
 /*while ((!$exito) && ($intentos < 5)) {
	sleep(5);
     	//echo $mail->ErrorInfo;
     	$exito = $mail->Send();
     	$intentos=$intentos+1;	

   }*/
   if(!$exito)
   {
	echo "Problemas enviando correo electrónico a ".$valor;
	echo "<br/>".$mail->ErrorInfo;	
   }
   else
   {
	echo "Mensaje enviado correctamente";
   } 
?>

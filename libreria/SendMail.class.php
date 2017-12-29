<?php
require_once "Phpmailer.class.php";
require_once "Smtp.class.php";
class SendMail{
	private $mail;
	public function __construct(){
		$this->mail = new phpmailer();
		$this->mail->PluginDir = "includes/";
		$this->mail->Mailer    = "smtp";
		$this->mail->Host      = "localhost";
		$this->mail->SMTPAuth  = true;
		$this->mail->Username  = "ventas@kallpahost.com"; 
		$this->mail->Password  = "950162";
		$this->mail->From      = "ventas@kallpahost.com";
		$this->mail->FromName  = "Amigo secreto";
		$this->mail->Timeout   = 30;	
	}
	
	public function enviar($email,$subject,$mensaje){
		$resultado=true;
		$this->mail->AddAddress($email);
		$this->mail->Subject = $subject;
		$this->mail->Body    = $mensaje;
		$this->mail->AltBody = $mensaje;//En texto plano
		$exito = $this->mail->Send();
		$intentos=1; 
		while ((!$exito) && ($intentos < 5)) {
			sleep(5);
			//echo $mail->ErrorInfo;
			$exito = $mail->Send();
			$intentos=$intentos+1;	
		}
		if(!$exito)
		{
			echo "Problemas enviando correo electrónico a ".$email;
			echo "<br/>".$mail->ErrorInfo;	
			$resultado=false;
		}
		else
		{
			echo "Mensaje enviado correctamente";
		} 
		return $resultado;
	}
}
?>
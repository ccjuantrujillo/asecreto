<?php
class Upload{
	private $file = array();
	public function __construct(){

	}

	public function subir_imagen($rutaImg,$file){
			$nombre  = $file['name'];
			$tipo    = $file['type'];
			$destino = $rutaImg."/".$nombre;
			if(strpos($nombre,"gif") || strpos($nombre,"jpg") || strpos($nombre,"png") || strpos($nombre,"bmp")){
				if(!move_uploaded_file($file['tmp_name'],$destino)){
					$mensaje   = "El archivo no se cargo correctamente";
					$resultado = false;
				}
				else{
					$mensaje   = "";
					$resultado = true;	
				}
			}
			else{
				$mensaje   ="Extension de archivo imagen incorrecta";
				$resultado = false;
			}
			return $resultado;
	}	
}
?>

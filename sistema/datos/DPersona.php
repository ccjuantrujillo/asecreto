<?php
require_once "../../libreria/BD.mysql.class.php";
class DPersona{
	private $cnx;
	private $oBD;
	public function __construct(){
		$this->oBD = new BD();
		$this->cnx = $this->oBD->cnx;	
	}

	public function ingresar_sistema($txtUsuario,$txtPassword){
		$cadena="select * from ams_usuario where USUAC_Correo='".$email."' and USUAC_Password='".$password."' and USUAC_FlagConfirmado='1'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;	
	}
	


	public function borrar_mensaje_buzon(){
	
	}
	
	public function escribir_mensaje_buzonAmigo(){
	
	}

	public function escribir_mensaje_buzonJefe(){
	
	}	
	
	public function leer_deseos(){
	
	}

	public function agregar_deseo(){
	
	}	
	
	public function listar_productos_catalogo(){
	
	}

	public function listar_empresas(){
	
	}	
	
	public function listar_tipo_documentos(){
		$cadena="select TIPOP_Codigo,TIPOC_Descripcion,TIPOC_CantidadDigitos from ams_tipodocumento";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;			
	}
}
?>
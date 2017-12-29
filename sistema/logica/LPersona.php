<?php
require_once "../../libreria/Html.class.php";
require_once "../../libreria/Upload.class.php";
require_once "../datos/DPersona.php";
class LPersona{
	private $oDAdmin;
	public function __construct(){
		$this->oDPersona = new DPersona();		
	}
	
	public function ingresar_sistema_usuario($txtUsuario,$txtPassword){
		$resultado=$this->oDPersona->ingresar_sistema($txtUsuario,$txtPassword);
		print_r($resultado);die();
			if($usuario==$valUser[0]['usuario'] && $usuario!=''){
				if($clave==$valUser[0]['clave'] && $clave!=''){
						$resultado=true;
				}
				else{
					$resultado=false;	
				}
			}
			else{
				$resultado=false;
			}
		return $resultado;
	}
	
	public function lista_categorias(){
		$arrayCabecera=array('0'=>'ID','1'=>'NOMBRES','2'=>'IMAGEN','3'=>'CATEGORIA_RELA','4'=>'ACCIONEs');
		$arrayFilas=$this->oDAdmin->lista_categorias();
		$filas=array();
		foreach($arrayFilas as $indice=>$valor){
			$valor[4]="<input type='button' name='editar' id='editar' onclick='edita_categoria(".$indice.");' value='Editar'>";
			$valor[4].="<input type='button' name='eliminar' id='eliminar' onclick='eliminar_categoria(".$indice.");' value='Eliminar'>";
			array_push($filas,$valor);
		}
		$oTabla=new Tabla($arrayCabecera,$filas,'fila1','filaEncima','filaCabecera');
		$resultado=$oTabla->getTabla();
		return $resultado;
	}
	
	public function mantemiento_categoria($modo,$idcategoria,$nomcategoria,$images,$file){
		$ruta_imagen="../../images";
		$oUpload=new Upload();
		if($oUpload->subir_imagen($ruta_imagen,$file)){
			$images=$file['name'];	
		}
		switch($modo){
			case 'grabar':
				$resultado=$this->oDAdmin->ingresa_categoria($nomcategoria,$images);
				break;
			case 'editar':
				$resultado=$this->oDAdmin->edita_categoria($idcategoria,$nomcategoria,$images);
				break;
			case 'eliminar':
				$resultado=$this->oDAdmin->elimina_categoria($idcategoria);			
				break;
		}
		return $resultado;
	}
}
?>

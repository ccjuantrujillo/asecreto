<?php
/*Clase Base de datos para conectar con la base de datos,editar eliminar y grabar*/
class BD{
	public $cnx;
	private $rows;
	public function __construct(){
		$cadConexion = "host=localhost port=5432 user=postgres dbname=saritaramos password=123456";
		$this->cnx   = pg_connect($cadConexion) or die("Error en la conexion:".pg_last_error());
	}
	
	public function seleccionar($query){
		$rs        = pg_query($this->cnx,$query);
		$resultado = array();
		while($row=pg_fetch_array($rs)){
			$arreglo=array();
			for($i=0;$i<pg_num_fields($rs);$i++){
				$nombre=pg_field_name($rs,$i);
				$arreglo[$nombre]=$row[$i];
				$arreglo[$i]=$row[$i];
			}
			array_push($resultado,$arreglo);
		}
		return $resultado;
	}
	
	public function insertar($tabla,$campos,$valores){
		$cadena="insert into ".$tabla." (".$campos.") values (".$valores.")";
		$rs=pg_query($cadena);
		if(!$rs){
			$txt="<script>alert('Ocurrio un error al grabar');</script>";
			echo $txt;
		}
		else{
			$rs=true;			
		}
		return $rs;
	}
	
	public function eliminar($tabla,$condicion){
		$cadena="delete from ".$tabla." where ".$condicion."";
		$rs=pg_query($cadena);
		if(!$rs){
			$txt="<script>alert('Ocurrio un error al borrar');</script>";
			echo $txt;
		}
		else{
			$rs=true;	
		}
		return $rs;
	}
	
	public function actualizar($tabla,$campos,$valores,$condicion){
		$cadena="update ".$tabla." set ";
	}
}
?>

<?php
/*Clase Base de datos para conectar con la base de datos,editar eliminar y grabar*/
class BD{
	public $cnx;
	private $rows;
	private $cadena;
	public function __construct(){
		if(!$this->cnx   = mysqli_connect("localhost:3308","root","123456","asecreto")){
			echo "Error en la conecion";
		}
	}
	public function seleccionar($query){
		$rs           = mysqli_query($this->cnx,$query);
		$this->cadena = $query;
		$resultado = array();
		while($row=mysqli_fetch_array($rs)){
			$arreglo=array();
			for($i=0;$i<mysqli_num_fields($rs);$i++){
				$nombre=mysqli_fetch_field_direct($rs,$i);
				$arreglo[$nombre->name]=$row[$i];
				$arreglo[$i]=$row[$i];
			}
			array_push($resultado,$arreglo);
		}
		return $resultado;
	}
	
	public function insertar($tabla,$campos,$valores){
		$cadena="insert into ".$tabla." (".$campos.") values (".$valores.")";
		$this->cadena = $cadena;
		$rs=mysqli_query($this->cnx,$cadena);
		if(!$rs){
			$txt="<script>alert('Ocurrio un error al grabar');</script>";
			echo $txt;
			$resultado=false;
		}
		else{
			$resultado=mysqli_insert_id($this->cnx);			
		}
		return $resultado;
	}
	
	public function eliminar($tabla,$condicion){
		$cadena="delete from ".$tabla." where ".$condicion."";
		$this->cadena = $cadena;
		$rs=mysqli_query($this->cnx,$cadena);
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
		$resultado = false;
		$arrcampos = explode(",",$campos);
		$arrvalores= explode(",",$valores);
		$qcampos   = count($arrcampos);
		$qvalores  = count($arrvalores);
		if($qcampos==$qvalores){
			foreach($arrcampos as $indice=>$valor){
				$nombre = $arrcampos[$indice];
				$valor  = $arrvalores[$indice];
				$cadena = "update ".$tabla." set ".$nombre."=".$valor." where ".$condicion;
				mysqli_query($this->cnx,$cadena);
			}
			$resultado = true;
		}
		return $resultado;
	}
	
	public function getSql(){
		$cadena=$this->cadena;
		return $cadena;
	}
}
?>
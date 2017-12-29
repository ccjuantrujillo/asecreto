<?php
/*Clase Base de datos para conectar con la base de datos,editar eliminar y grabar*/
class BD{
	public $cnx;
	private $rows;
	private $cadena;
	public function __construct(){
		$this->cnx   = mysql_connect("localhost","root","");
		if(!mysql_select_db("asecreto",$this->cnx)){
			echo "Error seleccionando la base de datos.";
		}
	}
	public function seleccionar($query){
		$rs           = mysql_query($query,$this->cnx);
		$this->cadena = $query;
		$resultado = array();
		while($row=mysql_fetch_array($rs)){
			$arreglo=array();
			for($i=0;$i<mysql_num_fields($rs);$i++){
				$nombre=mysql_field_name($rs,$i);
				$arreglo[$nombre]=$row[$i];
				$arreglo[$i]=$row[$i];
			}
			array_push($resultado,$arreglo);
		}
		return $resultado;
	}
	
	public function insertar($tabla,$campos,$valores){
		$cadena="insert into ".$tabla." (".$campos.") values (".$valores.")";
		$this->cadena = $cadena;
		$rs=mysql_query($cadena,$this->cnx);
		if(!$rs){
			$txt="<script>alert('Ocurrio un error al grabar');</script>";
			echo $txt;
			$resultado=false;
		}
		else{
			$resultado=mysql_insert_id($this->cnx);			
		}
		return $resultado;
	}
	
	public function eliminar($tabla,$condicion){
		$cadena="delete from ".$tabla." where ".$condicion."";
		$this->cadena = $cadena;
		$rs=mysql_query($cadena,$this->cnx);
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
				mysql_query($cadena,$this->cnx);
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
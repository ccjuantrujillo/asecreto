<?php
//Mostramos el resultado de una tabla en un archivo excel.
require_once "../libreria/BD.class.php";
require_once "../libreria/ExcelWriter.class.php";
//Cabecera
$excel = new ExcelWriter("prueba.xls");
$arrayCabecera=array("ID","Cursos","Direccion","Edad");
$excel->writeLine($arrayCabecera);
$oBD=new BD();
$cadena="select * from alternativas where pregunta='1'";
$arrayFilas=$oBD->seleccionar($cadena);
//print_r($arrayFilas);die();
//Cuerpo
foreach($arrayFilas as $arrayFila){
		$excel->writeRow();
		$excel->writeCol($arrayFila['idalternativa']);
		$excel->writeCol($arrayFila['nomalternativa']);
		$excel->writeCol($arrayFila['valor']);
		$excel->writeCol($arrayFila['pregunta']);
}
$excel->close();
header("location:prueba.xls");
?>

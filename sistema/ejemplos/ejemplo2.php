<?php
//Mostramos el resultado de una tabla en un archivo PDF.
require_once "../libreria/BD.class.php";
require_once "../libreria/Fpdf.class.php";
$oBD=new BD();
$cadena="select * from alternativas where pregunta='1'";
$resultado=$oBD->seleccionar($cadena);
//print_r($resultado);die();
$pdf = new Fpdf();
$pdf->addPage();
$pdf->setFont('Arial','B',11);
foreach($resultado as $array_resultado){
		$pdf->cell(40,10,$array_resultado['idalternativa'],1,0);	
		$pdf->cell(40,10,$array_resultado['nomalternativa'],1,0);	
		$pdf->cell(40,10,$array_resultado['valor'],1,0);	
		$pdf->cell(40,10,$array_resultado['pregunta'],1,1);	
}
$pdf->Output();
?>

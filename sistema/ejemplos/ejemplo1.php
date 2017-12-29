<?php
//Mostrar datos en una tabla.
require_once "../libreria/BD.class.php";
require_once "../libreria/Html.class.php";
$oBD=new BD();
$cadena="select * from preguntas";
$resultado=$oBD->seleccionar($cadena);
$arrayCabecera=array('idpregunta'=>'Casa','nompregunta'=>'Bodega');
$oTabla=new Tabla($arrayCabecera,$resultado,'','','');
$resultado  = $oTabla->getTabla();
$row_ini		= "<table width='100%' border='1' cellpadding='0' cellspacing='0'>";
$row_fin		= "</table>";
echo $row_ini.$resultado.$row_fin;
?>

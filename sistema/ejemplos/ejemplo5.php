<?php
//Mostrar datos en una tabla con botones de acciones añadidos.
require_once "../libreria/BD.class.php";
require_once "../libreria/Html.class.php";
$oBD=new BD();
$cadena="select * from preguntas";
$resultado=$oBD->seleccionar($cadena);
$arrayFilas=array();
foreach($resultado as $indice=>$valor){
	$id=$valor['idpregunta'];
	$valor['acciones']="<input type='button' value='Editar' id='btnEditar[".$indice."]' name='btnEditar".$indice."' onclick='alert(".$id.")'>&nbsp;";
	$valor['acciones'].="<input type='button' value='Grabar' id='btnGrabar[".$indice."]' name='btnGrabar".$indice."' onclick='alert(".$id.")'>";
	array_push($arrayFilas,$valor);
}
$arrayCabecera=array('idpregunta'=>'ID','nompregunta'=>'DESCRIPCION','acciones'=>'ACCIONES');
$oTabla=new Tabla($arrayCabecera,$arrayFilas,'fila1','filaEncima','filaCabecera');
$filas   = $oTabla->getTabla();
$row_ini = "<table class='grid' width='100%' border='1' cellpadding='0' cellspacing='0'>";
$row_fin = "</table>";
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/encuestas.css">
</head>
<body>
	<?php echo $row_ini.$filas.$row_fin;?>
</body>
</html>

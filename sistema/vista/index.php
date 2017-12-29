<?php
session_start();
$controlador="../control/control.php";
if(empty($_REQUEST['accion'])){
	$accion="principal";
}
else{
	$accion = $_REQUEST['accion'];
	$id     = $accion=='confirmar_registro'?$_REQUEST['id']:'';
	$parametros=$_REQUEST;
}
if(is_file($controlador)){
	require_once $controlador;
}
else{
	echo "El controlador no existe - 404 not found";
}
?>
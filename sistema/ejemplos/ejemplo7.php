<?php
require_once "../libreria/BD.class.php";
require_once "../libreria/Html.class.php";
$oBD=new BD();
$cadena="select id_cargo,nom_cargo from cargos";
$resultado=$oBD->seleccionar($cadena);
$oCombo=new Combo($resultado);
$option=$oCombo->getOptionHTML('','Seleccionar');
$toolbar=new ToolBar('left');
$toolbar->setBoton("btnGrabar","Grabar","btn","onclick","document.frm1.submit()","../images/add_user2.png");
$toolbar->setBoton("btnGrabar","Cancelar","btn","onclick","alert('holas otra vez')","../images/add_user.png");
$html=new Form('left');
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/encuestas.css">
</head>
<body>
<center>
<form id="frm1" name="frm1">
	<fieldset style="width:50%;">
		<legend>Datos Personales</legend>
		<table class='grid'>
			<tr>
				<td>Nombre</td>
				<td><?php $html->setText('txtDireccion','hola','');echo $html->getText();?></td>
			</tr>
			<tr>
				<td>Apellido Paterno</td>
				<td><?php $html->setText('txtDireccion','lol a todos','');echo $html->getText();?></td>
			</tr>
			<tr>
				<td>Apellido Materno</td>
				<td><?php $html->setText('txtDireccion','Viernes','');echo $html->getText();?></td>
			</tr>
			<tr>
				<td>Cargo</td>
				<td><select id='cargo' name='cargo'><?php echo $option;?></select></td>
			</tr>
			<tr>
				<td colspan="2" align='center'><?php echo $toolbar->getBoton();?></td>
			</tr>
		</table>
	</fieldset>
</form>
</center>
</body>
</html>


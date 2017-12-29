<?php
/*Subir archivos al servidor*/
require_once "../libreria/Html.class.php";
require_once "../libreria/Upload.class.php";
if(isset($_POST)){
	$file=$_FILES['fileImagen'];
	$rutaImagen="../images";
	$oUpload=new Upload();
	if(!$oUpload->subir_imagen($rutaImagen,$file)){
		echo "<script>alert('Hubo problemas al subir el archivo.');</script>";
	}
}
$html=new Form('left');
$toolbar=new ToolBar('left');
$toolbar->setBoton("btnGrabar","Grabar","btn","onclick","document.frm1.submit()","../images/add_user2.png");
$toolbar->setBoton("btnGrabar","Cancelar","btn","onclick","alert('holas otra vez')","../images/add_user.png");
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/encuestas.css">
</head>
<body>
<center>
<form id="frm1" name="frm1" method="post" enctype="multipart/form-data">
	<fieldset style="width:50%;">
		<legend>Datos Personales</legend>
		<table class='grid'>
			<tr>
				<td>Nombre</td>
				<td><?php $html->setFile('fileImagen','hola','cajaTexto');echo $html->getFile();?></td>
			</tr>
			<tr>
				<td>Apellido Paterno</td>
				<td>
					<?php 
					$html->setText('txtDireccion','lol a todos','cajaTexto');
					echo $html->getText();
					$html->setHidden('txtAccion','grabar','cajaTexto');
					echo $html->getHidden();
					?>
					</td>
			</tr>
			<tr>
				<td colspan='2'><?php echo $toolbar->getBoton();?></td>
			</tr>			
		</table>
	</fieldset>
</form>
</center>
</body>
</html>

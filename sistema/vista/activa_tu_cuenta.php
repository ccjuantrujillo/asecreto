<html>
<head>
  	<script type="text/javascript" src="../../js/prototype.js"></script>
	<script type="text/javascript" src="../../js/amigosecreto.js"></script> 
</head>
<body>
<fieldset>
<legend>ACTIVA TU CUENTA</legend>
<form name='frmActivaCuenta' id='frmActivaCuenta'>
<table align="center" width="75%">
	<tr>
		<td>USUARIO</td>
		<td><input type="text" name='txtUsuario' id='txtUsuario'></td>
	</tr>
	<tr>
		<td>CLAVE</td>
		<td><input type="text" name='txtClave' id='txtClave'></td>
	</tr>	
	<tr>
		<td colspan='2'>Acepto los terminos y condiciones <input type='checkbox' name='chkTerminos' id='chkTerminos'></td>
	</tr>
	<tr>
		<td colspan='2' align='right'><input type='button' value='INGRESAR' onclick="activa_cuenta_miembro();"></td>
	</tr>	
</table>
</form>
</fieldset>
</body>
</html>
<html>
<head>
  	<script type="text/javascript" src="../../js/prototype.js"></script>
	<script type="text/javascript" src="../../js/amigosecreto.js"></script>  
</head>
<body>
<form name='frmGrupo' id='frmGrupo'>
<table align='center'>
	<tr>
		<td>Nombre del Grupo</td>
		<td><input type="text" name='txtNombreGrupo' id='txtNombreGrupo'></td>
	</tr>
	<tr>
		<td>Nombre del Grupo confirmacion</td>
		<td><input type="text" name='txtNombreGrupo2' id='txtNombreGrupo2'></td>
	</tr>
	<tr>
		<td>Tipo de grupo</td>
		<td>
			<select name='cboTipoGrupo' id='cboTipoGrupo'>
				<option value='1'>Amigos</option>
				<option value='2'>Familiar</option>
				<option value='3'>Empresa</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Nombre de la empresa</td>
		<td><input type="text" name='txtEmpresa' id='txtEmpresa'></td>
	</tr>
	<tr>
		<td>Cantidad de amigos</td>
		<td><input type="text" name='txtNumeroAmigos' id='txtNumeroAmigos'></td>
	</tr>
	<tr>
		<td>Foto o imagen del grupo</td>
		<td><input type="file" name='fileFoto' id='fileFoto'></td>
	</tr>
	<tr>
		<td><input type='button' value='Crear Grupo' onclick='crear_grupo();'></td>
	</tr>	
</table>
</form>
</body>
</html>
<html><head>  	<script type="text/javascript" src="../../js/prototype.js"></script>	<script type="text/javascript" src="../../js/amigosecreto.js"></script> </head><body>	<form name='frmInvitacion' id='frmInvitacion'>	<table>		<?php		for($i=0;$i<$cantidad;$i++){		?>		<tr>			<td>Nombre AMIGO <?php echo $i+1;?></td>			<td><input type="text" name="txtNombre[<?php echo $i;?>]" id="txtNombre[<?php echo $i;?>]"></td>		</tr>		<tr>			<td>Email del AMIGO <?php echo $i+1;?></td>			<td><input type="text" name="txtEmail[<?php echo $i;?>]" id="txtEmail[<?php echo $i;?>]"></td>		</tr>		<tr>			<td>Confirmar Email <?php echo $i+1;?></td>			<td><input type="text" name="txtEmail2[<?php echo $i;?>]" id="txtEmail2[<?php echo $i;?>]"></td>		</tr>			<tr height="5px">			<td colspan='2'><br></td>		</tr>				<?php		}		?>		<tr>			<td>Mensaje: </td>			<td><textarea name='mensaje' id='mensaje'></textarea></td>		</tr>				<tr>			<td colspan='2'>				<input type='button' onclick='enviar_invitaciones();' value='Enviar invitaciones'>			</td>		</tr>			</table>	</form></body></html>
<?php
//session_start();
require_once "../logica/LPersona.php";
require_once "../logica/LAdministrador.php";
require_once "../logica/LProducto.php";
//$parametros=$_REQUEST;
//$accion=$parametros['accion'];
$oLAdministrador=new LAdministrador();
switch($accion){
	//Redirecciones
	case 'principal':
		$oLAdministrador->principal();
		$resultado=false;
		break;

	case 'muro_de_grupo':
		$oLAdministrador->muro_de_grupo();
		$resultado=false;	
		break;

	case 'escribir_mensaje_muro':
		$mensaje = $parametros['txtMensaje'];
		$oLAdministrador->escribir_mensaje_muro($mensaje);
		$resultado=false;			
		break;
		
	case 'buzon_navideno':
		$oLAdministrador->buzon_navideno();
		$resultado=false;	
		break;
		
	case 'lista_de_deseos':
		$oLAdministrador->lista_de_deseos();
		$resultado=false;	
		break;

	case 'soy_amigo_secreto_de':
		$oLAdministrador->soy_amigo_secreto_de();
		$resultado=false;	
		break;		
		
	case 'registrar_administrador':
		$oLAdministrador->registrar_administrador();
		$resultado=false;
		break;

	case 'ingresa_datos_grupo':
		$oLAdministrador->ingresa_datos_grupo();
		$resultado=false;
		break;		
	
	case 'invita_a_tus_amigos':
		$oLAdministrador->invita_a_tus_amigos();
		$resultado=false;
		break;	
		
	case 'invitar_amigos':
		$oLAdministrador->invitar_amigos();
		$resultado=false;
		break;	
	
	case 'cerrar_sesion':
		$oLAdministrador->cerrar_sesion();
		$resultado=false;	
		break;
	
	case 'invitaciones_enviadas':
		$oLAdministrador->invitaciones_enviadas();
		$resultado=false;	
		break;

	case 'sortear':
		$oLAdministrador->sortear();
		$resultado   = true;
		break;			
		
	case 'crear_fecha_entrega':
		$oLAdministrador->crear_fecha_entrega();
		$resultado   = true;
		break;	

	case 'fecha_de_entrega':
		$oLAdministrador->fecha_de_entrega();
		$resultado   = true;
		break;	

	case 'panel_de_participantes':
		$oLAdministrador->panel_de_participantes();
		$resultado   = true;
		break;		
		
	case 'buzon_del_jefe':
		$oLAdministrador->buzon_del_jefe();
		$resultado   = true;
		break;	
	
	case 'catalogo_por_categoria':
		$oLAdministrador->catalogo_por_categoria();
		$resultado   = true;
		break;	

	case 'catalogo_por_empresa':
		$oLAdministrador->catalogo_por_empresa();
		$resultado   = true;
		break;

	case 'catalogo_detalle':
		$categoria    = $parametros['categoria'];
		$oLAdministrador->catalogo_detalle($categoria);
		$resultado   = true;
		break;	
		
	case 'activa_tu_cuenta':
		$oLAdministrador->activa_tu_cuenta($categoria);
		$resultado   = true;
		break;	

	case 'activa_cuenta_miembro':
		$txtUsuario = trim($parametros['txtUsuario']);
		$txtClave   = trim($parametros['txtClave']);	
		$oLAdministrador->activa_cuenta_miembro($txtUsuario,$txtClave);
		$resultado   = true;
		break;	
	
	/*************************************Administradores*************************************/	
	case 'ingreso_sistema':
		$txtUsuario  = trim($parametros['txtUsuario']);
		$txtPassword = trim($parametros['txtPassword']);	
		$resultado   =$oLAdministrador->ingreso_sistema($txtUsuario,$txtPassword);	
		break;		
		
	case 'ingreso_sistema_usuario':
		$oLAdministrador->ingreso_sistema_usuario();
		$resultado=false;
		break;
	
	case 'ingreso_sistema_administrador':
		$txtUsuario  = $parametros['txtUsuario'];
		$txtPassword = $parametros['txtPassword'];	
		$oLAdministrador->ingreso_sistema_administrador($txtUsuario,$txtPassword);
		$resultado=false;	
		break;				

        case 'ingreso_administrador':
		$txtUsuario  = $parametros['txtUsuario'];
		$txtPassword = $parametros['txtPassword'];
		$resultado   = $oLAdministrador->ingreso_administrador($txtUsuario,$txtPassword);
		break;	


	case 'gracias':
		$oLAdministrador->gracias();
		$resultado=false;		
		break;
		
	case 'ingresa_a_tu_cuenta':
		$oLAdministrador->ingresa_a_tu_cuenta();
		$resultado=false;		
		break;
       case 'ingresar_datos_personales':
		$txtEmail       = $parametros['txtEmail'];
		$txtEmail2      = $parametros['txtEmail2'];
		$txtContrasena  = $parametros['txtContrasena'];
		$txtContrasena2 = $parametros['txtContrasena2'];
		$txtNombres     = $parametros['txtNombres'];
		$txtApellidos   = $parametros['txtApellidos'];
		$txtNacimiento  = $parametros['year']."-".$parametros['mes']."-".$parametros['dia'];
		$cboTipoDocumento= $parametros['cboTipoDocumento'];
		$txtNumeroDocumento= $parametros['txtNumeroDocumento'];
		$txtTelefono     = $parametros['txtTelefono'];
		$chkSexo         = $parametros['chkSexo'];
		$txtCiudad       = $parametros['txtCiudad'];
		$fNotificaciones = $parametros['fNotificaciones'];
		$fPromociones    = $parametros['fPromociones'];
		$fCondiciones    = $parametros['fCondiciones'];	
		$fAdministrador  = 1;
		$oLAdministrador->ingresar_datos_personales($txtEmail,$txtContrasena,$txtNombres,$txtApellidos,$txtNacimiento,$cboTipoDocumento,$txtNumeroDocumento,$txtTelefono,$chkSexo,$txtCiudad,$fNotificaciones,$fPromociones,$fAdministrador);
		$resultado=false;
		break;
	
	case 'verificar_confirmar_registro':
                $id        =  $parametros['id'];
		$resultado = $oLAdministrador->verificar_confirmar_registro($id);
		$resultado=false;
		break;
		
	case 'crear_grupo':
		$nombre       = $parametros['txtNombreGrupo'];	
		$nombre2      = $parametros['txtConfirmaNombre'];
		$tipo         = $parametros['cboTipoGrupo'];	
		$cantidad     = $parametros['txtNumeroAmigos'];
		$nombreTipo   = $parametros['txtNombreEmpresa'];
		$foto         = $parametros['fileFoto'];	
		$resultado    = $oLAdministrador->crear_grupo($nombre,$cantidad,$tipo,$nombreTipo,$foto);
		break;	
		 
	case 'editar_grupo':
		break;
	
	case 'eliminar_grupo':
		break;
		
	case 'enviar_invitaciones':
		$arrayNombre = $parametros['txtNombre'];
		$arrayEmail  = $parametros['txtEmail'];
		$arrayEmail2 = $parametros['txtEmail2'];
		$mensaje     = $parametros['mensaje'];
		$oLAdministrador->enviar_invitaciones($arrayNombre,$arrayEmail,$mensaje);
		$resultado   = true;
		break;
		
	case 'agregar_comentario':
		$idmensaje   = $parametros['idmensaje'];
		$comentario  = $parametros['txtComentario'];
		$oLAdministrador->agregar_comentario($idmensaje,$comentario);
		$resultado   = true;
		break;
		
	case 'realizar_sorteo':
		$oLAdministrador->realizar_sorteo();
		$resultado   = true;
		break;
	
	case 'escribir_mensaje_amigo':
		$mensaje     = $parametros['mensaje'];
		$oLAdministrador->escribir_mensaje_amigo($mensaje);
		$resultado   = true;
		break;	
}
echo $resultado;
?>

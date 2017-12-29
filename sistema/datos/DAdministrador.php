<?php
require_once "../../libreria/BD.mysql.class.php";
require_once "DPersona.php";
class DAdministrador extends DPersona{
	private $cnx;
	private $oBD;
	public function __construct(){
		$this->oBD = new BD();
		$this->cnx = $this->oBD->cnx;	
	}
	
	public function ingresar_datos_personales($txtEmail,$txtContrasena,$txtNombres,$txtApellidos,$txtNacimiento,$cboTipoDocumento,$txtNumeroDocumento,$txtTelefono,$chkSexo,$txtCiudad,$fNotificaciones,$fPromociones,$fAdministrador){
		$campos    = "USUAC_Foto,TIPOP_Codigo,UBIGP_Codigo,USUAC_Correo,USUAC_Password,USUAC_Apellidos,USUAC_Nombres,USUAC_FechaNacimiento,USUAC_NumeroDocumento,USUAC_Telefono,USUAC_Sexo,USUAC_Ciudad,USUAC_FlagPromociones,USUAC_FlagNotificaciones,USUAC_FlagAdministrador,USUAC_FlagEnviado";
		$valores   = "'','".$cboTipoDocumento."','000000','".$txtEmail."','".$txtContrasena."','".$txtApellidos."','".$txtNombres."','".$txtNacimiento."','".$txtNumeroDocumento."','".$txtTelefono."','".$chkSexo."','".$txtCiudad."','".$fPromociones."','".$fNotificaciones."','".$fAdministrador."','1'";
		$resultado =$this->oBD->insertar('ams_usuario',$campos,$valores);
		return $resultado;
	}

        public function verificar_confirmar_registro($id){
            $cadena = "select * from ams_usuario where md5(USUAP_Codigo)='".$id."'";
            $resultado=$this->oBD->seleccionar($cadena);
            return $resultado;
        }

	public function confirmar_registro($id){
		$condicion = "md5(USUAP_Codigo)='".$id."'";
		$resultado=$this->oBD->actualizar('ams_usuario','USUAC_FlagConfirmado','1',$condicion);
		return $resultado;
	}

	public function confirmar_bienvenida($usuario){
            $condicion = "USUAP_Codigo='".$usuario."'";
            $resultado=$this->oBD->actualizar('ams_usuario','USUAC_FlagBienvenida','1',$condicion);
            //echo $usuario."fasd".$this->oBD->getSql();
            return $resultado;
	}

	public function ingreso_sistema($txtUsuario,$txtPassword){
		$cadena="select * from ams_usuario where USUAC_Correo='".$txtUsuario."' and USUAC_Password='".$txtPassword."' and USUAC_FlagConfirmado='1'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;			
	}
	//**********
	public function recuperar_miembro($txtUsuario,$txtPassword){
		$cadena="select * from ams_usuario where USUAC_Correo='".$txtUsuario."' and USUAC_Password='".$txtPassword."'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;			
	}
	
	public function ingreso_sistema_administrador($txtUsuario,$txtPassword){
		$cadena="select * from ams_usuario where USUAC_Correo='".$txtUsuario."' and USUAC_Password='".$txtPassword."' and USUAC_FlagConfirmado='1'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;			
	}

	public function ingreso_administrador($txtUsuario,$txtPassword){
		$cadena="select * from ams_usuario where USUAC_Correo='".$txtUsuario."' and USUAC_Password='".$txtPassword."' and USUAC_FlagConfirmado='1' and USUAC_FlagAdministrador='1'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;
	}

	public function ingreso_sistema_usuario(){
		
	}
	
	public function modificar_datos_personales(){
	
	}
	
	public function listar_grupos($usuario,$flagAdministrador){
		if($flagAdministrador=='1'){
			$cadena = "select * from ams_usuariogrupo where USUAP_Codigo='".$usuario."' and USUGRUC_FlagAdministrador='".$flagAdministrador."'";
		}
		elseif($flagAdministrador=='0'){
			$cadena = "select * from ams_usuariogrupo where USUAP_Codigo='".$usuario."' limit 1";
		}
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;		
	}

	public function listar_usuarios_por_grupo($grupo){
		$cadena = "select * from ams_usuariogrupo where GRUPP_Codigo='".$grupo."' and USUGRUC_FlagEstado='1'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;			
	}
	
	public function datos_grupo($grupo){
		$cadena = "select * from ams_grupo where GRUPP_Codigo='".$grupo."'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;			
	}
	
	public function datos_usuario($codigo){
		$cadena="select * from ams_usuario where USUAP_Codigo='".$codigo."'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;				
	}	
	
	public function soy_amigo($grupo,$usuario){
		$cadena="select * from ams_usuariogrupo where USUAP_Codigo='".$usuario."' and GRUPP_Codigo='".$grupo."' and USUGRUC_FlagEstado='1'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;				
	}	

	public function mi_amigo($grupo,$usuario){
		$cadena="select * from ams_usuariogrupo where USUAP_Amigo='".$usuario."' and GRUPP_Codigo='".$grupo."' and USUGRUC_FlagEstado='1'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;				
	}		
	
	public function datos_usuariogrupo($grupo,$usuario){
		$cadena="select * from ams_usuariogrupo where USUAP_Codigo='".$usuario."' and GRUPP_Codigo='".$grupo."' and USUGRUC_FlagEstado='1'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;		
	}
	
	public function crear_grupo($nombre,$cantidad,$tipo,$nombreTipo,$foto){
		$tabla   = "ams_grupo";
		$campos  = "GRUPC_Nombre,GRUPC_CantidadMiembros,GRUPC_TipoGrupo,GRUPC_NombreTipoGrupo,GRUPC_Foto";
		$valores = "'".$nombre."','".$cantidad."','".$tipo."','".$nombreTipo."','".$foto."'";
		$resultado =$this->oBD->insertar($tabla,$campos,$valores);
		return $resultado;
	}
	
	public function editar_grupo($grupo,$nombre,$cantidad,$tipo,$nombreTipo,$foto){
		$tabla   = "ams_grupo";
		$campos  = "GRUPC_Nombre,GRUPC_TipoGrupo,GRUPC_NombreTipoGrupo,GRUPC_CantidadMiembros,GRUPC_Foto,GRUPC_FechaModificacion";
		$valores = "'".$nombre."','".$tipo."','".$nombreTipo."','".$cantidad."','".$foto."','".date('Y-m-d h:i:s')."'";
		$condicion = "GRUPP_Codigo='".$grupo."'";
		$resultado=$this->oBD->actualizar($tabla,$campos,$valores,$condicion);	
		return $resultado;
	}
	
	public function eliminar_grupo($grupo){
		$tabla     = "ams_grupo";
		$campos    = "GRUPC_FlagEstado"; 
		$valores   = "'0'";
		$condicion = "GRUPP_Codigo='".$grupo."'";
		$resultado=$this->oBD->actualizar($tabla,$campos,$valores,$condicion);	
		return $resultado;	
	}
	
	public function agregar_administrador_a_grupo($usuario,$grupo){
		$tabla   = "ams_usuariogrupo";
		$campos  = "USUAP_Codigo,GRUPP_Codigo,USUAP_Amigo,USUGRUC_Puntaje,USUGRUC_FlagAdministrador,USUGRUC_FlagConfirmado";
		$valores = "'".$usuario."','".$grupo."','0','0','1','1'";
		$resultado =$this->oBD->insertar($tabla,$campos,$valores);
		//echo $this->oBD->getSql();
		return $resultado;		
	}
	
	public function agregar_usuario_a_grupo($usuario,$grupo){
		$tabla   = "ams_usuariogrupo";
		$campos  = "USUAP_Codigo,GRUPP_Codigo,USUAP_Amigo,USUGRUC_Puntaje";
		$valores = "'".$usuario."','".$grupo."','0','0'";
		$resultado =$this->oBD->insertar($tabla,$campos,$valores);
		//echo $this->oBD->getSql();
		return $resultado;		
	}	
	
	public function realizar_sorteo($grupo,$amigo1,$amigo2){
		$tabla   = "ams_usuariogrupo";
		$campos  = "USUAP_Amigo";
		$valores = "'".$amigo2."'";
		$condicion = "GRUPP_Codigo='".$grupo."' and USUAP_Codigo='".$amigo1."'";
		$resultado=$this->oBD->actualizar($tabla,$campos,$valores,$condicion);	
		return $resultado;	
	}	
	
	/******************************* MURO ********************************/
	public function leer_mensajes_muro($grupo){
		$cadena = "select * from ams_mensaje where GRUPP_Codigo='".$grupo."' and MENSC_FlagTipoDestino='2' and MENSC_FlagEstado='1' order by MENSP_Codigo desc";//MENSC_FlagTipoDestino 2.Usuario a buzon
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;			
	}
	
	public function leer_comentarios_muro($idmensaje){
		$cadena = "select * from ams_comentario where MENSP_Codigo='".$idmensaje."' and COMEC_FlagEstado='1'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;			
	}
	
	public function escribir_mensaje_muro($usuario,$grupo,$mensaje){
		$tabla   = "ams_mensaje";
		$campos  = "USUAP_Codigo,USUAP_Amigo,GRUPP_Codigo,MENSC_Descripcion,MENSC_FlagTipoMensaje,MENSC_FlagTipoDestino";//MENSC_FlagTipoMensaje 1. Interno, 2. a su correo
		$valores = "'".$usuario."','0','".$grupo."','".$mensaje."','1','2'";
		$resultado =$this->oBD->insertar($tabla,$campos,$valores);
		//echo $this->oBD->getSql();
		return $resultado;
	}
	
	public function eliminar_mensaje_muro(){
	
	}	
	
	public function agregar_comentario($idmensaje,$comentario,$usuario){
		$tabla   = "ams_comentario";  
		$campos  = "MENSP_Codigo,COMEC_Descripcion,USUAP_Codigo";
		$valores = "'".$idmensaje."','".$comentario."','".$usuario."'";
		$resultado =$this->oBD->insertar($tabla,$campos,$valores);//idcomentario
		//echo $this->oBD->getSql();
		return $resultado;
	}
	
	public function eliminar_comentario($idcomentario){
		$tabla     = "ams_comentario";      
		$campos    = "COMEC_FlagEstado";  
		$valores   = "'1'";
		$condicion = "COMEP_Codigo='".$idcomentario."'";
		$resultado=$this->oBD->actualizar($tabla,$campos,$valores,$condicion);	
		return $resultado;			
	}

	/******************************* BUZON ********************************/	
	public function leer_mensajes_buzon($grupo,$usuario,$amigo){
		$cadena = "select * from ams_mensaje where GRUPP_Codigo='".$grupo."' and USUAP_Amigo='".$usuario."' and USUAP_Codigo='".$amigo."' and MENSC_FlagTipoDestino='1' and MENSC_FlagEstado='1' order by MENSP_Codigo desc";//MENSC_FlagTipoDestino 2.Usuario a buzon
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;			
	}
	
	public function eliminar_mensaje_buzon($idmensaje){

	}		

	public function leer_mensajes_buzon_administrador($grupo,$usuario){
		$cadena = "select * from ams_mensaje where GRUPP_Codigo='".$grupo."' and USUAP_Amigo='".$usuario."' and MENSC_FlagTipoDestino='3' and MENSC_FlagEstado='1' order by MENSP_Codigo desc";//MENSC_FlagTipoDestino 2.Usuario a buzon
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;			
	}
	
	public function escribir_mensaje_amigo($usuario,$amigo,$grupo,$mensaje){
		$tabla   = "ams_mensaje";
		$campos  = "USUAP_Codigo,USUAP_Amigo,GRUPP_Codigo,MENSC_Descripcion,MENSC_FlagTipoMensaje,MENSC_FlagTipoDestino";//MENSC_FlagTipoMensaje 1. Interno, 2. a su correo
		$valores = "'".$usuario."','".$amigo."','".$grupo."','".$mensaje."','1','1'";
		$resultado =$this->oBD->insertar($tabla,$campos,$valores);
		//echo $this->oBD->getSql();
		return $resultado;
	}	
	
	/*public function soy_amigo_secreto_de($grupo,$usuario){
		$cadena = "select * from ams_usuariogrupo where USUAP_Codigo='".$usuario."' and GRUPP_Codigo='".$grupo."'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;		
	}*/
	
	/******************************* PRODUCTOS ********************************/
	public function listar_categorias(){
		$cadena="select * from ams_categoria where CATEC_FlagEstado='1'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;			
	}
	
	public function listar_empresas(){
		$cadena="select * from ams_empresa where EMPRC_FlagEstado='1'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;			
	}
	
	public function listar_productos_por_categoria($categoria){
		$cadena = "select * from ams_producto where CATEP_Codigo='".$categoria."' and PRODC_FlagEstado='1'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;			
	}
	
	public function listar_productos_por_empresa($empresa){
		$cadena = "select * from ams_producto where EMPRP_Codigo='".$empresa."' and PRODC_FlagEstado='1'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;		
	}
	
	public function recuperar_categoria($categoria){
		$cadena="select * from ams_categoria where CATEC_FlagEstado='1' and CATEP_Codigo='".$categoria."'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;		
	}
	
	public function recuperar_empresa($empresa){
		$cadena="select * from ams_empresa where EMPRP_Codigo='".$empresa."' and EMPRC_FlagEstado='1'";
		$resultado=$this->oBD->seleccionar($cadena);
		return $resultado;	
	}
}
?>
<?php
require_once "../../libreria/Html.class.php";
require_once "../../libreria/Upload.class.php";
require_once "../../libreria/SendMail.class.php";
require_once "../datos/DAdministrador.php";
class LAdministrador{
	private $oDAdministrador;
	public function __construct(){
		$this->oDAdministrador = new DAdministrador();		
	}

	/****************Redirecciones**************/
	public function principal(){
		require_once "../vista/home.php";
	}

	public function buzon_navideno(){
		//Datos de usuario.
		$grupo          = $_SESSION['GRUPP_Codigo'];;
		$usuario        = $_SESSION['USUAP_Codigo'];
		$nombre_usuario = $_SESSION['USUAC_Nombres'];
		$foto_usuario   = ($_SESSION['USUAC_Foto']=='')?'images/IMG-LOG.jpg':"images/".$_SESSION['USUAC_Foto'];
		//Datos del grupo
		$datos_grupo             = $this->recuperar_grupo($grupo);
		$nombre_grupo            = $datos_grupo[0]['GRUPC_Nombre'];
		$fechar_sorteo           = $datos_grupo[0]['GRUPC_FechaSorteo'];
		$fecha_entrega_regalos   = $datos_grupo[0]['GRUPC_FechaEntrega'];
		$puesto_ranking          = $datos_grupo[0]['GRUPC_Puntuacion'];
		$numero_jugadores        = $datos_grupo[0]['GRUPC_CantidadMiembros'];
		$flagConfirmado			 = $datos_grupo[0]['GRUPC_FlagConfirmado'];
		$flagSorteado			 = $datos_grupo[0]['GRUPC_FlagSorteado'];	
		//Datos de mi amigo secreto
		$arrayMiAmigo            = $this->oDAdministrador->mi_amigo($grupo,$usuario);
		$amigo			         = $arrayMiAmigo[0]['USUAP_Codigo'];	
		//Recupero mensajes
		$listar_mensajes		= $this->leer_mensajes_buzon($grupo,$usuario,$amigo);
		require_once "../vista/buzon_navideno.php";
	}

	public function lista_de_deseos(){
		$grupo          = $_SESSION['GRUPP_Codigo'];;
		$usuario        = $_SESSION['USUAP_Codigo'];
		$nombre_usuario = $_SESSION['USUAC_Nombres'];
		$foto_usuario   = ($_SESSION['USUAC_Foto']=='')?'images/IMG-LOG.jpg':"images/".$_SESSION['USUAC_Foto'];
		require_once "../vista/lista_de_deseos.php";
	}

	public function soy_amigo_secreto_de(){
		$oAdmin1		= new DAdministrador();
		$oAdmin2		= new DAdministrador();
		$grupo          = $_SESSION['GRUPP_Codigo'];
		$nombre_grupo   = $_SESSION['GRUPC_Nombre'];
		$usuario        = $_SESSION['USUAP_Codigo'];
		$nombre_usuario = $_SESSION['USUAC_Nombres'];
		$foto_usuario   = ($_SESSION['USUAC_Foto']=='')?'images/IMG-LOG.jpg':"images/".$_SESSION['USUAC_Foto'];	
		$arrayAmigo		= $oAdmin1->soy_amigo($grupo,$usuario);
		$amigo			= $arrayAmigo[0]['USUAP_Amigo'];
		$datos_amigo    = $oAdmin2->datos_usuario($amigo);
		$nombre_amigo   = $datos_amigo[0]['USUAC_Nombres'];
		require_once "../vista/soy_amigo_secreto_de.php";
	}	
	
	public function gracias(){
		require_once "../vista/gracias_por_registrarte.php";
	}
	
	public function registrar_administrador(){
		$resultado=$this->listar_tipo_documentos();
		$oCombo=new Combo($resultado);
		$tipo_documentos=$oCombo->getOptionHTML('','Seleccionar');
		require_once "../vista/registrate.php";
	}
	
	public function ingresa_datos_grupo(){
            //Datos de usuario
            $usuario                 = $_SESSION['USUAP_Codigo'];
            $datos_usuario           = $this->oDAdministrador->datos_usuario($usuario);
            $nombre_usuario          = $datos_usuario[0]['USUAC_Nombres'];
            $apellidos_usuario       = $datos_usuario[0]['USUAC_Apellidos'];
            $foto_usuario            = ($datos_usuario[0]['USUAC_Foto']=='')?'images/IMG-LOG.jpg':"images/".$datos_usuario[0]['USUAC_Foto'];
            //$flagAdministrador 	     = $datos_usuario[0]['USUGRUC_FlagAdministrador'];
			$flagAdministrador 	     = $datos_usuario[0]['USUAC_FlagAdministrador'];
			$flagSorteado			 = $datos_grupo[0]['GRUPC_FlagSorteado'];	
            require_once "../vista/ingresa_datos_grupo.php";
	}	

        public function ingresa_a_tu_cuenta(){
            require_once "../vista/ingresa_a_tu_cuenta.php";
        }

	public function muro_de_grupo(){
            $usuario                 = $_SESSION['USUAP_Codigo'];
            $grupo                   = $_SESSION['GRUPP_Codigo'];
            //Datos de usuario
            $datos_usuario           = $this->oDAdministrador->datos_usuario($usuario);
            $nombre_usuario          = $datos_usuario[0]['USUAC_Nombres'];
            $apellidos_usuario       = $datos_usuario[0]['USUAC_Apellidos'];
            $foto_usuario            = ($datos_usuario[0]['USUAC_Foto']=='')?'images/Usuario_img.jpg':"images/".$datos_usuario[0]['USUAC_Foto'];
            $flagAdministrador 	     = $datos_usuario[0]['USUAC_FlagAdministrador'];
            //Datos del grupo
            $datos_grupo             = $this->recuperar_grupo($grupo);
            $nombre_grupo            = $datos_grupo[0]['GRUPC_Nombre'];
            $fechar_sorteo           = $datos_grupo[0]['GRUPC_FechaSorteo'];
            $fecha_entrega_regalos   = $datos_grupo[0]['GRUPC_FechaEntrega'];
            $puesto_ranking          = $datos_grupo[0]['GRUPC_Puntuacion'];
            $numero_jugadores        = $datos_grupo[0]['GRUPC_CantidadMiembros'];
            $flagConfirmado          = $datos_grupo[0]['GRUPC_FlagConfirmado'];
            $flagSorteado	     = $datos_grupo[0]['GRUPC_FlagSorteado'];            
            //Datos del usuario en el grupo
            $usuariogrupo            = $this->oDAdministrador->datos_usuariogrupo($grupo,$usuario);
            $amigo	             = $usuariogrupo[0]['USUAP_Amigo'];
            $puntaje_usuario   	     = $usuariogrupo[0]['USUGRUC_Puntaje'];
            $puntaje_usuario   	     = $usuariogrupo[0]['USUGRUC_Puntaje'];
            $deseos_usuario          = $usuariogrupo[0]['USUGRUC_CantidadDeseos'];
            $_SESSION['USUAP_Amigo'] = $amigo;
            $lista_muro              = $this->oDAdministrador->leer_mensajes_muro($grupo,$usuario);
            echo $flagAdministrador;
            if($flagAdministrador==0){
                    require_once "../vista/muro_de_grupo.php";
            }
            elseif($flagAdministrador==1){
            	            	echo "hola";
                    require_once "../vista/muro_de_grupo_administrador.php";
            }
	}
	
	public function invita_a_tus_amigos(){
		require_once "../vista/invita_a_tus_amigos.php";	
	}
	
	public function invitar_amigos(){
		$grupo                  = $_SESSION['GRUPP_Codigo'];
		$usuario                = $_SESSION['USUAP_Codigo'];
                //Datos usuario
                $datos_usuario          = $this->oDAdministrador->datos_usuario($usuario);
                $nombre_usuario         = $datos_usuario[0]['USUAC_Nombres'];
                $apellidos_usuario      = $datos_usuario[0]['USUAC_Apellidos'];
                $foto_usuario           = ($datos_usuario[0]['USUAC_Foto']=='')?'images/IMG-LOG.jpg':"images/".$datos_usuario[0]['USUAC_Foto'];
                $flagAdministrador 	= $datos_usuario[0]['USUGRUC_FlagAdministrador'];
		//Datos del grupo
		$datos_grupo            = $this->recuperar_grupo($grupo);
		$nombre_grupo           = $datos_grupo[0]['GRUPC_Nombre'];
		$fechar_sorteo          = $datos_grupo[0]['GRUPC_FechaSorteo'];
		$fecha_entrega_regalos  = $datos_grupo[0]['GRUPC_FechaEntrega'];
		$puesto_ranking         = $datos_grupo[0]['GRUPC_Puntuacion'];
		$cantidad               = $datos_grupo[0]['GRUPC_CantidadMiembros'];
		$flagConfirmado		= $datos_grupo[0]['GRUPC_FlagConfirmado'];
		$flagSorteado		= $datos_grupo[0]['GRUPC_FlagSorteado'];
		require_once "../vista/email_a_tus_amigos.php";	
	}
	
	public function cerrar_sesion(){
		//Destruimos las cookies. 
		setcookie("usNick","x",time()-3600); 
		setcookie("usPass","x",time()-3600); 	
		session_destroy();
		//print_r($_SESSION);
		require_once "../vista/home.php";
	}
	
	public function invitaciones_enviadas(){
		require_once "../vista/invitaciones_enviadas.php";
	}
	
	public function sortear(){
		$grupo           = $_SESSION['GRUPP_Codigo'];
		$usuario         = $_SESSION['USUAP_Codigo'];
		$nombre_usuario  = $_SESSION['USUAC_Nombres'];
		//Datos del grupo
		$datos_grupo            = $this->recuperar_grupo($grupo);
		$nombre_grupo           = $datos_grupo[0]['GRUPC_Nombre'];
		$fecha_creacion         = $datos_grupo[0]['GRUPC_FechaRegistro'];
		$fechar_sorteo          = $datos_grupo[0]['GRUPC_FechaSorteo'];
		$fecha_entrega_regalos  = $datos_grupo[0]['GRUPC_FechaEntrega'];
		$puesto_ranking         = $datos_grupo[0]['GRUPC_Puntuacion'];
		$cantidad               = $datos_grupo[0]['GRUPC_CantidadMiembros'];
		$flagConfirmado			= $datos_grupo[0]['GRUPC_FlagConfirmado'];	
		$flagSorteado			= $datos_grupo[0]['GRUPC_FlagSorteado'];
		require_once "../vista/sortear.php";
	}
	
	public function crear_fecha_entrega(){
		require_once "../vista/crear_fecha_entrega.php";
	}
	
	public function fecha_de_entrega(){
		$grupo           = $_SESSION['GRUPP_Codigo'];
		$usuario         = $_SESSION['USUAP_Codigo'];
		$nombre_usuario  = $_SESSION['USUAC_Nombres'];
		//Datos del grupo
		$datos_grupo            = $this->recuperar_grupo($grupo);
		$nombre_grupo           = $datos_grupo[0]['GRUPC_Nombre'];
		$fecha_creacion         = $datos_grupo[0]['GRUPC_FechaRegistro'];
		$fechar_sorteo          = $datos_grupo[0]['GRUPC_FechaSorteo'];
		$fecha_entrega_regalos  = $datos_grupo[0]['GRUPC_FechaEntrega'];
		$puesto_ranking         = $datos_grupo[0]['GRUPC_Puntuacion'];
		$cantidad               = $datos_grupo[0]['GRUPC_CantidadMiembros'];
		$flagConfirmado			= $datos_grupo[0]['GRUPC_FlagConfirmado'];	
		$flagSorteado			= $datos_grupo[0]['GRUPC_FlagSorteado'];	
		require_once "../vista/fecha_de_entrega.php";	
	}
	
	public function panel_de_participantes(){
		$grupo           = $_SESSION['GRUPP_Codigo'];
		$usuario         = $_SESSION['USUAP_Codigo'];
		$nombre_usuario  = $_SESSION['USUAC_Nombres'];
		//Datos del grupo
		$datos_grupo            = $this->recuperar_grupo($grupo);
		$nombre_grupo           = $datos_grupo[0]['GRUPC_Nombre'];
		$fecha_creacion         = $datos_grupo[0]['GRUPC_FechaRegistro'];
		$fechar_sorteo          = $datos_grupo[0]['GRUPC_FechaSorteo'];
		$fecha_entrega_regalos  = $datos_grupo[0]['GRUPC_FechaEntrega'];
		$puesto_ranking         = $datos_grupo[0]['GRUPC_Puntuacion'];
		$cantidad               = $datos_grupo[0]['GRUPC_CantidadMiembros'];
		$flagConfirmado			= $datos_grupo[0]['GRUPC_FlagConfirmado'];	
		$flagSorteado			= $datos_grupo[0]['GRUPC_FlagSorteado'];		
		require_once "../vista/panel_de_participantes.php";	
	}
	
	public function buzon_del_jefe(){
		$grupo           = $_SESSION['GRUPP_Codigo'];
		$usuario         = $_SESSION['USUAP_Codigo'];
		$nombre_usuario  = $_SESSION['USUAC_Nombres'];
		//Datos del grupo
		$datos_grupo            = $this->recuperar_grupo($grupo);
		$nombre_grupo           = $datos_grupo[0]['GRUPC_Nombre'];
		$fecha_creacion         = $datos_grupo[0]['GRUPC_FechaRegistro'];
		$fechar_sorteo          = $datos_grupo[0]['GRUPC_FechaSorteo'];
		$fecha_entrega_regalos  = $datos_grupo[0]['GRUPC_FechaEntrega'];
		$puesto_ranking         = $datos_grupo[0]['GRUPC_Puntuacion'];
		$cantidad               = $datos_grupo[0]['GRUPC_CantidadMiembros'];
		$flagConfirmado			= $datos_grupo[0]['GRUPC_FlagConfirmado'];	
		$flagSorteado			= $datos_grupo[0]['GRUPC_FlagSorteado'];		
		require_once "../vista/buzon_del_jefe.php";	
	}	
	
	public function catalogo_por_categoria(){
		$grupo          = $_SESSION['GRUPP_Codigo'];
		$nombre_grupo   = $_SESSION['GRUPC_Nombre'];
		$usuario        = $_SESSION['USUAP_Codigo'];
		$nombre_usuario = $_SESSION['USUAC_Nombres'];	
		$foto_usuario   = ($_SESSION['USUAC_Foto']=='')?'images/IMG-LOG.jpg':"images/".$_SESSION['USUAC_Foto'];
		$lista_categorias=$this->oDAdministrador->listar_categorias();
		require_once "../vista/catalogo_por_categoria.php";	
	}		
	
	public function catalogo_por_empresa(){
		$grupo          = $_SESSION['GRUPP_Codigo'];
		$nombre_grupo   = $_SESSION['GRUPC_Nombre'];
		$usuario        = $_SESSION['USUAP_Codigo'];
		$nombre_usuario = $_SESSION['USUAC_Nombres'];	
		$foto_usuario   = ($_SESSION['USUAC_Foto']=='')?'images/IMG-LOG.jpg':"images/".$_SESSION['USUAC_Foto'];
		require_once "../vista/catalogo_por_empresa.php";	
	}
	
	public function catalogo_detalle($categoria){
		$grupo          = $_SESSION['GRUPP_Codigo'];
		$usuario        = $_SESSION['USUAP_Codigo'];
		$nombre_usuario = $_SESSION['USUAC_Nombres'];
		//Datos del grupo
		$datos_grupo            = $this->recuperar_grupo($grupo);
		$nombre_grupo           = $datos_grupo[0]['GRUPC_Nombre'];
		$fecha_creacion         = $datos_grupo[0]['GRUPC_FechaRegistro'];
		$fechar_sorteo          = $datos_grupo[0]['GRUPC_FechaSorteo'];
		$fecha_entrega_regalos  = $datos_grupo[0]['GRUPC_FechaEntrega'];
		$puesto_ranking         = $datos_grupo[0]['GRUPC_Puntuacion'];
		$cantidad               = $datos_grupo[0]['GRUPC_CantidadMiembros'];
		$flagConfirmado		= $datos_grupo[0]['GRUPC_FlagConfirmado'];
		$flagSorteado		= $datos_grupo[0]['GRUPC_FlagSorteado'];			
		$foto_usuario           = ($_SESSION['USUAC_Foto']=='')?'images/IMG-LOG.jpg':"images/".$_SESSION['USUAC_Foto'];		
		$lista_categorias       = $this->oDAdministrador->listar_categorias();
		//Recuperar datos de categoria
		$datos_categoria	    = $this->oDAdministrador->recuperar_categoria($categoria);
		$nombre_categoria	    = $datos_categoria[0]['CATEC_Nombre'];
		$imagen_categoria		= "images/".$datos_categoria[0]['CATEC_NombreImagen'];
		//Listar productos por categoria.
		$lista_productos		= $this->oDAdministrador->listar_productos_por_categoria($categoria);
		require_once "../vista/catalogo_detalle.php";	
	}
	
	public function activa_tu_cuenta(){
		require_once "../vista/activa_tu_cuenta.php";	
	}
	/******************************INGRESO AL SISTEMA****************************/
	public function ingresar_datos_personales($txtEmail,$txtContrasena,$txtNombres,$txtApellidos,$txtNacimiento,$cboTipoDocumento,$txtNumeroDocumento,$txtTelefono,$chkSexo,$txtCiudad,$fNotificaciones,$fPromociones,$fAdministrador){
	   $_SESSION['emailRegistro'] = $txtEmail;
	   //Insertar registro en la base de datos
	   $id = $this->oDAdministrador->ingresar_datos_personales($txtEmail,$txtContrasena,$txtNombres,$txtApellidos,$txtNacimiento,$cboTipoDocumento,$txtNumeroDocumento,$txtTelefono,$chkSexo,$txtCiudad,$fNotificaciones,$fPromociones,$fAdministrador);	    
	   if(!$id){
		echo "No se puedo efectuar el ingreso";
		$resultado=false;
	   }
	   else{
		   $resultado=true;
		   //Enviar mensaje de confirmacion de registro
		   $contenido = "";
		   $fp      = fopen('confirmacion_registro.php',"r");
		   $persona = $txtNombres." ".$txtApellidos;
		   while ($linea= fgets($fp,1024))
		   {
			  $linea = str_replace("NOMBRE",$persona,$linea);
			  $linea = str_replace("identificador",md5($id),$linea);
			  $contenido .= $linea;
		   }
		   $enviado   = $this->confirmar_correo($txtEmail,'Confirme su registro',$contenido);
		   //Actualiza flag enviado del registro.
		   //$this->oDAdministrador->actualiza_flag_enviado($id);
		   if($enviado){
			echo "Mensaje de invitacion enviado correctamente.";
		   }
	   }
	   return $resultado;
	}

	public function ingreso_sistema($txtUsuario,$txtPassword){
		$resultado         = $this->oDAdministrador->ingreso_sistema($txtUsuario,$txtPassword);
		$usuario           = $resultado[0]['USUAC_Correo'];
		$clave             = $resultado[0]['USUAC_Password'];
		$flagAdministrador = $resultado[0]['USUAC_FlagAdministrador'];
		if($txtUsuario==$usuario && $txtPassword==$clave){
			//setcookie("usNick",$_COOKIE["usNick"],time()+7776000); 
			//setcookie("usPass",$_COOKIE["usPass"],time()+7776000); 
			$_SESSION['USUAP_Codigo']    = $resultado[0]["USUAP_Codigo"];
			$_SESSION['USUAC_Correo']    = $resultado[0]["USUAC_Correo"];
			$_SESSION['USUAC_Password']  = $resultado[0]["USUAC_Password"];
			$_SESSION['USUAC_Apellidos'] = $resultado[0]["USUAC_Apellidos"];
			$_SESSION['USUAC_Nombres']   = $resultado[0]["USUAC_Nombres"];	
			$_SESSION['USUAC_Foto']      = $resultado[0]["USUAC_Foto"];	
			$_SESSION['USUAC_FlagAdministrador'] = $resultado[0]["USUAC_FlagAdministrador"];	
			if($flagAdministrador=='1'){
				$resultado = 1;
			}
			elseif($flagAdministrador=='0'){
				$resultado = 2;
			}
		}
		else{
			$resultado = 0;
			//Destruimos las cookies. 
			setcookie("usNick","x",time()-3600); 
			setcookie("usPass","x",time()-3600); 			
		}
		return $resultado;
	}	
	
	public function ingreso_sistema_usuario(){
		$usuario               = $_SESSION['USUAP_Codigo'];
		$nombre_usuario        = $_SESSION['USUAC_Nombres'];
		$foto_usuario	       = $_SESSION['USUAC_Foto']==''?'images/IMG-LOG.jpg':"images/".$_SESSION['USUAC_Foto'];
		$lista_grupos	       = $this->listar_grupos($usuario,'0');
		$grupo		       = $lista_grupos[0]['GRUPP_Codigo'];
		$datos_grupo           = $this->recuperar_grupo($grupo);
		$tipo_persona          = 1;
		$nombre_grupo          = $datos_grupo[0]['GRUPC_Nombre'];
		$fechar_sorteo         = $datos_grupo[0]['GRUPC_FechaSorteo'];
		$fecha_entrega_regalos = $datos_grupo[0]['GRUPC_FechaEntrega'];
		$puesto_ranking        = $datos_grupo[0]['GRUPC_Puntuacion'];
		$numero_jugadores      = $datos_grupo[0]['GRUPC_CantidadMiembros'];
		$_SESSION['GRUPP_Codigo'] = $grupo; 
		$_SESSION['GRUPC_Nombre'] = $nombre_grupo;		
		$lista_muro            = $this->oDAdministrador->leer_mensajes_muro($grupo);
		require_once "../vista/muro_de_grupo.php";
	}	
	
	public function ingreso_sistema_administrador(){
		$usuario               = $_SESSION['USUAP_Codigo'];
		$nombre_usuario        = $_SESSION['USUAC_Nombres'];
		$foto_usuario		   = $_SESSION['USUAC_Foto']==''?'images/IMG-LOG.jpg':"images/".$_SESSION['USUAC_Foto'];		
		$lista_grupos          = $this->listar_grupos($usuario,'1');	
		if(count($lista_grupos)==0){
			//Primer ingreso
			$_SESSION['GRUPP_Codigo'] = ""; 
			$_SESSION['GRUPC_Nombre'] = "";		
			require_once "../vista/crear_grupo.php";		
		}
		else{
			//print_r($lista_grupos);
			$grupo                    = $lista_grupos[0]['GRUPP_Codigo'];
			$datos_grupo              = $this->oDAdministrador->datos_grupo($grupo);
			$tipo_persona             = 1;
			$nombre_grupo             = $datos_grupo[0]['GRUPC_Nombre'];
			$fechar_sorteo            = $datos_grupo[0]['GRUPC_FechaSorteo'];
			$fecha_entrega_regalos    = $datos_grupo[0]['GRUPC_FechaEntrega'];
			$puesto_ranking           = $datos_grupo[0]['GRUPC_Puntuacion'];
			$numero_jugadores         = $datos_grupo[0]['GRUPC_CantidadMiembros'];
			$_SESSION['GRUPP_Codigo'] = $grupo; 
			$_SESSION['GRUPC_Nombre'] = $nombre_grupo;
			$lista_muro               = $this->oDAdministrador->leer_mensajes_muro($grupo);
			require_once "../vista/muro_de_grupo_administrador.php";			
		}
	}	

	public function ingreso_administrador($txtUsuario,$txtPassword){
            $oDAdministrador1 = new DAdministrador();
            $rs1              = $oDAdministrador1->ingreso_administrador($txtUsuario,$txtPassword);
            if(count($rs1)== 1){
		$usuario                  = $rs1[0]['USUAP_Codigo'];
                $flagBienvenida           = $rs1[0]['USUAC_FlagBienvenida'];
                $_SESSION['USUAP_Codigo'] = $rs1[0]["USUAP_Codigo"];
	        setcookie("usNick",$_COOKIE["usNick"],time()+7776000);
                setcookie("usPass",$_COOKIE["usPass"],time()+7776000);
                if($flagBienvenida==0){
                    $oDAdministrador2 = new DAdministrador();
                    $rs2              = $oDAdministrador2->confirmar_bienvenida($usuario);
                    $resultado        = 1;//Muestra popup de bienvenido por primera vez
                }
                elseif($flagBienvenida==1){
                    $resultado = 2;//Ingresa de frente a su muro
                }
            }
            elseif(count($rs1)==0){
                //Destruimos las cookies.
                setcookie("usNick","x",time()-3600); 
                setcookie("usPass","x",time()-3600);
                //Destruimos las sessiones
                session_destroy();
                $resultado      = 3;//Usuario o clave no valido
            }
            else{
                $resultado      = 4;//El usuario es administrador de 2 grupos
            }
            return $resultado;
	}

	public function confirmar_correo($email,$subject,$mensaje){
		$oSendMail = new SendMail();
		$resultado = $oSendMail->enviar($email,$subject,$mensaje);
		return $resultado;
	}

    public function verificar_confirmar_registro($id){
        $resultado = $this->oDAdministrador->confirmar_registro($id);
        header("location:../vista/index.php?accion=ingresa_a_tu_cuenta");
        //Posible envio de correo de confirmacion
    }
	
	public function enviar_invitaciones($arrayNombre,$arrayEmail,$mensaje){
        $arrayNombre       = $this->elimina_vacios_array($arrayNombre);
        $arrayEmail        = $this->elimina_vacios_array($arrayEmail);
		$usuario           = $_SESSION['USUAP_Codigo'];
		$grupo             = $_SESSION['GRUPP_Codigo'];
		//Datos del grupo
		$datos_grupo       = $this->recuperar_grupo($grupo);
		$nombre_grupo      = $datos_grupo[0]['GRUPC_Nombre'];
        //Datos usuario
        $datos_usuario     = $this->oDAdministrador->datos_usuario($usuario);
        $nombre_usuario    = $datos_usuario[0]['USUAC_Nombres'];
		for($i=0;$i<count($arrayNombre);$i++){
			$oDAdministrador1 = new DAdministrador();
			$oDAdministrador2 = new DAdministrador();
			$oDAdministrador3 = new DAdministrador();
			$nombre_amigo     = $arrayNombre[$i];
			$email            = $arrayEmail[$i];
			$mensaje          = $nombre_amigo.":".$mensaje;
			$clave            = 1000*rand();
		    //Enviar mensaje de confirmacion de registro
		    $contenido = "";
		    $fp      = fopen('mailing_de_invitacion.php',"r");
		    while ($linea= fgets($fp,1024))
		    {
			  $linea = str_replace("?AMIGO",$nombre_amigo,$linea);
			  $linea = str_replace("?USUARIO",$nombre_usuario,$linea);
			  $linea = str_replace("?GRUPO",$nombre_grupo,$linea);
			  $linea = str_replace("?CORREO",$email,$linea);
			  $linea = str_replace("?CLAVE",$clave,$linea);
			  $contenido .= $linea;
		    }
			$contenido.= "<br>".$mensaje;
			$enviado     = $this->confirmar_correo($email,'Invitacion al juego amigo secreto',$contenido);
			//Crea usuario en la tabla usuario con flag administrador en 0.
			$usuario_new = $oDAdministrador1->ingresar_datos_personales($email,$clave,$nombre_amigo,"","",'1',"","","0","","0","0",'0');
			//Confirmo el nuevo usuario
			$oDAdministrador2->confirmar_registro(md5($usuario_new));
			//Agregar el usuario al grupo, con el flag Administrador en 0 y con flag confirmar en 0
			$oDAdministrador3->agregar_usuario_a_grupo($usuario_new,$grupo);
		}
		return true;
	}	

        public function elimina_vacios_array($miArray){
            $resultado = array();
            foreach($miArray as $indice=>$valor){
                if($valor!=''){
                    array_push($resultado, $valor);
                }
            }
            return $resultado;
        }

	public function activa_cuenta_miembro($txtUsuario,$txtClave){
		$usuario  = $this->oDAdministrador->recuperar_miembro($txtUsuario,$txtClave);
		$oDAdmin  = new DAdministrador();
		$resultado = $oDAdmin->activa_cuenta_miembro($usuario,$grupo);
		return $resultado;	
	}
	
	/******************************* GRUPOS **************************************/
	public function listar_grupos($usuario,$flagAdministrador){
		$oDAdministrador = new DAdministrador();
		$resultado = $oDAdministrador->listar_grupos($usuario,$flagAdministrador);
		return $resultado;
	}	
	
	public function crear_grupo($nombre,$cantidad,$tipo,$nombreTipo,$foto){
		$oDAdministrador1 = new DAdministrador();
		$oDAdministrador2 = new DAdministrador();
                $cantidad         = $cantidad + 1;
		//Crea un grupo
		$grupo = $oDAdministrador1->crear_grupo($nombre,$cantidad,$tipo,$nombreTipo,$foto);
		$_SESSION['GRUPP_Codigo'] = $grupo;
		$usuario                  = $_SESSION['USUAP_Codigo'];
		//Crear registro en usuario grupo.
		$usuariogrupo = $oDAdministrador2->agregar_administrador_a_grupo($usuario,$grupo);
		return true;
	}	
	
	public function recuperar_grupo($grupo){
		$resultado=$this->oDAdministrador->datos_grupo($grupo);
		return $resultado;
	}
	
	public function realizar_sorteo(){
		$usuario = $_SESSION['USUAP_Codigo'];
		$grupo   = $_SESSION['GRUPP_Codigo'];
		$lista_usuarios = $this->oDAdministrador->listar_usuarios_por_grupo($grupo);
		$cantidad = count($lista_usuarios);
		//Ordeno la matriz aleatoriamenmte
		
		//Creo los grupos de parejas
		for($i=0;$i<$cantidad;$i++){
			$j=($i+1<$cantidad)?$i+1:0;
			$amigo1=$lista_usuarios[$i]['USUAP_Codigo'];
			$amigo2=$lista_usuarios[$j]['USUAP_Codigo'];
			$parejas_amigos[$i]=array($amigo1,$amigo2);
		}
		//Recorro el array de parejas y actualizo en la base de datos.
		foreach($parejas_amigos as $indice=>$arrayParejas){
			$amigo1 = $parejas_amigos[$indice][0];
			$amigo2 = $parejas_amigos[$indice][1];
			$oAdministrador1 = new DAdministrador();
			$oAdministrador1->realizar_sorteo($grupo,$amigo1,$amigo2);
		}
		return true;
		//print "<pre>";
	}
	
	/*******************************MURO DE GRUPO**************************************/
	public function escribir_mensaje_muro($mensaje){
		$grupo          = $_SESSION['GRUPP_Codigo'];
		$usuario        = $_SESSION['USUAP_Codigo'];
		$nombre_usuario = $_SESSION['USUAC_Nombres'];
		$resultado=$this->oDAdministrador->escribir_mensaje_muro($usuario,$grupo,$mensaje);
		return $resultado;	
	}

	public function eliminar_mensaje_muro($idmensaje){
	
	}		
	
	public function leer_comentarios_muro($idmensaje){
		$resultado=$this->oDAdministrador->leer_comentarios_muro($idmensaje,$comentario);
		return $resultado;			
	}
	
	public function agregar_comentario($idmensaje,$comentario){
		$usuario = $_SESSION['USUAP_Codigo'];
		$resultado=$this->oDAdministrador->agregar_comentario($idmensaje,$comentario,$usuario);
		return $resultado;		
	}
	
	public function eliminar_comentario($idcomentario){
		
	}
		
	/******************************* BUZON DE GRUPO **************************************/	
	public function leer_mensajes_buzon($grupo,$usuario,$amigo){
		$resultado=$this->oDAdministrador->leer_mensajes_buzon($grupo,$usuario,$amigo);
		return $resultado;	
	}
	
	public function escribir_mensaje_amigo($mensaje){
		$grupo   = $_SESSION['GRUPP_Codigo'];
		$usuario = $_SESSION['USUAP_Codigo'];
		$amigo   = $_SESSION['USUAP_Amigo'];
		$resultado=$this->oDAdministrador->escribir_mensaje_amigo($usuario,$amigo,$grupo,$mensaje);
		return $resultado;		
	}
	
	public function listar_tipo_documentos(){
		$oDPersona=new DPersona();
		$resultado=$oDPersona->listar_tipo_documentos();
		return $resultado;
	}
	
	public function datos_usuario($codigo){
		$oDAdministrador=new DAdministrador();
		$resultado=$oDAdministrador->datos_usuario($codigo);
		return $resultado;	
	}
}
?>

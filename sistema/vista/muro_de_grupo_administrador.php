<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
   	<script type="text/javascript" src="../../js/prototype.js"></script>
	<script type="text/javascript" src="../../js/amigosecreto.js"></script>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Juaga al amigo secreto con Paginas Amarillas
    </title>
    <link href="css/estructura.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script> 
    <script>  DD_belatedPNG.fix('.fix-png'); </script>
    <![endif]-->  
  </head>
  <body>
    <div id="contenedor">	
      <div class="logo">        	
        <a href="index.html"><img src="images/logo-amigosecreto.png" alt="Juega al amigo secreto con Paginas Amarillas" width="453" height="122" border="0" class="fix-png" /></a>
      </div>    
      <div id="case_publi"> 
      </div>  
      <div id="case_head">    
        <div class="tools_head nw">| <a href="#">¿Cómo Jugar?</a> | <a href="#" onclick="link('cerrar_sesion');">Cerrar Sesión</a> |</div>  
        <div class="case_log">
        	<div class="img_log"><a href="#"><img src="<?php echo $foto_usuario;?>" alt="Usuario Logueado" width="50" height="50" border="0" /></a></div>
            <div class="name_user">HOLA:<br /><?php echo $nombre_usuario;?></div>
        </div>
        <div class="btn_loguin">
       	  <input name="" type="button" value="" class="mi_cuenta" /><input name="" type="button" value="" class="mis_grupos" />
            <!--<input
                type="image"
                src="image.jpg"
                onmouseover="this.src = 'transpartent.gif';"
                onmouseout="this.src = 'image.jpg';"
            />-->
        </div>
      </div>  
      <div id="case_body_reg">  
      	<div class="item_body001 fix-png"></div>
        <div class="item_body003 fix-png"></div>
        
   	  <div id="menu_left">   
        	<a href="#" onclick="link('muro_de_grupo');" class="m1 activ"><img src="images/muro-del-grupo.png" width="180" height="16" alt="Muro del Grupo" class="fix-png" /></a>
            <a href="#" onclick="link('buzon_navideno');" class="m1"><img src="images/buzon-navideno.png" width="180" height="21" alt="Buzón Navideño" class="fix-png" /></a>
            <a href="#" onclick="link('lista_de_deseos');" class="m1"><img src="images/lista-deseos.png" alt="Lista de Deseos" width="180" height="16" border="0" class="fix-png" /></a>
            <a href="#" onclick="link('soy_amigo_secreto_de');" class="m2"><img src="images/soy-amigo.png" alt="Soy amigo secreto de..." width="180" height="34" border="0" class="fix-png" /></a> 
            <a href="#" onclick="link('catalogo_por_categoria');" class="m2"><img src="images/catalogo-de.png" alt="Catálogo de regalos" width="180" height="39" border="0" class="fix-png" /></a>       
	</div>
        <div class="stream">
       	  <div class="item001"></div>
          <div class="item002">
          	<div id="box_user">
       	    	<img src="images/esquina.gif" width="36" height="36" class="sq" />
                <div class="img_login"><a href="#"><img src="images/img-demo0004.jpg" width="50" height="50" border="0" /></a></div>
                <div class="data_login">
                	<ul class="data">
                    	<li><img src="images/muro.gif" width="64" height="18" />&nbsp;<span><?php echo $nombre_grupo;?></span></li>
                        <li>Jugando desde: <strong><?php echo $fechar_sorteo;?></strong></li>
                        <li>Jugadores: <strong><?php echo $numero_jugadores;?></strong></li>
                        <li>Fecha entrega regalos: <strong><?php echo $fecha_entrega_regalos;?></strong></li>
                        <li>Puesto en ranking: <strong><?php echo $puesto_ranking;?></strong></li>
                    </ul>
                </div>
                <div class="btn_editargrupo"><a href="#" onclick="link('buzon_del_jefe');"></a></div>
            </div>
            <div id="case_publi_inter">
            </div>
			<form name='frmMuro' id="frmMuro">
            <ul class="case_msm">
           	  <li class="vineta">Déjale un mensaje a tu Amigo Secreto</li>
                <li><span><textarea name="txtMensaje" id='txtMensaje' cols="" rows=""></textarea></span></li>
              <li class="case_btnenviar"><a href="#" onclick="escribir_mensaje_muro();"  class="btn_enviar"></a></li>
            </ul>
			</form>
            <ul id="box_comentarios">
				<?php
				foreach($lista_muro as $fila=>$mensajes){
					$codigo          = $mensajes['MENSP_Codigo'];
					$usuario         = $mensajes['USUAP_Codigo'];
					$mensaje         = $mensajes['MENSC_Descripcion'];
					$flagComentario  = $mensajes['MENSC_FlagComentario'];
					$oLAdministrador = new LAdministrador();
					$datos_usuario   = $oLAdministrador->datos_usuario($usuario);
					$foto_persona    = $datos_usuario[0]['USUAC_Foto']==''?'images/Usuario_img.jpg':"images/".$datos_usuario[0]['USUAC_Foto'];
					$nombre_persona  = $datos_usuario[0]['USUAC_Nombres'];
				?>			
				  <li class="item_box linbot">
						<div class="case_userimg">
						<a href="#" class="imgb"><img src="<?php echo $foto_persona;?>" width="49" height="49" alt="user" /></a>
						<div class="msm">
								<strong><?php echo $nombre_persona;?>:</strong><br />
								<span><?php echo $mensaje;?></span>
								<div align="right">
								| <a href="#" onclick="$('txtComentario').value='';$('divComentario').style.display='';$('idmensaje').value=<?php echo $codigo;?>;">Comentar</a> |
								<?php
								if($flagComentario=='1'){
								?>	
									| <a href="#" onclick="eliminar(<?php echo $codigo;?>);">Eliminar</a> |
								<?php
								}
								?>							
								</div>
						  </div>
						</div>
						<div id='divComentario' style="display:none;position: absolute;color: #000000;background:#ffffff;border:#000000 1px solid;width:200px;">
							<form name='frmComentario' id='frmComentario'>
							&nbsp;Comentario:<br>
							&nbsp;&nbsp;&nbsp;<textarea id='txtComentario' name='txtComentario'></textarea><br>
							<input type='hidden' name='idmensaje' id='idmensaje'>
							&nbsp;&nbsp;&nbsp;&nbsp;<input align='center' type='button' value='Grabar' onclick='agregar_comentario();'>
							</form>
						</div>						
						<!---->
						<?php
						$oAdmin1=new DAdministrador();
						$lista_comentario=$oAdmin1->leer_comentarios_muro($codigo);
						foreach($lista_comentario as $fila2=>$arrayComentario){
							$idcomentario = $arrayComentario['COMEP_Codigo'];
							$comentario   = $arrayComentario['COMEC_Descripcion'];
							$usuario      = $arrayComentario['USUAP_Codigo'];
							$oAdmin2      = new DAdministrador();
							$datos_usuario2  = $oAdmin2->datos_usuario($usuario);
							$nombre_usuario2  = $datos_usuario2[0]['USUAC_Nombres'];
							$foto_usuario2    = ($datos_usuario2[0]['USUAC_Foto']=='')?'images/Usuario_img.jpg':"images/".$datos_usuario[0]['USUAC_Foto'];
							
						?>						
						<div class="sub_coment">
						<a href="#" class="imgb"><img src="<?php echo $foto_usuario2;?>" width="49" height="49" alt="user" /></a>
						<div class="msm sub_msm">
								<strong><?php echo $nombre_usuario2;?>:</strong><br />
								<span><?php echo $comentario;?></span>
								<div align="right">
								 | <a href="#">Eliminar</a> |
								</div>
						  </div>
						</div>
						<?php
						}
						?>
						<!---->
				  </li>
			  <?php
			  }
			  ?>
              <li class="link_vmsma"><a href="#">Ver mensajes antiguos</a></li>
            </ul>
          </div>
          <div class="item003"><div class="item_body004 fix-png"></div></div>
       </div>
      </div>  
      <div class="footer">  	
        <a href="#" class="link_f01">
          <img src="images/logo-paginas-amarillas.gif" width="176" height="40" alt="Paginas Amarillas" /></a>    
        <a href="#" class="link_f02">
          <img src="images/ico-yell.gif" width="68" height="40" alt="Yell" /></a>  
      </div>  
      <div class="tools">  	
        <div class="left">| 
          <a href="#">PORTADA</a> | <a href="#">¿COMO JUGAR?</a> | <a href="#">CATALOGO</a> |
        </div>    
        <div class="right">Copyright © 2010 Amigo Secreto - PaginasAmarillas.pe
        </div>     
      </div>
    </div>
  </body>
</html>
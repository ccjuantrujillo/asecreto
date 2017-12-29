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
        <a href="#">            
          <img src="images/logo-amigosecreto.png" alt="Juega al amigo secreto con Paginas Amarillas" width="453" height="122" border="0" class="fix-png" /></a>
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
      <div id="case_body_mg">  
      	<div class="item_body001 fix-png"></div>
        <div class="item_body002 fix-png"></div>
        <div class="item_body003 fix-png"></div>
        <div class="item_body004 fix-png" style="bottom:30px"></div>
   	  <div id="menu_left">   
        	<a href="#" onclick="link('muro_de_grupo');" class="m1"><img src="images/muro-del-grupo.png" width="180" height="16" alt="Muro del Grupo" class="fix-png" /></a>
            <a href="#" onclick="link('buzon_navideno');" class="m1 activ"><img src="images/buzon-navideno.png" alt="Buzón Navideño" width="180" height="21" border="0" class="fix-png" /></a>
            <a href="#" onclick="link('lista_de_deseos');" class="m1"><img src="images/lista-deseos.png" alt="Lista de Deseos" width="180" height="16" border="0" class="fix-png" /></a>
            <a href="#" onclick="link('soy_amigo_secreto_de');" class="m2"><img src="images/soy-amigo.png" alt="Soy amigo secreto de..." width="180" height="34" border="0" class="fix-png" /></a> 
            <a href="#" onclick="link('catalogo_por_categoria');" class="m2"><img src="images/catalogo-de.png" width="180" height="39" alt="Catálogo de regalos" class="fix-png" /></a>       </div>
        <div class="stream">
       	  <div class="item001"></div>
          <div class="item002">
       		<div id="case_publi_inter" class="nmargin01"></div>
       			<div class="name_grup">Grupo: <span><?php echo $nombre_grupo;?></span></div>
                <div class="tit_section"><img src="images/buzon-navideno.gif" width="203" height="27" alt="Buzón Navideño" /></div>
            <div class="msm_friend">Mensajes que te envia tu amigo secreto</div>
				<?php
				foreach($listar_mensajes as $indice=>$arrayMensaje){
					$fecha_mensaje  = $arrayMensaje['MENSC_FechaRegistro'];
					$titulo_mensaje = $arrayMensaje['MENSC_Descripcion'];
					$cuerpo_mensaje = $arrayMensaje['MENSC_Descripcion'];
				?>
                <div class="item_buzon">
                	<img src="images/esquina.gif" width="36" height="36" class="sq" />
                  <div class="img_item_buz nbor"><a href="#"><img src="images/img-005.gif" width="75" height="66" border="0" /></a></div>
                  <div class="msm_item_buz">
                    	<div class="date_msm">Tú amigo secreto <?php echo $fecha_mensaje;?></div>
                        <strong>“<?php echo $titulo_mensaje;?>”</strong><br />
                      	<div><?php echo substr($cuerpo_mensaje,0,150);?>...</div>
                        <div class="tools_buz"><a href="#">Leer más</a> | <a href="#">Borrar</a></div>
                  </div>
                </div>
				<?php
				}
				?>
                <div class="item_buzon">
                	<img src="images/esquina.gif" width="36" height="36" class="sq" />
                    <div class="img_item_buz"><a href="#"><img src="images/img-001.jpg" width="75" height="66" border="0" /></a></div>
                  <div class="msm_item_buz">
                    	<div class="date_msm">Tú amigo secreto 12dic - 10am.</div>
                        <strong>“Hola hoy te deje un ragalito”</strong><br />
                      	<div>Hola espero que te haya gustado el dulce que te deje en tu escritorio...</div>
                        <div class="tools_buz"><a href="#">Leer más</a> | <a href="#">Borrar</a></div>
                  </div>
                </div>
                <div class="item_buzon">
                	<img src="images/esquina.gif" width="36" height="36" class="sq" />
                    <div class="img_item_buz"><a href="#"><img src="images/img-001.jpg" width="75" height="66" border="0" /></a></div>
                  <div class="msm_item_buz">
                    	<div class="date_msm">Tú amigo secreto 12dic - 10am.</div>
                        <strong>“Hola hoy te deje un ragalito”</strong><br />
                      	<div>Hola espero que te haya gustado el dulce que te deje en tu escritorio...</div>
                        <div class="tools_buz"><a href="#">Leer más</a> | <a href="#">Borrar</a></div>
                  </div>
                </div>
                <div class="item_buzon">
                	<img src="images/esquina.gif" width="36" height="36" class="sq" />
                  <div class="img_item_buz nbor"><a href="#"><img src="images/img-005.gif" width="75" height="66" border="0" /></a></div>
                  <div class="msm_item_buz">
                    	<div class="date_msm">Tú amigo secreto 12dic - 10am.</div>
                        <strong>“Hola hoy te deje un ragalito”</strong><br />
                      	<div>Hola espero que te haya gustado el dulce que te deje en tu escritorio...</div>
                        <div class="tools_buz"><a href="#">Leer más</a> | <a href="#">Borrar</a></div>
                  </div>
                </div>
                <div class="item_buzon">
                	<img src="images/esquina.gif" width="36" height="36" class="sq" />
                    <div class="img_item_buz nbor"><a href="#"><img src="images/img-005.gif" width="75" height="66" border="0" /></a></div>
                  <div class="msm_item_buz">
                    	<div class="date_msm">Tú amigo secreto 12dic - 10am.</div>
                        <strong>“Hola hoy te deje un ragalito”</strong><br />
                      	<div>Hola espero que te haya gustado el dulce que te deje en tu escritorio...</div>
                        <div class="tools_buz"><a href="#">Leer más</a> | <a href="#">Borrar</a></div>
                  </div>
                </div>
                <div class="box_paginado"><a href="#">Página <span>1</span> de <span>6</span> &gt;&gt;</a></div>
		  </div>
          <div class="item003"></div>
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
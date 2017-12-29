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
        <div class="tools_head nw">| <a href="#">¿Cómo Jugar?</a> | <a href="#"  onclick="link('cerrar_sesion');">Cerrar Sesión</a> |</div>  
        <div class="case_log">
        	<div class="img_log"><a href="#"><img src="images/Usuario_img.jpg" alt="Usuario Logueado" width="50" height="50" border="0" /></a></div>
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
	  <?php
	  $link_ingresa_datos_grupo = $flagSorteado==1?"this.href=null":"link('ingresa_datos_grupo');"; 
	  $link_invitar_amigos      = $flagSorteado==1?"this.href=null":"link('invitar_amigos');"; 
	  ?>	  
      <div id="case_body_small">  
      	<div class="item_body001 fix-png"></div>
        <div class="item006"><img src="images/duen-001.png" width="167" height="176" class="fix-png" /></div>
        <div id="menu_left">   
        <a href="#" class="m1" onclick="<?php echo $link_ingresa_datos_grupo;?>"><img src="images/crear-grupo.png" alt="Crear Grupo" border="0" class="fix-png" /></a>
        <a href="#" class="m2" onclick="<?php echo $link_invitar_amigos;?>"><img src="images/enviar-intitacion.png" alt="Enviar invitación" border="0" class="fix-png" /></a>
        <a href="#" class="m1 activ" onclick="link('sortear');"><img src="images/sortear-on.png" alt="Sortear" border="0" class="fix-png" /></a>
        <a href="#" class="m2" onclick="link('fecha_de_entrega');"><img src="images/fecha-de-entrega-on.png" alt="Fecha de entrega de regalos" border="0" class="fix-png" /></a> 
        <a href="#" class="m2" onclick="link('panel_de_participantes');"><img src="images/panel-de-participantes-on.png" alt="Panel de participante" border="0" class="fix-png" /></a>
        <a href="#" class="m2" onclick="link('buzon_del_jefe');"><img src="images/buzon-del-jefe.png"alt="Buzón del jefe" width="176" height="39" border="0" class="fix-png" /></a>
       </div>
        <div class="stream">
       	  <div class="item001"></div>
          <div class="item002">
          <div class="name_grup ">Grupo: <span><?php echo $nombre_grupo;?></span></div>
          <div class="tit_section adjust" align="center"><img src="images/el-sorteo-puede-ser-realizado.gif" /></div>
          <div class="ref">Participaran sólo los integrantes que han aceptado las invitaciones.<br />
Puedes ver quiénes aceptaron en el Panel de participantes.</div>
			<div class="msm_sorteo">
            	<div class="case">
                	<img src="images/esquina.gif" width="36" height="36" class="sq" />
                    <img src="images/realizar-el-sorteo.gif" />
                    <span class="data_fe">
                    Grupo: <?php echo $nombre_grupo;?><br />
                    Creado: <?php echo $fecha_creacion;?><br />
                    Participantes: <?php echo $cantidad;?><br />
                    <br />
                    Grupo: <?php echo $nombre_grupo;?>
                    </span>
                    <a href="#" class="btn_sortear"  onclick="realizar_sorteo();"></a>
                </div>
            </div>
	   		<div class="case_req">
            	<strong>IMPORTANTE</strong><br />
                    1. El sorteo solo podrá realizarse una vez.<br /> 
                    2. Una vez realizado el sorteo no podrás invitar más amigos
                        al grupo.<br />
                    3. Hecho el sorteo podrán comenzar a jugar.<br />
            </div>
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
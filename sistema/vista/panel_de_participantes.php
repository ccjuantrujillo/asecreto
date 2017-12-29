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
	  $link_sortear             = $flagSorteado==1?"this.href=null":"link('sortear');"; 	  
	  ?>	  
      <div id="case_body_small">  
      	<div class="item_body001 fix-png"></div>
        <div class="item006"><img src="images/duen-001.png" width="167" height="176" class="fix-png" /></div>
        <div id="menu_left">   
            <a href="#" class="m1" onclick="<?php echo $link_ingresa_datos_grupo;?>"><img src="images/crear-grupo.png" alt="Crear grupo" border="0" class="fix-png" /></a>
            <a href="#" class="m2" onclick="<?php echo $link_invitar_amigos;?>"><img src="images/enviar-intitacion.png" alt="Enviar invitación" border="0" class="fix-png" /></a>
            <a href="#" class="m1" onclick="<?php echo $link_sortear;?>"><img src="images/sortear-on.png" alt="Sortear" border="0" class="fix-png" /></a>
            <a href="#" class="m2" onclick="link('fecha_de_entrega');"><img src="images/fecha-de-entrega-on.png" alt="Fecha de entrega de regalos" border="0" class="fix-png" /></a> 
            <a href="#" class="m2 activ" onclick="link('panel_de_participantes');"><img src="images/panel-de-participantes-on.png" alt="Panel de participantes" border="0" class="fix-png" /></a>
            <a href="#" class="m2" onclick="link('buzon_del_jefe');"><img src="images/buzon-del-jefe.png"alt="Buzón del jefe" width="176" height="39" border="0" class="fix-png" /></a>       </div>
        <div class="stream">
       	  <div class="item001"></div>
          <div class="item002">
          <div class="name_grup ">Grupo: <span><?php echo $nombre_grupo;?></span></div>
          <div class="tit_section adjust" ><img src="images/panel-de-participantes.gif" /></div>
          <table width="598" border="0" cellspacing="0" cellpadding="0" class="case_part">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="sec01">Total: <strong>82 puntos</strong></td>
              </tr>
              <tr>
                <td height="4" class="sec02"></td>
              </tr>
              <tr>
                <td class="sec03">
                	<div class="number">Nº</div>
                    <div class="name_par">Nombre del participante</div>
                    <div class="change">Eliminar participante</div>
                </td>
              </tr>
              <tr>
                <td class="sec04">
               	  <div class="dnumber">01</div>
                    <div class="dname_par">Juan Miguel López </div>
                  <div class="dchange btnbnp">
                 
	                    <a href="#" class="btneliminar fix-png"></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="sec05">
                	<div class="dnumber">02</div>
                    <div class="dname_par">Arturo Sánchez Roca</div>
                    <div class="dchange btnbnp">
             
	                    <a href="#" class="btneliminar fix-png"></a>
                    </div>
                </td>
              </tr>
              <tr>
                <td class="sec04">
                	<div class="dnumber">03</div>
                    <div class="dname_par">Luis  Antonio  Lee</div>
                    <div class="dchange btnbnp">
                  	
	                    <a href="#" class="btneliminar fix-png"></a>
                        </div>
                </td>
              </tr>
              <tr>
                <td class="sec05">
                	<div class="dnumber">04</div>
                    <div class="dname_par">Mario  Valverde Lee</div>
                    <div class="dchange btnbnp">
               
	                    <a href="#" class="btneliminar fix-png"></a></div>
                </td>
              </tr>
              <tr>
                <td class="sec04">
                	<div class="dnumber">05</div>
                    <div class="dname_par">Carlos Alberto Tejada</div>
                    <div class="dchange btnbnp">
                  	
	                    <a href="#" class="btneliminar fix-png"></a></div>
                </td>
              </tr>
              <tr>
                <td class="sec05">
                	<div class="dnumber">06</div>
                    <div class="dname_par">Carlos Alberto Tejada</div>
                    <div class="dchange btnbnp">
                 
	                    <a href="#" class="btneliminar fix-png"></a></div>
                </td>
              </tr>
              <tr>
                <td class="sec04">
                	<div class="dnumber">07</div>
                    <div class="dname_par">Arturo Sánchez Roca</div>
                    <div class="dchange btnbnp">
                  		
	                    <a href="#" class="btneliminar fix-png"></a></div>
                </td>
              </tr>
              <tr>
                <td height="4" class="sec02"></td>
              </tr>
              <tr>
                <td class="sec01"></td>
              </tr>
            </table>

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
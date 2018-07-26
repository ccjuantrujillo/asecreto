<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <script type="text/javascript" src="../../js/prototype.js"></script>
	<script type="text/javascript" src="../../js/amigosecreto.js"></script>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Juaga al amigo secreto con Paginas Amarillas
    </title>
    <link href="css/estructura.css" rel="stylesheet" type="text/css" />
    
<script type="text/javascript">
// definiciones basicas
OCULTO="none";
VISIBLE="block";
	
function mostrar(blo) {
  document.getElementById(blo).style.display=VISIBLE;
  document.getElementById('ver_off').style.display=VISIBLE;
  document.getElementById('ver_on').style.display=OCULTO;
}
 
function ocultar(blo) {
  document.getElementById(blo).style.display=OCULTO;
  document.getElementById('ver_off').style.display=OCULTO;
  document.getElementById('ver_on').style.display=VISIBLE;
}
</script>
    
    
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
            <a href="#" class="m1" onclick="<?php echo $link_sortear;?>"><img src="images/sortear-on.png" alt="Sortear"border="0" class="fix-png" /></a>
            <a href="#" class="m2" onclick="link('fecha_de_entrega');"><img src="images/fecha-de-entrega-on.png" alt="Fecha de entrega de regalos" width="200" height="39" border="0" class="fix-png" /></a> 
            <a href="#" class="m2" onclick="link('panel_de_participantes');"><img src="images/panel-de-participantes-on.png" alt="Panel de participantes" border="0" class="fix-png" /></a>
            <a href="#" class="m2 activ" onclick="link('buzon_del_jefe');"><img src="images/buzon-del-jefe.png" alt="Buzón del jefe" class="fix-png" /></a>       </div>
        <div class="stream">
       	  <div class="item001"></div>
          <div class="item002">
          <div class="name_grup">Grupo: <span><?php echo $nombre_grupo;?></span></div>
          <div class="tit_section adjust bor" ><img src="images/buzon-del-grupo.gif" /></div>
          <div class="msm_bzg">
       		<div class="name_grup">Enviar un mensaje a todo el grupo:</div>
                <div class="msm_group"><textarea name="" cols="" rows=""></textarea></div>
                <div class="rest">(máximo 200 caracteres)</div>
                <div class="btn_emg"><a href="#"></a></div>
          </div>
			<div class="tit_section adjust bor" ><img src="images/mensajes-recibidos.gif" /></div>
            <div class="tools_msm">
              <label><input type="checkbox" name="checkbox" id="checkbox" /></label>
              <span>Seleccionar todos</span>
              <a href="#" class="btn_del fix-png"></a>
            </div>
            <ul class="items">
            	<li class="item_msm">
                	<img src="images/esquina.gif" width="36" height="36" class="sq" />
                	<label><input type="checkbox" name="checkbox2" id="checkbox2" /></label>
                    <div class="img_msm nbor"><a href="#"><img src="images/img-005.gif" border="0" /></a></div>
                    <div class="stream_msm">
                   	<span> CARTOON 01</span><br />
                    <strong>“Prueba de mensaje al jefe de grupo”</strong>
                    <p>Hola espero que te haya gustado el dulce que te deje en tu escritorio
te haya gustado el dulce que te deje en tu escritorioHola espero 
que te haya gustado el dulce que te deje en tu escritorio
te haya gustado el dulce que te deje en tu escritorio..Hola espero que
 te haya gustado el dulce que te deje en tu escritorio
te haya gustado el dulce que te deje en tu escritorio lkaj 
                        <div id="bloque" style="display: none">
                        sñasdñflkasdj ñlfaskdjf añslkdj añlsdkjfa lsdka sdkjfa ñslkdjfa ñsdkja ñsldkja ñslkdjf añslkdjf añslkdjfañ slkdjfñ alksjdfñlaksjdfñ laksjdf aslkdjf ñalskdjf añslkdjf asñldkfj añslkdjañs lkdjfasñl kdjf asñldk jfañslkdjf añslk dfjañlsdkfjñaslkd jfañslkd fjñaslkdjfñaskjdfñlaskd f
                        </div>
                </p>
						
                        <div id="ver_on" style="text-align:right">
                        <a href="#" onclick="mostrar('bloque')">
                         leer más</a>
                         </div>
                        <div id="ver_off" style="display: none; text-align:right" >
                        <a href="#" onclick="ocultar('bloque')">
                         Cerrar</a>
                        </div>
                  </div>
                </li>
                <li class="item_msm">
                	<img src="images/esquina.gif" width="36" height="36" class="sq" />
                	<label><input type="checkbox" name="checkbox2" id="checkbox2" /></label>
                    <div class="img_msm"><a href="#"><img src="images/img-001.jpg" border="0" /></a></div>
                    <div class="stream_msm">
                   	<span> CARTOON 01</span><br />
                    <strong>“Prueba de mensaje al jefe de grupo”</strong>
                    <p>Hola espero que te haya gustado el dulce que te deje en tu escritorio
te haya gustado el dulce que te deje en tu escritorioHola espero 
que te haya gustado el dulce que te deje en tu escritorio
te haya gustado el dulce que te deje en tu escritorio..Hola espero que
 te haya gustado el dulce que te deje en tu escritorio
te haya gustado el dulce que te deje en tu escritorio lkaj 
                      <div id="bloque" style="display: none">
                        sñasdñflkasdj ñlfaskdjf añslkdj añlsdkjfa lsdka sdkjfa ñslkdjfa ñsdkja ñsldkja ñslkdjf añslkdjf añslkdjfañ slkdjfñ alksjdfñlaksjdfñ laksjdf aslkdjf ñalskdjf añslkdjf asñldkfj añslkdjañs lkdjfasñl kdjf asñldk jfañslkdjf añslk dfjañlsdkfjñaslkd jfañslkd fjñaslkdjfñaskjdfñlaskd f
                      </div>
                </p>
						
                        <div id="ver_on" style="text-align:right">
                        <a href="#" onclick="mostrar('bloque')">
                         leer más</a>
                      </div>
                        <div id="ver_off" style="display: none; text-align:right" >
                        <a href="#" onclick="ocultar('bloque')">
                         Cerrar</a>
                        </div>
                  </div>
              </li>
                <li class="item_msm">
                	<img src="images/esquina.gif" width="36" height="36" class="sq" />
                	<label><input type="checkbox" name="checkbox2" id="checkbox2" /></label>
                    <div class="img_msm nbor"><a href="#"><img src="images/img-005.gif" border="0" /></a></div>
                    <div class="stream_msm">
                   	<span> CARTOON 01</span><br />
                    <strong>“Prueba de mensaje al jefe de grupo”</strong>
                    <p>Hola espero que te haya gustado el dulce que te deje en tu escritorio
te haya gustado el dulce que te deje en tu escritorioHola espero 
que te haya gustado el dulce que te deje en tu escritorio
te haya gustado el dulce que te deje en tu escritorio..Hola espero que
 te haya gustado el dulce que te deje en tu escritorio
te haya gustado el dulce que te deje en tu escritorio lkaj 
                        <div id="bloque" style="display: none">
                        sñasdñflkasdj ñlfaskdjf añslkdj añlsdkjfa lsdka sdkjfa ñslkdjfa ñsdkja ñsldkja ñslkdjf añslkdjf añslkdjfañ slkdjfñ alksjdfñlaksjdfñ laksjdf aslkdjf ñalskdjf añslkdjf asñldkfj añslkdjañs lkdjfasñl kdjf asñldk jfañslkdjf añslk dfjañlsdkfjñaslkd jfañslkd fjñaslkdjfñaskjdfñlaskd f
                        </div>
                </p>
						
                        <div id="ver_on" style="text-align:right">
                        <a href="#" onclick="mostrar('bloque')">
                         leer más</a>
                         </div>
                        <div id="ver_off" style="display: none; text-align:right" >
                        <a href="#" onclick="ocultar('bloque')">
                         Cerrar</a>
                        </div>
                  </div>
                </li>
                <li class="item_msm">
                	<img src="images/esquina.gif" width="36" height="36" class="sq" />
                	<label><input type="checkbox" name="checkbox2" id="checkbox2" /></label>
                    <div class="img_msm"><a href="#"><img src="images/img-001.jpg" border="0" /></a></div>
                    <div class="stream_msm">
                   	<span> CARTOON 01</span><br />
                    <strong>“Prueba de mensaje al jefe de grupo”</strong>
                    <p>Hola espero que te haya gustado el dulce que te deje en tu escritorio
te haya gustado el dulce que te deje en tu escritorioHola espero 
que te haya gustado el dulce que te deje en tu escritorio
te haya gustado el dulce que te deje en tu escritorio..Hola espero que
 te haya gustado el dulce que te deje en tu escritorio
te haya gustado el dulce que te deje en tu escritorio lkaj 
                        <div id="bloque" style="display: none">
                        sñasdñflkasdj ñlfaskdjf añslkdj añlsdkjfa lsdka sdkjfa ñslkdjfa ñsdkja ñsldkja ñslkdjf añslkdjf añslkdjfañ slkdjfñ alksjdfñlaksjdfñ laksjdf aslkdjf ñalskdjf añslkdjf asñldkfj añslkdjañs lkdjfasñl kdjf asñldk jfañslkdjf añslk dfjañlsdkfjñaslkd jfañslkd fjñaslkdjfñaskjdfñlaskd f
                        </div>
                </p>
						
                        <div id="ver_on" style="text-align:right">
                        <a href="#" onclick="mostrar('bloque')">
                         leer más</a>
                         </div>
                        <div id="ver_off" style="display: none; text-align:right" >
                        <a href="#" onclick="ocultar('bloque')">
                         Cerrar</a>
                        </div>
                  </div>
                </li>
            </ul>
            <div class="box_paginado2 ajus_width posbullet"><a href="#">Página <span>1</span> de <span>6</span> &gt;&gt;</a></div>
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
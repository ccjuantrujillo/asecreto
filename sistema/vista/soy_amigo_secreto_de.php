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
      <div id="case_body_sasd">  
      	<div class="item_body001 fix-png"></div>
        <div class="item_body002 fix-png"></div>
        <div class="item_body003 fix-png"></div>
        <div class="item_body004 fix-png" style=" bottom:10px;"></div>
   	  <div id="menu_left">   
        	<a href="#" onclick="link('muro_de_grupo');" class="m1"><img src="images/muro-del-grupo.png" width="180" height="16" alt="Muro del Grupo" class="fix-png" /></a>
            <a href="#" onclick="link('buzon_navideno');" class="m1"><img src="images/buzon-navideno.png" alt="Buzón Navideño" width="180" height="21" border="0" class="fix-png" /></a>
            <a href="#" onclick="link('lista_de_deseos');" class="m1"><img src="images/lista-deseos.png" alt="Lista de Deseos" width="180" height="16" border="0" class="fix-png" /></a>
            <a href="#" onclick="link('soy_amigo_secreto_de');" class="m2 activ"><img src="images/soy-amigo.png" width="180" height="34" alt="Soy amigo secreto de..." class="fix-png" /></a> 
            <a href="#" onclick="link('catalogo_por_categoria');" class="m2"><img src="images/catalogo-de.png" width="180" height="39" alt="Catálogo de regalos" class="fix-png" /></a>       </div>
        <div class="stream">
       	  <div class="item001"></div>
          <div class="item002">
			<div class="name_grup">Grupo: <span><?php echo $nombre_grupo;?></span></div>
                <div class="tit_section adjust"><img src="images/eres-amigo-secreto-de.gif" width="302" height="27" alt="Tu lista de deseo" /><span><?php echo $nombre_amigo;?></span></div>
            <div class="msm_friend adjust">Sus gustos son:</div>
            	<form id='frmMsgAmigo' name='frmMsgAmigo'>
				<div class="aling">
                    <div class="box_msm">
                        <img src="images/esquina.gif" width="36" height="36" class="sq" />
                        Tu amigo secreto no ha escrito nada aún.
                        <div class="tools_msm">| <a href="#">Editar</a> |</div>
                    </div>
                    <div class="tit_msm">Déjale un mensaje en su buzón:</div>
                    	<div class="cas_msmsasd">
                        	<span><textarea name="mensaje" id="mensaje" cols="" rows=""></textarea></span>
                  </div>
                        <div class="box_btn_enviar"><a href="#" onclick="escribir_mensaje_amigo();"></a></div>
                </div>
				</form>
                <div class="tit_section adjust borderb"><img src="images/lo-que-mas-te-gusta.gif" width="254" height="27" alt="Lo que más te gusta" /></div>
                <div class="taeielsr">Tu amigo esta interesado en los siguientes regalos:</div>
                	<ul class="item_lqmtg">
                   	  <li class="element">
                        <div class="ico_zoom"><img src="images/ico-lupa.gif" width="21" height="22" /></div>
                        <div class="case_prod">
                        	<span>Puesto 01</span><br />
                            <div class="prod">
                       	    <img src="images/prod001.jpg" width="158" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum <a href="#"><img src="images/ico-mas.gif" width="10" height="10" border="0" /></a></div>
                                <div class="item" align="right"><a href="#">ver más</a></div>
                                <div class="item" align="center"><img src="images/ico-wong.gif" width="94" height="28" /></div>
                            </div>
                        </div>
                      </li>
                      <li class="element spacer">
                        <div class="ico_zoom"><img src="images/ico-lupa.gif" width="21" height="22" /></div>
                        <div class="case_prod">
                        	<span>Puesto 01</span><br />
                            <div class="prod">
                       	    <img src="images/prod001.jpg" width="158" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum <a href="#"><img src="images/ico-mas.gif" width="10" height="10" border="0" /></a></div>
                                <div class="item" align="right"><a href="#">ver más</a></div>
                                <div class="item" align="center"><img src="images/ico-wong.gif" width="94" height="28" /></div>
                            </div>
                        </div>
                      </li>
                      <li class="element">
                        <div class="ico_zoom"><img src="images/ico-lupa.gif" width="21" height="22" /></div>
                        <div class="case_prod">
                        	<span>Puesto 01</span><br />
                            <div class="prod">
                       	    <img src="images/prod001.jpg" width="158" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum <a href="#"><img src="images/ico-mas.gif" width="10" height="10" border="0" /></a></div>
                                <div class="item" align="right"><a href="#">ver más</a></div>
                                <div class="item" align="center"><img src="images/ico-wong.gif" width="94" height="28" /></div>
                            </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="item_lqmtg">
                   	  <li class="element">
                        <div class="ico_zoom"><img src="images/ico-lupa.gif" width="21" height="22" /></div>
                        <div class="case_prod">
                        	<span>Puesto 01</span><br />
                            <div class="prod">
                       	    <img src="images/prod001.jpg" width="158" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum <a href="#"><img src="images/ico-mas.gif" width="10" height="10" border="0" /></a></div>
                                <div class="item" align="right"><a href="#">ver más</a></div>
                                <div class="item" align="center"><img src="images/ico-wong.gif" width="94" height="28" /></div>
                            </div>
                        </div>
                      </li>
                      <li class="element spacer">
                        <div class="ico_zoom"><img src="images/ico-lupa.gif" width="21" height="22" /></div>
                        <div class="case_prod">
                        	<span>Puesto 01</span><br />
                            <div class="prod">
                       	    <img src="images/prod001.jpg" width="158" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum <a href="#"><img src="images/ico-mas.gif" width="10" height="10" border="0" /></a></div>
                                <div class="item" align="right"><a href="#">ver más</a></div>
                                <div class="item" align="center"><img src="images/ico-wong.gif" width="94" height="28" /></div>
                            </div>
                        </div>
                      </li>
                      <li class="element">
                        <div class="ico_zoom"><img src="images/ico-lupa.gif" width="21" height="22" /></div>
                        <div class="case_prod">
                        	<span>Puesto 01</span><br />
                            <div class="prod">
                       	    <img src="images/prod001.jpg" width="158" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum <a href="#"><img src="images/ico-mas.gif" width="10" height="10" border="0" /></a></div>
                                <div class="item" align="right"><a href="#">ver más</a></div>
                                <div class="item" align="center"><img src="images/ico-wong.gif" width="94" height="28" /></div>
                            </div>
                        </div>
                      </li>
                    </ul>
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
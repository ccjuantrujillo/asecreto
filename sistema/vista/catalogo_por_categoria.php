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
        <div class="item_body005 fix-png"></div>
        
<div id="menu_left">
        	<a href="#" class="catxcate active"  onclick="link('catalogo_por_categoria');">
            <img src="images/catalogo-por-categoria.png" width="178" height="42" class="fix-png" />
            <div class="flecha fix-png"></div></a>
			<?php
			foreach($lista_categorias as $indice=>$arrayCategorias){
			?>
				<a href="#" class="option fix-png" onclick="catalogo_detalle(<?php echo $arrayCategorias['CATEP_Codigo'];?>)"><?php echo $arrayCategorias['CATEC_Nombre'];?></a>
			<?php
			}
			?>
            <a href="#" onclick="link('catalogo_por_empresa');" class="catxcate">
            <img src="images/catalogo-por-empresa.png" width="178" height="39" border="0" class="fix-png" /></a>
            
       </div>
    <div class="stream">
       	  <div class="item001"></div>
          <div class="item002 cat_emp">
          		<div class="name_grup ">Grupo: <span><?php echo $nombre_grupo;?></span></div>
                <div class="tit_section ajus_width marg2"><img src="images/top-de-regalos.gif" width="207" height="27" alt="Buzón Navideño" /><a href="#" onclick="link('muro_de_grupo');" class="btn_volverm"></a></div>
           	<div class="msm_friend ajus_width">Los regalos más solicitados</div>
                <ul class="item_lqmtg">
                   	  <li class="element">
                        <div class="ico_zoom"><img src="images/ico-lupa.gif" width="21" height="22" /></div>
                        <div class="case_prod">
                        	<span>Puesto 01</span><br />
                            <div class="prod">
                       	    <img src="images/prod001.jpg" width="138" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum</div>
                                <div class="item" align="right"><a href="#">ver más</a></div>
                                <div class="item" align="center"><img src="images/ico-wong.gif" width="94" height="28" /></div>
                            </div>
                        </div>
                      </li>
                      <li class="element spacer2">
                        <div class="ico_zoom"><img src="images/ico-lupa.gif" width="21" height="22" /></div>
                        <div class="case_prod">
                        	<span>Puesto 01</span><br />
                            <div class="prod">
                       	    <img src="images/prod001.jpg" width="138" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum</div>
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
                       	    <img src="images/prod001.jpg" width="138" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum</div>
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
                       	    <img src="images/prod001.jpg" width="138" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum</div>
                                <div class="item" align="right"><a href="#">ver más</a></div>
                                <div class="item" align="center"><img src="images/ico-wong.gif" width="94" height="28" /></div>
                            </div>
                        </div>
                      </li>
                      <li class="element spacer2">
                        <div class="ico_zoom"><img src="images/ico-lupa.gif" width="21" height="22" /></div>
                        <div class="case_prod">
                        	<span>Puesto 01</span><br />
                            <div class="prod">
                       	    <img src="images/prod001.jpg" width="138" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum</div>
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
                       	    <img src="images/prod001.jpg" width="138" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum</div>
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
                       	    <img src="images/prod001.jpg" width="138" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum</div>
                                <div class="item" align="right"><a href="#">ver más</a></div>
                                <div class="item" align="center"><img src="images/ico-wong.gif" width="94" height="28" /></div>
                            </div>
                        </div>
                      </li>
                      <li class="element spacer2">
                        <div class="ico_zoom"><img src="images/ico-lupa.gif" width="21" height="22" /></div>
                        <div class="case_prod">
                        	<span>Puesto 01</span><br />
                            <div class="prod">
                       	    <img src="images/prod001.jpg" width="138" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum</div>
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
                       	    <img src="images/prod001.jpg" width="138" height="106" />
                            	<div class="item"><strong>Lorem Ipsum</strong></div>
                                <div class="item">Categoría:<br /> Lorem Ipsum</div>
                                <div class="item" align="right"><a href="#">ver más</a></div>
                                <div class="item" align="center"><img src="images/ico-wong.gif" width="94" height="28" /></div>
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
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
      <div id="case_body_small" class="nheight">  
      	<div class="item_body001 fix-png"></div>
        <div class="item006"><img src="images/duen-001.png" width="167" height="176" class="fix-png" /></div>
        <div id="menu_left">   
        <a href="#" class="m1" onclick="<?php echo $link_ingresa_datos_grupo;?>"><img src="images/crear-grupo.png" alt="Crear Grupo" border="0" class="fix-png" /></a>
        <a href="#" class="m2" onclick="<?php echo $link_invitar_amigos;?>"><img src="images/enviar-intitacion.png" alt="Enviar invitación" border="0" class="fix-png" /></a>
        <a href="#" class="m1" onclick="<?php echo $link_sortear;?>"><img src="images/sortear-on.png" alt="Sortear" border="0" class="fix-png" /></a>
		<a href="#" class="m2 activ" onclick="link('fecha_de_entrega');"><img src="images/fecha-de-entrega-on.png" alt="Fecha de entrega de regalos" border="0" class="fix-png" /></a>
		<a href="#" class="m2" onclick="link('panel_de_participantes');"><img src="images/panel-de-participantes-on.png" alt="Panel de participante" border="0" class="fix-png" /></a>
        <a href="#" class="m2" onclick="link('buzon_del_jefe');"><img src="images/buzon-del-jefe.png"alt="Buzón del jefe" width="176" height="39" border="0" class="fix-png" /></a>
              </div>
        <div class="stream">
       	  <div class="item001"></div>
          <div class="item002">
          <div class="name_grup ">Grupo: <span><?php echo $nombre_grupo;?></span></div>
          <div class="tit_section adjust" align="center"><img src="images/fecha-de-entrega-de-regalos.gif" /></div>
          
			<div class="msm_sorteo">
            	<div class="case">
                	<img src="images/esquina.gif" width="36" height="36" class="sq" />
                    <p>Grupo: <?php echo $nombre_grupo;?> <br />
                    Creado: <?php echo $fecha_creacion;?><br />
                    Participantes: <?php echo $cantidad;?></p>
                    <table width="340" border="0" cellspacing="0" cellpadding="0" align="center">
                    	<tr><td>&nbsp;</td></tr>
                      <tr>
                        <td>
                        <div class="date">Día</div>
                        <div class="date">Mes</div>
                        <div class="date">Año</div>
                        <div class="date">Hora</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                        <div class="date">
							<select name="dia" id="dia">
								<option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option> 								
								<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option> 								
								<option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option> 													
                                <option>31</option>								
							</select>
						</div>
                        <div class="date">
							<select name="mes" id="mes">
                                <option value="01">Enero</option>                      
                                <option value="02">Febrero</option>                      
                                <option value="03">Marzo</option>                      
                                <option value="04">Abril</option>                      
                                <option value="05">Mayo</option>                      
                                <option value="06">Junio</option>                      
                                <option value="07">Julio</option>                      
                                <option value="08">Agosto</option>                      
                                <option value="09">Septiembre</option>                      
                                <option value="10">Octubre</option>                      
                                <option value="11">Noviembre</option>                      
                                <option value="12">Diciembre</option> 							
							</select>
						</div>
                        <div class="date">
							<select name="ano" id="ano">
                                <option>1977</option><option>1978</option><option>1979</option><option>1980</option>
								<option>1981</option><option>1982</option><option>1983</option><option>1984</option><option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option>                                
                                <option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option>
								<option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option>                   							
							</select>
						</div>
                        <div class="date">
							<select name="hora" id="hora">
								<option>08:00</option>
								<option>09:00</option>
								<option>10:00</option>
								<option>11:00</option>
								<option>12:00</option>
								<option>13:00</option>
								<option>14:00</option>
								<option>15:00</option>
								<option>16:00</option>
								<option>17:00</option>
								<option>18:00</option>
								<option>19:00</option>
								<option>20:00</option>
							</select>
						</div>
                        </td>
                      </tr>
                      <tr>
                        <td align="left">Mensaje</td>
                      </tr>
                      <tr>
                        <td>
                       	  <div class="case_mensaje"></div>
                        </td>
                      </tr>
                      <tr>
                      	<td align="left">(máximo 200 caracteres)</td>
                      </tr>
                      <tr>
                      	<td>
                       	  <a href="#" class="btnenv"></a>
                        </td>
                      </tr>
                    </table>
               </div>
            </div>
	   		<div class="case_req">
            	
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
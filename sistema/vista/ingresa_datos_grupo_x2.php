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
      <div id="case_body_small" class="nheight">  
      	<div class="item_body001 fix-png"></div>
        <div class="item006"><img src="images/duen-001.png" width="167" height="176" class="fix-png" /></div>
        <div id="menu_left">   
        	<a href="#" class="m1 activ" onclick="link('ingresa_datos_grupo');"><img src="images/crear-grupo.png" alt="Crear Grupo" border="0" class="fix-png" /></a>
            <a href="#" class="m2" onclick="link('invitar_amigos');"><img src="images/enviar-intitacion.png" alt="Enviar invitación" border="0" class="fix-png" /></a>
            <a href="#" class="m1" onclick="link('sortear');"><img src="images/sortear-on.png" alt="Sortear" border="0" class="fix-png" /></a>
            <a href="#" class="m2" onclick="link('fecha_de_entrega');"><img src="images/fecha-de-entrega-on.png" alt="Fecha de entrega de regalos" border="0" class="fix-png" /></a> 
            <a href="#" class="m2" onclick="link('panel_de_participantes');"><img src="images/panel-de-participantes-on.png" alt="Panel de participante" border="0" class="fix-png" /></a> 
            <a href="#" class="m2" onclick="link('buzon_del_jefe');"><img src="images/buzon-del-jefe.png"alt="Buzón del jefe" width="176" height="39" border="0" class="fix-png" /></a>
             </div>
        <div class="stream">
       	  <div class="item001"></div>
          
          <div class="item002">
            <div class="tit_section adjust" align="center"><img src="images/NEPANTAS_modulo_admin_06.gif" /></div>
            <form name='frmGrupo' id='frmGrupo'>
			<div class="form_grup">
            <table width="422" border="0" cellspacing="0" cellpadding="0" >
                  <tr>
                    <td>
                    	<div class="box_item_form ajustar_w">                	
                        <div class="label nwidth">Nombre del grupo
                        </div>                    
                        <span class="camp">
                          <input name="txtNombreGrupo" type="text" id='txtNombreGrupo'/>
                        </span>              
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                    	<div class="box_item_form ajustar_w">                	
                        <div class="label nwidth n_linheight">Confirma el nombre
<br />del grupo
                        </div>                    
                        <span class="camp">
                          <input name="txtNombreGrupo2" type="text" id='txtNombreGrupo2'/>
                        </span>              
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                       <div class="box_item_form ajustar_w">                	
                            <div class="label nwidth">Tipo de Grupo</div>                  
                            <span class="camp_date">               	  
                              <select name="cboTipoGrupo" class="ciudad" id='cboTipoGrupo'> 
								<option value='1'>Amigos</option>
								<option value='2'>Familiar</option>
								<option value='3'>Empresa</option>							  
                              </select>                  
                            </span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                    	<div class="box_item_form ajustar_w">                	
                        <div class="label nwidth">Nombre de la
empresa
                        </div>                    
                        <span class="camp">
                          <input name="txtEmpresa" type="text" id='txtEmpresa'/>
                        </span>              
                      </div>
                    </td>
                  </tr>
                  <tr>
                  	<td>
                    <table width="422" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td>
                            	<div class="case_namigos">
                                	<div class="name">N° de amigos que invitarás al grupo</div>
                                    <div class="namigos">
                                    	<input name="txtNumeroAmigos" type="text" id='txtNumeroAmigos'/>
                                    </div>
                                </div>                            
								</td>
                    
                          </tr>
                          <tr>
                            <td>
                            	<div class="box_item_form ajustar_w2">                	
                                    <div class="label nwidth n_linheight">Foto o imagen <br />del grupo                                    </div>                    
                                    <span class="camp ajustwcamp">
                                      <input name="fileFoto" type="file" class="imggruo" id='fileFoto'/>
                                    </span>
                              </div> 
                           </td>
                          </tr>
                          <tr>
                            <td>
                            	<div class="case_btn_esco">
                                    <span>JPG máx. 100Kb</span>
                                </div>
                            </td>
                              <td width="90">
                            	<div class="case_pic"><img src="images/fon-pic.gif" /></div>                            </td>
                          </tr>
                      </table>

                    </td>
                  </tr>
                  <tr>
                    <td>	
                    	<div class="box_btn">
							<a href="#" class="reg" onclick='crear_grupo();'></a>
							<a href="#" class="del" onclick='reset();'></a>
						</div>
                    </td>
                  </tr>
            </table>
			</div>
			</form>
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
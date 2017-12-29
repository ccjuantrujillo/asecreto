<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
   	<script type="text/javascript" src="../../js/prototype.js"></script>
	<script type="text/javascript" src="../../js/amigosecreto.js"></script>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Juega al amigo secreto con Paginas Amarillas
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
          <div class="name_user">HOLA:<br /><?php echo $nombre_usuario;;?></div>
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
      <div id="case_body_small">  
      	<div class="item_body001 fix-png"></div>
        <div class="item006"><img src="images/duen-001.png" width="167" height="176" class="fix-png" /></div>
        <div id="menu_left">   
        <a href="#" class="m1" onclick="link('ingresa_datos_grupo');"><img src="images/crear-grupo.png" alt="Crear Grupo" border="0" class="fix-png" /></a>
        <a href="#" class="m2 activ" onclick="link('invitar_amigos');"><img src="images/enviar-intitacion.png" alt="Enviar invitación" border="0" class="fix-png" /></a>
        <a href="#" class="m1" onclick="link('sortear');"><img src="images/sortear-on.png" alt="Sortear" border="0" class="fix-png" /></a>
        <a href="#" class="m2" onclick="link('fecha_de_entrega');"><img src="images/fecha-de-entrega-on.png" alt="Fecha de entrega de regalos" border="0" class="fix-png" /></a> 
        <a href="#" class="m2" onclick="link('panel_de_participantes');"><img src="images/panel-de-participantes-on.png" alt="Panel de participante" border="0" class="fix-png" /></a>
        <a href="#" class="m2" onclick="link('buzon_del_jefe');"><img src="images/buzon-del-jefe.png"alt="Buzón del jefe" width="176" height="39" border="0" class="fix-png" /></a>
       </div>
        <div class="stream">
       	  <div class="item001"></div>
          <div class="item002">
            <form name='frmInvitacion' id='frmInvitacion'>
	        <div class="case_invi">
                <?php
                if($flagConfirmado=='0'){
                for($i=0;$i<$cantidad-1;$i++){
                $nro = str_pad($i+1,2,"0", STR_PAD_LEFT);
                ?>
                <table width="540" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="110" rowspan="3" class="back<?php echo $nro;?>"></td>
                    <td>
                        <div class="box_item_form ajustar_w">
                        <div class="label nwidth">Nombre del AMIGO</div>
                        <span class="camp">
                          <input name="txtNombre[<?php echo $i;?>]" type="text" id="txtNombre[<?php echo $i;?>]" title="Nombre del amigo"/>
                        </span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                    <div class="box_item_form ajustar_w">
                        <div class="label nwidth">Mail del AMIGO</div>
                        <span class="camp">
                          <input name="txtEmail[<?php echo $i;?>]" type="text" id="txtEmail[<?php echo $i;?>]" title="Mail del amigo" onkeydown='return validFormSalt("email",this,event,"txtEmail2[<?php echo $i;?>]")'/>
                        </span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <div class="box_item_form ajustar_w">
                        <div class="label nwidth">Confirmar Email</div>     
                        <span class="camp">
                          <input name="txtEmail2[<?php echo $i;?>]" type="text" id="txtEmail2[<?php echo $i;?>]" title="Confirmar Email" onkeydown='comparaCampos(this,event,"txtEmail[<?php echo $i;?>]","txtNombre[<?php echo $i+1;?>]");'/>
                        </span>
                      </div>
                    </td>
                  </tr>
                </table>
                <?php
                }
                }
                elseif($flagConfirmado=='1'){
                ?>
                <table width="540" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="110" rowspan="3" class="back01"></td>
                    <td>
                        <div class="box_item_form ajustar_w">
                        <div class="label nwidth">Nombre del AMIGO
                        </div>
                        <span class="camp">
                          <input name="txtNombre[0]" id="txtNombre[0]" type="text" />
                        </span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                    <div class="box_item_form ajustar_w">
                        <div class="label nwidth">Mail del AMIGO
                        </div>
                        <span class="camp">
                          <input name="txtEmail[0]" id="txtEmail[0]" type="text" />
                        </span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <div class="box_item_form ajustar_w">
                        <div class="label nwidth">Confirmar Email
                        </div>
                        <span class="camp">
                          <input name="txtEmail2[0]" id="txtEmail2[0]" type="text" />
                        </span>
                      </div>
                    </td>
                  </tr>
            </table>
                        <table width="540" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="110" rowspan="3" class="back02"></td>
                            <td>
                                <div class="box_item_form ajustar_w">                	
                                <div class="label nwidth">Nombre del AMIGO
                                </div>                    
                                <span class="camp">
                                  <input name="txtNombre[1]" id="txtNombre[1]" type="text" />
                                </span>              
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                            <div class="box_item_form ajustar_w">                	
                                <div class="label nwidth">Mail del AMIGO
                                </div>                    
                                <span class="camp">
                                  <input name="txtEmail[1]" id="txtEmail[1]" type="text" />
                                </span>              
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <div class="box_item_form ajustar_w">                	
                                <div class="label nwidth">Confirmar Email
                                </div>                    
                                <span class="camp">
                                  <input name="txtEmail2[1]" id="txtEmail2[1]" type="text" />
                                </span>              
                              </div>
                            </td>
                          </tr>
                </table>
                        <table width="540" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="110" rowspan="3" class="back03"></td>
                            <td>
                                <div class="box_item_form ajustar_w">                	
                                <div class="label nwidth">Nombre del AMIGO
                                </div>                    
                                <span class="camp">
                                  <input name="txtNombre[2]" id="txtNombre[2]"type="text" />
                                </span>              
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                            <div class="box_item_form ajustar_w">                	
                                <div class="label nwidth">Mail del AMIGO
                                </div>                    
                                <span class="camp">
                                  <input name="txtEmail[2]" id="txtEmail[2]" type="text" />
                                </span>              
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <div class="box_item_form ajustar_w">                	
                                <div class="label nwidth">Confirmar Email
                                </div>                    
                                <span class="camp">
                                  <input name="txtEmail2[2]" id="txtEmail2[2]" type="text" />
                                </span>              
                              </div>
                            </td>
                          </tr>
                </table>				
				<?php
				}
				?>
				<table width="540" border="0" cellspacing="0" cellpadding="0" class="nobor">
				  <!--tr>
					<td width="110" rowspan="2" ></td>
					<td>
						<div class="box_item_form ajustar_w3">                	
						<div class="label nwidth">Mensaje</div>                    
						<span class="camp_txt" style="display:none;">
							<textarea name="mensaje" id="mensaje" cols="" rows=""></textarea>
						</span>
					  </div>
					</td>
				  </tr-->
				  <tr>
					<td>	
						<a href="#" class="enviar" onclick="enviar_invitaciones();"></a>
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
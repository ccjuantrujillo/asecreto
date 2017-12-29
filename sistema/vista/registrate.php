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
        <a href="#">            
          <img src="images/logo-amigosecreto.png" alt="Juega al amigo secreto con Paginas Amarillas" width="453" height="122" border="0" class="fix-png" />            </a>	
      </div>    
      <div id="case_publi"> 
      </div>  
      <div id="case_head">    
       <div class="tools_head n_width">| 
          <a href="#">¿Cómo Jugar?</a> | 
        </div> 
      </div>  
      <div id="case_body_reg">  	
        <div class="img01 fix-png">
        </div>    
        <div class="img02 fix-png">
        </div>    
        <div class="img03 fix-png">
        </div>  	
        <div id="case_form">    	
          <div class="case_head_form fix-png">
          </div>  
		  <form id="frmRegistro">
          <div class="case_body_form fix-png">
              <h2><img src="images/datos-de-usuario.gif" width="561" height="31" alt="Datos del usuario" /></h2> 
              	<table width="378" border="0"  cellpadding="0" cellspacing="0">
                  <tr>
                    <td>
                    	<div class="box_item_form">                	
                        <div class="label">Email *
                        </div>                    
                        <span class="camp">
                          <input name="txtEmail" type="text" id="txtEmail" title='Email' onkeydown="return validFormSalt('email',this,event,'txtEmail2')"/>
                        </span>              
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                    	<div class="box_item_form">                	
                            <div class="label n_linheight">Confirmar * Email
                            </div>                    
                            <span class="camp">
                              <input name="txtEmail2" type="text" id="txtEmail2" title='Confirmar Email' onkeydown="comparaCampos(this,event,'txtEmail','txtContrasena');"/>
                            </span>              
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                    	<div class="box_item_form">                	
                        <div class="label">Contraseña *
                        </div>                    
                        <span class="camp">
                          <input name="txtContrasena" type="password" id="txtContrasena" title='Contraseña' onkeydown="return validFormSalt('alf',this,event,'txtContrasena2')" />
                        </span>              
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                    	<div class="box_item_form">               	  
                        <div class="label n_linheight">Confirmar * contraseña
                        </div>                    
                        <span class="camp">
                          <input name="txtContrasena2" type="password" id="txtContrasena2" title='Confirmar Contraseña' onkeydown="comparaCampos(this,event,'txtContrasena','txtNombres');" />
                        </span>                
                      </div>
                    </td>
                  </tr>
                </table>           
                <h2><img src="images/datos-personales.gif" width="561" height="31" alt="Datos del usuario" /></h2>  
                 <table width="378" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>
                        	<div class="box_item_form">                	
                            <div class="label">Nombres *                            </div>                    
                            <span class="camp">
                              <input name="txtNombres" type="text" id="txtNombres" title='Nombres' onkeydown="return validFormSalt('txt',this,event,'txtApellidos')"/>
                            </span>                          </div>                        </td>
                      </tr>
                      <tr>
                        <td>
                        	<div class="box_item_form">                	
                                <div class="label">Apellidos *                                </div>                    
                                <span class="camp">
                                  <input name="txtApellidos" type="text" id="txtApellidos" title='Apellidos' onkeydown="return validFormSalt('txt',this,event,'dia')"/>
                                </span>                          </div>                        
								</td>
                      </tr>
                      <tr>
                        <td>
                        	<div class="box_item_form">                	
                                    <div class="label n_linheight">Fecha de * nacimineto
                                    </div>
                            <span class="camp_date">                                         
                              <select name="dia" class="dia" id="dia" title='Dia' onkeydown="return validFormSalt('cbo',this,event,'mes')">
                                <option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option>
				<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option> 								
				<option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
                                <option>31</option>
                            </select>
                            <select name="mes" class="mes" id="mes" title='Mes' onkeydown="return validFormSalt('cbo',this,event,'year')">
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
                              <select name="year" class="year" id="year" title='Año' onkeydown="return validFormSalt('cbo',this,event,'cboTipoDocumento')">
                                <option>1977</option><option>1978</option><option>1979</option><option>1980</option>
				<option>1981</option><option>1982</option><option>1983</option><option>1984</option><option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option>                                
                                <option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option>
				<option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option>                   
                              </select>                    
                            </span>                          
			</div>            
			</td>
                      </tr>
                      <tr>
                        <td>
                        <div class="box_item_form">                	
                            <div class="label n_linheight">Tipo de documento * </div>                  
                            <span class="camp_date">               	  
                              <select name="cboTipoDocumento" id="cboTipoDocumento" class ="ciudad" title='Tipo documento' onkeydown="return validFormSalt('cbo',this,event,'txtNumeroDocumento')">
				<?php echo $tipo_documentos;?>
                              </select>                  
                            </span>                          
			</div>              
			</td>
                      </tr>
                      <tr>
                        <td>
                        	<div class="box_item_form">                	
                            <div class="label n_linheight">Número de docuemnto * </div>                    
                            <span class="camp">
                              <input name="txtNumeroDocumento" id="txtNumeroDocumento" type="text" title='Numero de documento' onkeypress="return validFormSalt('nro',this,event,'txtTelefono')"/>
                            </span> 
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                        	<div class="box_item_form">                	
                                <div class="label">Teléfono *                                </div>                    
                                <span class="camp">
                                  <input name="txtTelefono" type="text" id="txtTelefono" title='Telefono' onkeypress="return validFormSalt('nro',this,event,'chkSexo')"/>
                                </span>                              
								</div>                        
								</td>
                      </tr>
                      <tr>
                        <td>
                        	<div class="box_item_form">                	
                            <div class="label">Sexo *                            </div>              
                            <span class="camp_date n_padding">                    	
                              <input name="chkSexo" id="chkSexo" type="radio" value="1" /> Masculino &nbsp;&nbsp;
                              <input name="chkSexo" id="chkSexo" type="radio" value="0" /> Femenino                            </span>                          </div>                        </td>
                      </tr>
                      <tr>
                        <td>
                            <div class="box_item_form">
                            <div class="label">Ciudad * </div>                    
                            <span class="camp">
                              <input name="txtCiudad" id="txtCiudad" type="text" title='Ciudad' onkeydown="return validFormSalt('txt',this,event,'fNotificaciones')"/>
                            </span>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                        <div class="chek_box">
			  <input name="fNotificaciones" id="fNotificaciones" onclick="checkear(this);" type="checkbox" value="1" style="padding:0px; margin:0px;" checked="checked"/> Deseo recibir notificaciones e información del juego.<br />
                          <input name="fPromociones"  id="fPromociones" onclick="checkear(this);" type="checkbox" value="1" style="padding:0px; margin:0px;" checked="checked"/> Deseo recibir notificaciones sobre futuras promociones.<br />				
                          <input name="fCondiciones"  id="fCondiciones" onclick="checkear(this);"  type="checkbox" value="0" style="padding:0px; margin:0px;" /> Acepto haber leído los <a href="#">Términos y Condiciones</a> del juego. *            	
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                             <a href="#" id='btn_reg' onclick="ingresar_datos_personales();" class="btn_reg"></a> 
                        </td>
                      </tr>
            </table>
            <div class="tex_foot_form">
            (*) Estos datos son obligatorios para participar en el concurso y poder recoger el premio en caso       tu grupo resulte ganador.
            </div>          
          </div>  
		  </form>
          <div class="case_foot_form fix-png">        
          </div>    
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
          <a href="#" onclick="link('principal');">PORTADA</a> | <a href="#">¿COMO JUGAR?</a> | <a href="#">CATALOGO</a> |
        </div>    
        <div class="right">Copyright © 2010 Amigo Secreto - PaginasAmarillas.pe
        </div>     
      </div>
    </div>
  </body>
</html>
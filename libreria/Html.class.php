<?php
class Combo{
	private $arrayCombo;
	public function __construct($_arrayCombo=array()){
		$this->arrayCombo=empty($_arrayCombo)?array():$_arrayCombo;
	}	
	
	public function getArrayCombo(){
		return $this->arrayCombo;	
	}
	
	public function setArrayCombo($_arrayCombo){
		$this->arrayCombo=empty($_arrayCombo)?array():$_arrayCombo;
	}
	
	public function getOptionHTML($indSel='',$valorDefault=''){
		$option="<option value=''>".$valorDefault."</option>";
		foreach($this->arrayCombo as $indice=>$valor){
			$selected=$indSel==$valor[0]?"selected='selected'":"";
			$option.="<option value='".$valor[0]."' ".$selected.">".$valor[1]."</option>";
		}
		return $option;
	}
	
	public function getSeleccionHTML($option,$identificador,$estilo,$evento,$funcion,$ancho=''){
		$eventos			 = "";
		$identificador = empty($identificador)?"":"id='".$identificador."'";
		$estilo        = empty($estilo)?"":"class='".$estilo."'";
		$ancho         = empty($ancho)?"":"style='width:".$ancho."'";  
		$flagEvento		 = empty($evento)?0:1;
		if($flagEvento==1){
			$evento=split(',',$evento);
			foreach($evento as $indice=>$valor){
				$eventos.=$valor.'="'.$funcion.'" ';
			}
		}
		$seleccion     = "<select $identificador $estilo $eventos $ancho>".$option."</select>";
		return $seleccion;
	}
}

/***************************************************************************************************************************/

class Tabla{
	private $arrayCabecera;
	private $arrayFilas;
	private $estiloFila;
	private $estiloFilaEncima;
	private $estiloCabecera;
	public function __construct($_arrayCabecera,$_arrayFilas,$_estiloFila='',$_estiloFilaEncima='',$_estiloCabecera=''){
		$this->arrayCabecera    = $_arrayCabecera;
		$this->arrayFilas       = $_arrayFilas;		
		$this->estiloFila       = $_estiloFila;
		$this->estiloFilaEncima = $_estiloFilaEncima;
		$this->estiloCabecera   = $_estiloCabecera;
	}	

	public function getCabeceraHTML(){
		$cabeceraHTML=$this->getFilaHTML($this->arrayCabecera,$this->arrayCabecera,-1,'',$this->estiloCabecera,$this->estiloCabecera);	
		return $cabeceraHTML;
	}
	
	public function getFilasHTML(){
		$filasHTML="";
		foreach($this->arrayFilas as $i=>$arrayFila){
			$filasHTML.=$this->getFilaHTML($arrayFila,$this->arrayCabecera,-1,'',$this->estiloFila,$this->estiloFilaEncima);
		}	
		return $filasHTML;
	}
	
	public function getFilaHTML($_arrayFila,$_arrayCols,$_indiceClave,$_funcionOnClick,$_estiloFila,$_estiloFilaEncima){
		foreach($_arrayCols as $i=>$val){
			if(isset($_arrayFila[$i])){
				$arrayMostrar[$i] = $_arrayFila[$i];
			}
		}
		$onclick = $_funcionOnClick!=''?"onclick=\"$_funcionOnClick\"":"";
		$fila    = "<tr $onclick class=\"$_estiloFila\" onmouseover=\"className='$_estiloFilaEncima'\" onmouseout=\"className='$_estiloFila'\">";
		foreach($arrayMostrar as $indice=>$valor){
			$fila.="<td>".$valor."</td>";
		}
		$fila.="</tr>";
		return $fila;
	}
	
	public function getTabla(){
			$resultado=empty($this->arrayFilas)?"NO EXISTEN RESULTADOS":$this->getCabeceraHTML().$this->getFilasHTML();
			return $resultado;
	}
}

/***************************************************************************************************************************/

class Calendar{
	private $cal_ano;
	private $cal_mes;
	private $cal_dia;
	private $cal_fecha;
	private $cal_nom_mes;
	private $cal_nom_dia;
	public function __construct($cal_dia='',$cal_mes='',$cal_ano='',$accion='',$marca_dias='',$bloqueo_dias=''){
		$this->cal_ano = $cal_ano;
		$this->cal_mes = $cal_mes;
		$this->cal_dia = $cal_dia;
		$this->accion  = $accion;
		$this->cal_bloqueo = $bloqueo_dias;
		$this->cal_valores = $marca_dias;
		$this->validar_datos();
	}
	
	private function validar_datos(){
		
	}
	
	private function calendarioHTML(){
		$calHTML = "
							 <div id='calendario_grid' align='center' style='width:100%;margin-top:5px;height:150px;'>
							 <table cellpadding='0' cellspacing='1' style='vertical-align:text-top;border:#666666 solid;border-width:0.1em;'>
							 	<tr class='col1' style='font-size:10px;font-family:Verdana,Arial;background:url(../imagenes/icon_gisp/bg_calendar.gif);' align='center'>
							 		<td nowrap='nowrap' style='width:40px;'><input type='button' name='ano_menor' id='ano_menor' style='background(../imagenes/icon_gisp/bg_calendar.gif):width:40px;boder-width:0px;font-size:10px;font-family:Verdana,Arial' onclick='' value='<<'></td>
							 		<td nowrap='nowrap' style='width:40px;'><input type='button' name='mes_menor' id='mes_menor' style='background(../imagenes/icon_gisp/bg_calendar.gif):width:40px;boder-width:0px;font-size:10px;font-family:Verdana,Arial' onclick='' value='<'></td>
									<td colspan='3' nowrap='nowrap' style='width:40px;' align='center'>".$this->cal_nom_mes." ".$this->cal_nom_ano."</td>										
									<td nowrap='nowrap' style='width:40px;'><input type='button' name='mes_mayor' id='mes_mayor' style='background(../imagenes/icon_gisp/bg_calendar.gif):width:40px;boder-width:0px;font-size:10px;font-family:Verdana,Arial' onclick='' value='>'></td>
									<td nowrap='nowrap' style='width:40px;'><input type='button' name='ano_mayor' id='ano_mayor' style='background(../imagenes/icon_gisp/bg_calendar.gif):width:40px;boder-width:0px;font-size:10px;font-family:Verdana,Arial' onclick='' value='>>'></td>									
							 </tr>
							 <tr class='col1' style='font-size:10px;font-family:Verdana,Arial;' align='center'>
							 		<td nowrap='nowrap' style='background:#F1F1C7;width:40px;'>Lun</td>
							 		<td nowrap='nowrap' style='background:#F1F1C7;width:40px;'>Mar</td>
							 		<td nowrap='nowrap' style='background:#F1F1C7;width:40px;'>Mie</td>
							 		<td nowrap='nowrap' style='background:#F1F1C7;width:40px;'>Jue</td>
							 		<td nowrap='nowrap' style='background:#F1F1C7;width:40px;'>Vie</td>
							 		<td nowrap='nowrap' style='background:#F1F1C7;width:40px;'>Sab</td>
							 		<td nowrap='nowrap' style='background:#F1F1C7;width:40px;color:#990000;'>Dom</td>
							 </tr>
							 <tr>
							 ";
		return $calHTML;						 
	}

		private function diasHTML(){
			$dia_fin = intval(date('d', mktime(0, 0, 0, ($this->cal_mes)+1, 0, $this->cal_ano)));					
			$num_dia=date("N", mktime(0, 0, 0, $this->cal_mes, 1, $this->cal_ano));					
			$band=0;					//INICIO DE DIAS	
			$j=1;						//INCIO FILAS	
			$k=1;						//INICIO COLUMNAS	
			$dia_cont=1;	
			for($i=1; $i<=42; $i++)		//BUCLE CREA CASILLEROS
			{		
				if( ($i==$num_dia or $band==1) and ($dia_cont<=$dia_fin) )
				{
					$cal_int_fecha=mktime(0, 0, 0, $this->cal_mes, $dia_cont, $this->cal_ano); 							
					$cal_int_nom_dia=$this->diaEspanol(date('l',$cal_int_fecha));
					$cal_int_nom_mes=$this->mesEspanol(date('F',$cal_int_fecha));			
					$dia_cont=str_pad($dia_cont,2,"0",STR_PAD_LEFT);		//RELLENA CON CEROS A LA IZQUIERDA
					if( strstr($this->cal_valores,$dia_cont.'/'.$this->cal_mes.'/'.$this->cal_ano) ) $bg_color="#81BFED";
					else	$bg_color="#E6E6E6";
					$dias_HTML .= '					    
					<td><input name="campo'.$j.$k.'" id="campo'.$j.$k.'" type="button" style="background:'.$bg_color.'; width:40px; border-width:0; font-size:10px; font-family:Verdana, Arial" value="'.$dia_cont.$aux.'" onclick=comprueba_marca("campo","'.$j.'","'.$k.'","'.$dia_cont.'","'.$this->cal_mes.'","'.trim($this->cal_ano).'","'.$bg_color.'")  onmouseover=muestra_dia("'.$cal_int_nom_dia.'","'.$dia_cont.'","'.$cal_int_nom_mes.'","'.$this->cal_ano.'","'.$this->cal_valores.'") />	
			      	</td>';      									
					$band=1;	
					$dia_cont++;													
				}
				else
				{
					$dias_HTML .= '
					<td><input name="campo'.$j.$k.'" id="campo'.$j.$k.'" type="button" style="background:#F5F5F5; width:40px; border-width:0; font-size:10px; font-family:Verdana, Arial;" />
      				</td>';
				}
				if($i%7==0)			//SI ES DOMINGO INICIAR NUEVA SEMANA/FILA
				{	$j++;			//INCREMENTAMOS FILAS
					$k=1;			//INICIAMOS COLUMNA
					$dias_HTML .= '
			    	</tr>
			    	<tr>';
		      	}
				else
				{
					$k++;			//INCREMENTAMOS COLUMNA
				}						
			}

    	$dias_HTML .= '	
										</tr>
										<tr class="col1" style="font-size:10px; font-family:Verdana, Arial; background:url(imagenes/icon_gisp/bg_calendar.gif);" align="center">
				  						<td nowrap="nowrap" style="width:40px;"></td>            
				  						<td colspan="5" nowrap="nowrap" style="width:40px;" align="center"><input type="text" id="cal_descripcion" name="cal_descripcion" style="width:220px; border-width:0; background:url(imagenes/icon_gisp/bg_calendar.gif); text-align:center"/></td>           
				  						<td nowrap="nowrap" style="width:40px;"></td>
										</tr>
										</table>			
										<input type="hidden" id="cal_dia" name="cal_dia" value="'.$this->cal_dia.'"/>
										<input type="hidden" id="cal_mes" name="cal_mes" value="'.$this->cal_mes.'"/>
										<input type="hidden" dir="cal_ano" name="cal_ano" value="'.$this->cal_ano.'"/>
								</div>
								<input type="hidden" id="cal_bloqueo" name="cal_bloqueo" value="'.$this->cal_bloqueo.'" />
								<input type="hidden" id="cal_valores" name="cal_valores" value="'.$this->cal_valores.'"/>'; 
			return $dias_HTML;
		}

	public function enviarCalendarioHTML(){
		return $this->calenarioHTML().$this->diasHTML();
	}
}

/***************************************************************************************************************************/

class ToolBar{
	private $bDivStyle;
	private $bPermiso;
	private $bAlign;
	private $bBoton = array();
	private $bBotonName = array();
	private $bStyle = array();
	private $bEvento = array();
	private $bFuncionJava = array();
	private $bImage = array();
	private $bwidth = array();
	private $bactive = array();
	private $bForm;
	private $bBotonTitle = array();
	private $bServicios  = array();	
	public function __construct($palign='left',$style='btns',$form='',$param=false){
		$this->bDivStyle = $style;
		$this->bAlign		 = $palign;
		$this->bForm		 = $form;
		$this->bPermiso  = $param;
	}	
	
	public function setFormulario($form=''){
		$this->bForm = $form;	
	}
	
	public function setServicios($servicios=array()){
		$this->bPermiso   = true;
		$this->bServicios = $servicios;
	}
	
	public function SetStyle($param){
		$this->bDivStyle=$param;
	}
	
	public function setBoton($idBoton,$pbotonvalue,$style,$evento='',$funcionjava='',$image,$ancho='',$title='',$activo=true){
		$i=count($this->bBoton);
		$this->bBoton[$i]       = $idBoton;
		$this->bBotonName[$i]   = $pbotonvalue;
		$this->bStyle[$i]       = $style;
		$this->bEvento[$i]      = $evento;
		$this->bFuncionJava[$i] = $funcionjava;
		$this->bImage[$i]       = $image;
		$this->bwidth[$i]       = $ancho;
		$this->bBotonTitle[$i]  = $title;
		$this->bactive[$i]      = $activo;
	}
	
	public function getBoton(){
		$n=count($this->bBoton);	
		$botones="<div id='$this->bDivStyle' class='$this->bDivStyle'><ul>";
		//$dir_imagen=$this->bImage[$i];
		foreach($this->bBoton as $i=>$b){
			$otros="";
			$eventos = "";
			$evento  = explode(',',$this->bEvento[$i]);
			for($k=0;$k<count($evento);$k++){
				if(trim($evento[$k])!=''){
					$eventos.=$evento[$k]."=\"if(window.".$this->bFuncionJava[$i].")
					return ".$this->bFuncionJava[$i]."('".$this->bBoton[$i]."',this,'".$evento[$k]."',event);\"";
				}
			}
			if($this->bwidth[$i]!=''){
				if($this->bactive[$i]==false)	$style="style=width:".$this->bwidth[$i].";display:none;'";
				else $style=" style=width:".$this->bwidth[$i].";'";
			}
			else {
				if($this->bactive[$i]==false)	$style="style='display:none;' ";
				else $style="";
			}
			$botones.="
								<li>
									<a href='#' class='".$this->bStyle[$i]."' style='float:$this->bAlign;' $eventos>
										<span $style id='".$this->bBoton[$i]."'>
											<img src='".$this->bImage[$i]."' alt='".$this->bBotonName[$i]."' align='absmiddle' title='".$this->bBotonTitle[$i]."' border='0'>".$this->bBotonName[$i]."
										</span>
									</a>
								</li>
								";
		}
		$botones.="</ul></div>";
		return $botones;
	}
}

/***************************************************************************************************************************/

class Form{
	private $txtId;
	private $txtValue;
	private $txtStyle;
	private $txtEvento;
	private $txtFuncionJava;
	private $txtReadonly;
	private $txtActivo;
	private $fileId;
	private $fileValue;
	private $fileStyle;
	private $hiddenId;
	private $hiddenValue;
	private $hiddenStyle;
	private $hiddenEvento;
	private $hiddenFuncionJava;
	private $hiddenReadonly;
	private $hiddenDisabled;
	private $imgId;
	private $imgSrc;
	private $imgStyle;
	private $imgEvento;
	private $imgFuncionJava;
	public function __construct($palign='left',$style='txts',$form='',$param=false){
		$this->bDivStyle = $style;
		$this->bAlign		 = $palign;
		$this->bForm		 = $form;
		$this->bPermiso  = $param;		
	}	
	
	public function setText($txtId,$txtValue,$style="width:150px;",$evento='',$funcionjava='',$readonly=false,$activo=true){
		$this->txtId          = $txtId;
		$this->txtValue       = $txtValue;
		$this->txtStyle       = $style;
		$this->txtEvento      = $evento;
		$this->txtFuncionJava = $funcionjava;
		$this->txtReadonly    = $readonly;
		$this->txtActivo      = $activo;
	}
	
	public function getText(){
		$texto="<div id='$this->bDivStyle' class='$this->bDivStyle'>";
		$otros="";
		$eventos = "";
		$evento  = explode(',',$this->txtEvento);		
		for($k=0;$k<count($evento);$k++){
			if(trim($evento[$k])!=''){
				$eventos.=$evento[$k]."=\"if(window.".$this->txtFuncionJava.")
				return ".$this->txtFuncionJava."('".$this->txtId."',this,'".$evento[$k]."',event);\"";
			}
		}
		$readonly=$this->txtReadonly==true?"readonly='readonly'":"";
		$disabled=$this->txtActivo==true?"":"disabled='disabled'";
		$texto.="<input type='text' name='".$this->txtId."' id='".$this->txtId."' value='".$this->txtValue."' ".$eventos." class='".$this->txtStyle."' ".$readonly." ".$disabled.">";
		$texto.="</div>";
		return $texto;	
	}	
	
	public function setHidden($hiddenId,$hiddenValue,$style="width:150px;",$evento='',$funcionjava='',$readonly=false,$activo=true){
		$this->hiddenId						= $hiddenId;
		$this->hiddenValue			  = $hiddenValue;
		$this->hiddenStyle				= $style;
		$this->hiddenEvento				= $evento;
		$this->hiddenFuncionJava	= $funcionjava;
		$this->hiddenReadonly		  = $readonly;
		$this->hiddenDisabled			= $activo;
	}
	
	public function getHidden(){
		$oculto="<div id='$this->hiddenId' class='$this->bDivStyle' style='display:none;'>";
		$readonly=$this->txtReadonly==true?"readonly='readonly'":"";
		$disabled=$this->txtActivo==true?"":"disabled='disabled'";
		$oculto.="<input type='hidden' name='".$this->hiddenId."' id='".$this->hiddenId."' value='".$this->hiddenValue."' class='".$this->hiddenStyle."' ".$readonly." ".$disabled.">";
		$oculto.="</div>";
		return $oculto;			
	}
	
	public function setPass($txtId,$txtValue,$style="width:150px;",$evento='',$funcionjava='',$readonly=false,$activo=true){
		$this->txtId          = $txtId;
		$this->txtValue       = $txtValue;
		$this->txtStyle       = $style;
		$this->txtEvento      = $evento;
		$this->txtFuncionJava = $funcionjava;
		$this->txtReadonly    = $readonly;
		$this->txtActivo      = $activo;			
	}
	
	public function getPass(){
		$texto="<div id='$this->bDivStyle' class='$this->bDivStyle'>";
		$otros="";
		$eventos = "";
		$evento  = explode(',',$this->txtEvento);		
		for($k=0;$k<count($evento);$k++){
			if(trim($evento[$k])!=''){
				$eventos.=$evento[$k]."=\"if(window.".$this->txtFuncionJava.")
				return ".$this->txtFuncionJava."('".$this->txtId."',this,'".$evento[$k]."',event);\"";
			}
		}
		$readonly=$this->txtReadonly==true?"readonly='readonly'":"";
		$disabled=$this->txtActivo==true?"":"disabled='disabled'";
		$texto.="<input type='password' name='".$this->txtId."' id='".$this->txtId."' value='".$this->txtValue."' ".$eventos." class='".$this->txtStyle."' ".$readonly." ".$disabled.">";
		$texto.="</div>";
		return $texto;			
	}
	
	public function setImage($imgId,$imgSrc,$style="",$evento='',$funcionjava=''){
		$this->imgId          = $imgId;
		$this->imgSrc         = $imgSrc;
		$this->imgStyle       = $style;
		$this->imgEvento      = $evento;
		$this->imgFuncionJava = $funcionjava;
	}
	
	public function getImage(){
		$imagen="<div id='$this->bDivStyle' class='$this->bDivStyle'>";
		$otros="";
		$eventos = "";
		$evento  = explode(',',$this->txtEvento);		
		for($k=0;$k<count($evento);$k++){
			if(trim($evento[$k])!=''){
				$eventos.=$evento[$k]."=\"if(window.".$this->txtFuncionJava.")
				return ".$this->txtFuncionJava."('".$this->txtId."',this,'".$evento[$k]."',event);\"";
			}
		}
		$readonly=$this->txtReadonly==true?"readonly='readonly'":"";
		$disabled=$this->txtActivo==true?"":"disabled='disabled'";
		$imagen.="<img name='".$this->imgId."' id='".$this->imgId."' src='".$this->imgSrc."' ".$eventos." class='".$this->txtStyle."' border='0'>";
		$imagen.="</div>";
		return $imagen;				
	}
	
	public function setCheckBox(){
		
	}
	
	public function setRadioButton(){
		
	}
	
	public function setTextArea(){
		
	}
	
	public function setFile($fileId,$fileValue,$style='',$evento='',$funcionjava='',$readonly=false,$activo=true){
		$this->fileId    = $fileId;
		$this->fileValue = $fileValue;
		$this->fileStyle = $style;
	}
	
	public function getFile(){
		$file="<div id='".$this->fileId."' class='$this->bDivStyle'>";
		$file.="<input type='file' name='".$this->fileId."' id='".$this->fileId."' class='".$this->fileStyle."'>";
		$file.="</div>";
		return $file;
	}
}
?>

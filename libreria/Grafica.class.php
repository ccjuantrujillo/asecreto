<?php
class graficas
{
	public function __construct($tipo,$color,$ancho,$alto)
	{
		// Creacion Cabecera
		$this->tipo = $tipo;
		$this->color = $color;
		$this->ancho = $ancho;
		$this->alto = $alto;	

	}
	
	public function cabecera()
	{
		//echo header('Content-type:image/'.$this->tipo);
	}
	
	public function generador()
	{
		$this->image = imagecreatetruecolor($this->ancho, $this->alto);
		$this->colores();
		imagefilledrectangle($this->image, 0, 0, $this->ancho, $this->alto, imagecolorallocate($this->image, $this->color[0], $this->color[1], $this->color[2]));
					
	}
	
	public function colores()
	{
		$this->c[1]  =	$rojo				= imagecolorallocate($this->image, 255, 0, 0);
		$this->c[2]  =	$azul				= imagecolorallocate($this->image, 0, 0, 255);
		$this->c[3]  =	$amarillo			= imagecolorallocate($this->image, 255, 255, 0);
		$this->c[4]  =	$verde				= imagecolorallocate($this->image, 0, 128, 0);
		$this->c[5]  =	$naranja			= imagecolorallocate($this->image, 255, 165, 0);
		$this->c[6]  =	$celeste			= imagecolorallocate($this->image, 135, 206, 235);
		$this->c[7]  =	$violeta			= imagecolorallocate($this->image, 238, 130, 238);
		$this->c[8]  =	$kakhi				= imagecolorallocate($this->image, 189, 183, 107);
		$this->c[9]  =	$verdelimon			= imagecolorallocate($this->image, 50, 205, 50);
		$this->c[10]  =	$rosado				= imagecolorallocate($this->image, 255, 192, 203);
		
		
		$this->c[11]  =	$rojosombra 		= imagecolorallocate($this->image, 178, 34, 34);		
		$this->c[12]  =	$azulsombra 		= imagecolorallocate($this->image, 0, 0, 205);		
		$this->c[13]  =	$amarillosombra 	= imagecolorallocate($this->image, 158, 158, 39);		
		$this->c[14]  =	$verdesombra		= imagecolorallocate($this->image, 0, 100, 0);		
		$this->c[15]  =	$naranjasombra 		= imagecolorallocate($this->image, 255, 140, 0);		
		$this->c[16]  =	$celestesombra 		= imagecolorallocate($this->image, 70, 130, 180);		
		$this->c[17]  =	$violetasombra 		= imagecolorallocate($this->image, 206, 48, 206);		
		$this->c[18]  =	$kakhisombra		= imagecolorallocate($this->image, 110, 103, 20);		
		$this->c[19]  =	$verdelimonsombra 	= imagecolorallocate($this->image, 31, 131, 31);		
		$this->c[20]  =	$rosadosombra		= imagecolorallocate($this->image, 255, 182, 193);		
		$this->c[21]  =	$negro				= imagecolorallocate($this->image, 0, 0, 0);
		$this->c[22]  =	$blanco				= imagecolorallocate($this->image, 255, 255, 255);
		
	}	
	
	//El valor porcentajes tiene que ser ingresado como un array por ejemplo
	//$miimagen->grafica_circular(array("60","40"),"200","200");
	public function set_grafica_circular($porcentajes,$ancho_circular,$alto_circular)
	{
		$this->porcentajes = $porcentajes;
		$this->ancho_circular = $ancho_circular;
		$this->alto_circular = $alto_circular;
	}
	
	public function grafica_circular($porcentajes,$ancho_circular,$alto_circular)
	{
		$total=0;
		$numero_tajadas = count($porcentajes);
		for ($i=0;$i<$numero_tajadas;$i++)
		{
			 $total = $porcentajes[$i] + $total;		
		}
		
		$inicio = "0";
		
	for ($m = 180; $m > 150; $m--) 
		
		{	
		//Efecto Sombra 3D
		for ($n=0;$n<$numero_tajadas;$n++)
			{	
					$valor_porcentual = ($porcentajes[$n] * 360) / $total;				
					$orden_inicio = $inicio;
					$inicio = $valor_porcentual+$inicio;									
					imagefilledarc($this->image, 140, $m, $ancho_circular, $alto_circular, $orden_inicio, $inicio, $this->c[$n+11], IMG_ARC_PIE);
					
			}
		}			
		
		$inicio = "0";
		//grafico estadistico
		for ($n=0;$n<$numero_tajadas;$n++)
			{	
					$valor_porcentual = ($porcentajes[$n] * 360) / $total;
					$this->valor_porcentual[$n] = $valor_porcentual;
				
					$orden_inicio = $inicio;
					$inicio = $valor_porcentual+$inicio;						
					imagefilledarc($this->image, 140, 150, $ancho_circular, $alto_circular, $orden_inicio, $inicio, $this->c[$n+1], IMG_ARC_PIE);
					$this->porcentual[$n] = number_format($porcentajes[$n] / $total*100,"1");
			}	
		
	}
	//Esta funcion valida si es que se mostrara una imagen o se creara un archivo
	public function imprimir_imagen($verdadero_falso)
	{
		if($verdadero_falso=="verdadero")
		{
			$this->mostrargrafica = true;
		}
		elseif($verdadero_falso=="falso")
		{
			$this->mostrargrafica = false;
		}
	}
	//funcion del nombre del archivo de salida
	public function archivo_salida($nombre_archivo_salida)
	{
		$this->nombre_imagen = $nombre_archivo_salida;
	}
	//Esta funcion llama a las demas funciones para crear la imagen o genera un grafico
	public function graficar()
	{
		if ($this->tipo=="jpeg")
			{
				if($this->mostrargrafica and $this->nombre_imagen != '')
				{
					$this->generador();
					$this->grafica_circular($this->porcentajes,$this->ancho_circular,$this->alto_circular);
					imagejpeg($this->image,$this->nombre_imagen);
				}
				else
				{
					$this->cabecera();
					$this->generador();
					$this->grafica_circular($this->porcentajes,$this->ancho_circular,$this->alto_circular);
					$this->leyenda_texto($this->leyenda_array);
					imagejpeg($this->image);
				}
				
			}
		elseif ($this->tipo=="png")
			{
				if($this->mostrargrafica and $this->nombre_imagen != '')
				{
					
					$this->generador();
					$this->grafica_circular($this->porcentajes,$this->ancho_circular,$this->alto_circular);
					imagepng($this->image,$this->nombre_imagen);
				}
				else
				{
					$this->cabecera();
					$this->generador();
					$this->grafica_circular($this->porcentajes,$this->ancho_circular,$this->alto_circular);
					$this->leyenda_texto($this->leyenda_array);					
					imagepng($this->image);
				}
				
			}
		elseif ($this->tipo=="gif")
			{
				if($this->mostrargrafica and $this->nombre_imagen != '')
				{
					$this->generador();
					$this->grafica_circular($this->porcentajes,$this->ancho_circular,$this->alto_circular);					
					imagegif($this->image,$this->nombre_imagen);
				}
				else
				{
					$this->cabecera();
					$this->generador();
					$this->grafica_circular($this->porcentajes,$this->ancho_circular,$this->alto_circular);
					$this->leyenda_texto($this->leyenda_array);
					imagegif($this->image);
				}
			}
		imagedestroy($this->image);
	}
	
	public function mostrar()
	{
		if($this->mostrargrafica and $this->nombre_imagen != '')
		{
			echo "<IMG SRC='".$this->nombre_imagen."'>";
		}
		
	}
	
	public function cuadro_leyenda()
	{
		imagerectangle($this->image, 320, 20, 480, $this->salto_numerico, imagecolorallocate($this->image, 0, 255, 0));
	}
	
	public function get_leyenda_texto($leyenda_array)
	{
		$this->leyenda_array = $leyenda_array;
	}
	
	public function leyenda_texto($leyenda)
	{
		//$cantidad_leyendas = count($texto_array);
		$repeticiones_leyenda = count($leyenda);
		$salto_numerico = "40";
		//$cantidad_leyendas = count($texto_array);
		for($i=0;$i<$repeticiones_leyenda;$i++)
		{
			imagefilledrectangle($this->image, 328, $salto_numerico-10, 337, $salto_numerico, $this->c[$i+1]);
			imagerectangle($this->image, 328,  $salto_numerico-10, 337, $salto_numerico, $this->c[21]);
			//imagettftext($this->image, 10, 0, 340, $salto_numerico, $this->c[21],'font/arial.ttf', $this->porcentual[$i]." % ".$leyenda[$i]);
			$salto_numerico = $salto_numerico + 20;
			$this->salto_numerico = $salto_numerico;
		}
		$this->cuadro_leyenda();
	}
}

?>

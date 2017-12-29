<?php 
$color_fondo = array("255", "255", "255");
$datos_estadistico = array("30","90","12");
$miimagen = new graficas("png",$color_fondo,"500","300");
$miimagen->set_grafica_circular($datos_estadistico,"200","150");
$miimagen->get_leyenda_texto(array("chenko","chenko1","chenko2"));
$miimagen->imprimir_imagen("falso");
$miimagen->archivo_salida("chenko.png");
$miimagen->graficar();
$miimagen->mostrar();

?>

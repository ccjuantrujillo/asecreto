<?php
class class_pagina{
var $link;
var $paginas;
function paginar($total,$porhoja,$url){
	$caracter=strstr($url,'?');
	$vark=($caracter=="" ? '?k=':'&k=');
	if(($total%$porhoja)=='0')
	{
		$this->paginas=($total/$porhoja);
	}
	else
	{
		$this->paginas=floor($total/$porhoja)+1;
	}
	for($j=0;$j<$this->paginas;$j++)
	{
		$k=$j+1;
		$this->link[$k]=$url.$vark.$k;
	}
}
function mostrar($mostrar,$presiono){

	$ver=$presiono-floor($mostrar/2);
	if($ver<='0'){$ver='1';}
	$suma=$ver+$mostrar;
	if(($suma)>$this->paginas){
	$maximo=$this->paginas;
	}else{
	$maximo=$ver+$mostrar;
	}
echo "<table border=\"0\">";
echo "<tr>";
	for($z=$ver;$z<=$maximo;$z++){
	if($z==$presiono){
	$colour="red";
	}else{
	$colour="";
	}
	$enlace=$this->link[$z];
echo "<td>";
	echo "<a href=\"$enlace\">";
	echo "<span class=\"m1\">";
	echo "<font color=$colour>";
	echo $z;
	echo "</font>";
	echo "</span>";
	echo "</a>";
echo "</td>
<?php  ?>";
	}
echo "<td>";
	$enlace=$this->link[$presiono+1];
	if($enlace!=''){
	echo "<a href=\"$enlace\">";
	echo "<span class=\"m1\">";
	//echo "Siguiente";
	echo "</span>";
	echo "</a>";
	}
echo "</td>";
echo "</tr>
";
echo "</table>";
}
}
?>

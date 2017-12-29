<?php
require_once "../../libreria/Html.class.php";
require_once "../../libreria/Upload.class.php";
require_once "../datos/DProducto.php";
class LProducto{
	private $oDAdmin;
	public function __construct(){
		$this->oDAdmin = new DProducto();		
	}
}
?>

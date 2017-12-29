<?php
require_once "../../libreria/BD.mysql.class.php";
class DProducto{
	private $cnx;
	private $oBD;
	public function __construct(){
		$this->oBD = new BD();
		$this->cnx = $this->oBD->cnx;	
	}
}
?>
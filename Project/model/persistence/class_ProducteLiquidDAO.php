<?php
include_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ProducteLiquidDAO {
    public function inserir($pLiquid) {		
	
		$query="insert into autor values('','','".$pLiquid->getCapacitatMl()."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
	} 
}
?>
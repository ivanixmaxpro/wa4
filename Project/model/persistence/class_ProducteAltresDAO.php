<?php
include_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ProducteAltresDAO {
    public function inserir($pAltres) {		
	
		$query="insert into autor values('','','".$pAltres->getUnitats()."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
	} 
}
?>
<?php
include_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ProveidorDAO {
    public function inserir($proveidor) {		
	
		$query="insert into autor values('',".$proveidor->getNom()."','".$proveidor->getCodi()."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
	} 
}
?>
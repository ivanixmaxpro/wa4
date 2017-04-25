<?php
include_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ClientDAO {
    public function inserir($client) {		
	
		$query="insert into autor values('',".$client->getNom()."','".$client->getCodi()."','".$client->getInformacio()."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
	} 
}
?>
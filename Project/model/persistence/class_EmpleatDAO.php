<?php
include_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class EmpleatDAO {
    public function inserir($empleat) {		
	
		$query="insert into autor values('".$empleat->getCognom()."','".$empleat->getDescripcio()."','".$empleat->getDni()."','','','".$empleat->getImatge()."','".$empleat->getLocalitat()."','".$empleat->getNom()."','".$empleat->getNomina()."','".$empleat->getNss()."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
	} 
}
?>
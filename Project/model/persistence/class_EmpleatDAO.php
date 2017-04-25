<?php
include_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class EmpleatDAO {
    public function inserir($empleat) {		
	
		$query="insert into autor values('','','".$empleat->getNom()."','".$empleat->getCognom()."','".$empleat->getDni()."','".$empleat->getLocalitat()."','".$empleat->getNomina()."','".$empleat->getNss()."','".$empleat->getImatge()."','".$empleat->getDescripcio()."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
	} 
}
?>
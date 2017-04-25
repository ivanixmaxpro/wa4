<?php
include_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class AlbaraCompraDAO {
    public function inserir($ac) {		
	
		$query="insert into autor values('','','','".$ac->getCodi()."','".$ac->getObservacions()."','".$ac->getPreu()."','".$ac->getData()."','".$ac->getLocalitat()."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
	} 
}
?>
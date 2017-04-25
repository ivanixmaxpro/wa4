<?php
include_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class MissatgeDAO {
    public function inserir($missatge) {		
	
		$query="insert into autor values('".$missatge->getData()."','','','".$missatge->getLlegit()."','".$missatge->getTitol()."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
	} 
}
?>
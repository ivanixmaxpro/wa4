<?php
include_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class FuncionalitatDAO {
    public function inserir($funcionalitat) {		
	
		$query="insert into funcionalitat values('','".$funcionalitat->getNom()."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
	} 
}
?>
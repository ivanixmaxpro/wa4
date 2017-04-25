<?php
include_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class PermisDAO {
    public function inserir($permis) {		
	
		$query="insert into autor values('','','','".$permis->getVisualitzar()."','".$permis->getCrear()."','".$permis->getEditar()."','".$permis->getEliminar()."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
	} 
}
?>

<?php
include_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class DetallsAlbaraVentaDAO {
    public function inserir($dav) {		
	
		$query="insert into detalls_albara_venta values('','" . $dav->getId_albara() . "','" . $dav->getId_producte() . "','".$dav->getQuantitat()."','".$dav->getPreu()."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
	} 
}
?>
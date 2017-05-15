<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ControlDAO {

    public function insert($control) {
        try {
            $con = new db();
            $query = $con->prepare("INSERT INTO control (id_usuari,fitxat,data) 
		        VALUES (:id_usuari, :fitxat, :data)");
            $query->bindValue(":id_usuari", $control->getId_usuari());
            $query->bindValue(":fitxat", $control->getFitxat());
            $query->bindValue(":data", $control->getData());
            $con->consulta($query);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
   

}

?>
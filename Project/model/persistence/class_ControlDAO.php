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

    public function filtrarControlUsuari($id_usuari) {
        $con = new db();
        $arrControlUsuari = array();
        $query = $con->prepare("SELECT * FROM control WHERE id_usuari = :id_usuari;");
        $query->bindValue(":id_usuari", $id_usuari);
        $result = $con->consultar($query);


        foreach ($result as $row) {
            $id_control = $row["id_control"];
            $id_usuari = $row["id_usuari"];
            $fitxat = $row["fitxat"];
            $data = $row["data"];
            $control = new Control($id_control, $id_usuari, $fitxat, $data);
            array_push($arrControlUsuari, $control);
        }
        $con = null;
        return $arrControlUsuari;
    }

}

?>
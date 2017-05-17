<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class EmpleatDAO {

        public function insertEmpleat($empleat) {

        try {
            $con = new db();
            $query = $con->prepare("INSERT INTO empleat (id_empresa,nom,cognom,dni,localitat,nomina,nss,imatge,descripcio) 
                VALUES (:id_empresa,:nom,:cognom,:dni,:localitat,:nomina,:nss,:imatge,:descripcio)");
            $query->bindValue(":id_empresa", $empleat->getId_empresa());
            $query->bindValue(":nom", $empleat->getNom());
            $query->bindValue(":cognom", $empleat->getCognom());
            $query->bindValue(":dni", $empleat->getDni());
            $query->bindValue(":localitat", $empleat->getLocalitat());
            $query->bindValue(":nomina", $empleat->getNomina());
            $query->bindValue(":nss", $empleat->getNss());
            $query->bindValue(":imatge", $empleat->getImatge());
            $query->bindValue(":descripcio", $empleat->getDescripcio());
            $con->consulta($query);
            return $con->lastInsertId();

        } catch (Exception $e) {
            die($e->getMessage());
        }
        $con = null;
    }

}

?>
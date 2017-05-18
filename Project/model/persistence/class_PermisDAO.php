<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class PermisDAO {

    public function updatePermis($permis) {
        $con = new db();

        $query = $con->prepare("UPDATE permis SET visualitzar = :visualitzar, crear  = :crear, editar = :editar, eliminar = :eliminar WHERE id_permis = :id_permis ;");
        $query->bindValue(":id_permis", $permis->getId_permis());
        $query->bindValue(":visualitzar", $permis->getVisualitzar());
        $query->bindValue(":crear", $permis->getCrear());
        $query->bindValue(":editar", $permis->getEditar());
        $query->bindValue(":eliminar", $permis->getEliminar());
        $con->consulta($query);
    }

    public function insertPermis($permis) {
        var_dump($permis);
        try {
            $con = new db();
            $query = $con->prepare("INSERT INTO permis (id_usuari,id_funcionalitat,visualitzar,crear,editar,eliminar) 
                VALUES (:id_usuari,:id_funcionalitat,:visualitzar,:crear,:editar,:eliminar)");
            $query->bindValue(":id_usuari", $permis->getId_usuari());
            $query->bindValue(":id_funcionalitat", $permis->getId_funcionalitat());
            $query->bindValue(":visualitzar", $permis->getVisualitzar());
            $query->bindValue(":crear", $permis->getCrear());
            $query->bindValue(":editar", $permis->getEditar());
            $query->bindValue(":eliminar", $permis->getEliminar());
            $con->consulta($query);
        } catch (Exception $e) {
            die($e->getMessage());
        }
        $con = null;
    }

}

?>

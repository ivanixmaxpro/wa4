<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class HorariDAO {

    public function updateHorari($horari) {
        $con = new db();

        $query = $con->prepare("UPDATE horari SET horaInici = :horaInici, horaFinal  = :horaFinal WHERE id_horari = :id_horari ;");
        $query->bindValue(":id_horari", $horari->getId_horari());
        $query->bindValue(":horaInici", $horari->getHoraInici());
        $query->bindValue(":horaFinal", $horari->getHoraFinal());
        $con->consulta($query);
    }
    
    public function insertHorari($horari) {

        try {
            $con = new db();
            $query = $con->prepare("INSERT INTO horari (id_usuari,id_dia,horaInici,horaFinal) 
                VALUES (:id_usuari,:id_dia,:horaInici,:horaFinal)");
            $query->bindValue(":id_usuari", $horari->getId_usuari());
            $query->bindValue(":id_dia", $horari->getId_dia());
            $query->bindValue(":horaInici", $horari->getHoraInici());
            $query->bindValue(":horaFinal", $horari->getHoraFinal());
            $con->consulta($query);
        } catch (Exception $e) {
            die($e->getMessage());
        }
        $con = null;
    }
}

?>
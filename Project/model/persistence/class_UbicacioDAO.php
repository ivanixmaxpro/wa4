<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class UbicacioDAO {

    public function updateUbicacio($quantitat,$id,$moure) {

        try {
            $con = new db();

            if ($moure == 'tenda') {
            $query = $con->prepare("UPDATE ubicacio SET quantitatTenda  = quantitatTenda + (:quantitat), quantitatStock  = quantitatStock - (:quantitat) WHERE id_ubicacio = :id_ubicacio");
            }
            if ($moure == 'stock') {
            $query = $con->prepare("UPDATE ubicacio SET quantitatTenda  = quantitatTenda - (:quantitat), quantitatStock  = quantitatStock + (:quantitat) WHERE id_ubicacio = :id_ubicacio");
            }
            $query->bindValue(":id_ubicacio", $id);
            $query->bindValue(":quantitat", $quantitat);


            $con->consulta($query);
        } catch (Exception $e) {
            die($e->getMessage());
        }
        $con = null;
    }

}

?>
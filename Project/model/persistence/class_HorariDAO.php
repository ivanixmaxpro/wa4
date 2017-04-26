<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class HorariDAO {

    public function inserir($horari) {

        $query = "insert into horari values('','" . $horari->getId_usuari() . "','" . $horari->getId_dia() . "','" . $horari->getHoraInici() . "','" . $horari->getHoraFinal() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>
<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class UbicacioDAO {

    public function inserir($ubi) {

        $query = "insert into ubicacio values(''," . $ubi->getQuantitatTenda() . "','" . $ubi->getQuantitatStock() . "','" . $ubi->getSituacio() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>
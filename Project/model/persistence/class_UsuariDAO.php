<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class UsuariDAO {

    public function inserir($usuari) {

        $query = "insert into usuari values('','" . $usuari->getId_empleat() . "','" . $usuari->getUsuari() . "','" . $usuari->getConstrasenya() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>
<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ControlDAO {

    public function inserir($control) {

        $query = "insert into control values('','" . $control->getId_usuari() . "','" . $control->getFitxat() . "','" . $control->getData() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>
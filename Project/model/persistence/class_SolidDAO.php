<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ProducteSemiSolidDAO {

    public function inserir($pSolid) {

        $query = "insert into solid values('','" . $pSolid->getId_producte() . "','" . $pSolid->getCapacitatMg() . "','" . $pSolid->getUnitats() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>

<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ProducteSemiSolidDAO {

    public function inserir($pSemiSolid) {

        $query = "insert into semisolid values('','" . $pSemiSolid->getId_producte() . "','" . $pSemiSolid->getCapacitatMg() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>
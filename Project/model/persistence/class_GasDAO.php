<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ProducteGasDAO {

    public function inserir($pGas) {

        $query = "insert into gas values('','" . $pGas->getId_producte() . "','" . $pGas->getCapacitatMl() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>

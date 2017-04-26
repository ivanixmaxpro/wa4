<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class AlbaraVentaDAO {

    public function inserir($av) {

        $query = "insert into albara_venta values('','" . $av->getId_client() . "','" . $av->getId_empresa() . "','" . $av->getCodi() . "','" . $av->getObservacions() . "','" . $av->getPreu() . "','" . $av->getData() . "','" . $av->getLocalitat() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>
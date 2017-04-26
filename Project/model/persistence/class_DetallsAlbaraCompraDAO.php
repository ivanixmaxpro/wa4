<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class DetallsAlbaraCompraDAO {

    public function inserir($dac) {

        $query = "insert into detalls_albara_compra values('','" . $dac->getId_albara() . "','" . $dac->getId_producte() . "','" . $dac->getQuantitat() . "','" . $dac->getPreu() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>
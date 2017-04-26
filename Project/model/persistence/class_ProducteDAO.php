<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ProducteDAO {

    public function inserir($producte) {

        $query = "insert into producte values('','" . $producte->getId_ubicacio() . "','" . $producte->getNom() . "','" . $producte->getMarca() . "','" . $producte->getPreuBase() . "','" . $producte->getReferencia() . "','" . $producte->getModel() . "','" . $producte->getDescripcio() . "','" . $producte->getConservarFred() . "','" . $producte->getImatge() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>

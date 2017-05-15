<?php

require_once("controller/function_AutoLoad.php");

class DetallAlbaraVenta {

    private $id_detalls_albara;
    private $id_albara;
    private $id_producte;
    private $quantitat;
    private $preu;

    function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 5:
                $this->setId_detalls_albara(func_get_args()[0]);
                $this->setId_albara(func_get_args()[1]);
                $this->setId_producte(func_get_args()[2]);
                $this->setQuantitat(func_get_args()[3]);
                $this->setPreu(func_get_args()[4]);
                break;
        }
    }

    function getId_detalls_albara() {
        return $this->id_detalls_albara;
    }

    function getId_albara() {
        return $this->id_albara;
    }

    function getId_producte() {
        return $this->id_producte;
    }

    function getQuantitat() {
        return $this->quantitat;
    }

    function getPreu() {
        return $this->preu;
    }

    function setId_detalls_albara($id_detalls_albara) {
        $this->id_detalls_albara = $id_detalls_albara;
    }

    function setId_albara($id_albara) {
        $this->id_albara = $id_albara;
    }

    function setId_producte($id_producte) {
        $this->id_producte = $id_producte;
    }

    function setQuantitat($quantitat) {
        $this->quantitat = $quantitat;
    }

    function setPreu($preu) {
        $this->preu = $preu;
    }

}

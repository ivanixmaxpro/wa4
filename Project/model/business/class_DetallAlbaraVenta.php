<?php

require_once("controller/function_AutoLoad.php");

class DetallAlbaraVenta {

    private $id_detalls_albara;
    private $id_albara;
    private $id_producte;
    private $quantitat;
    private $preu;

    function __construct($id_albara, $id_producte, $quantitat, $preu) {
        $this->setId_detalls_albara(null);
        $this->setId_albara($id_albara);
        $this->setId_producte($id_producte);
        $this->setQuantitat($quantitat);
        $this->setPreu($preu);
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

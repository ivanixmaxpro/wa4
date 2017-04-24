<?php

require_once("controller/function_AutoLoad.php");

class Proveidor {

    private $id_proveidor;
    private $nom;
    private $codi;

    function __construct($nom, $codi) {
        $this->setId_proveidor(null);
        $this->setNom($nom);
        $this->setCodi($codi);
    }

    function getId_proveidor() {
        return $this->id_proveidor;
    }

    function getNom() {
        return $this->nom;
    }

    function getCodi() {
        return $this->codi;
    }

    function setId_proveidor($id_proveidor) {
        $this->id_proveidor = $id_proveidor;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setCodi($codi) {
        $this->codi = $codi;
    }

}

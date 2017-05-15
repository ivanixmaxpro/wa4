<?php

require_once("controller/function_AutoLoad.php");

class Proveidor {

    private $id_proveidor;
    private $nom;
    private $codi;

    function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 3:
                $this->setId_proveidor(func_get_args()[0]);
                $this->setNom(func_get_args()[1]);
                $this->setCodi(func_get_args()[2]);
                break;
        }
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

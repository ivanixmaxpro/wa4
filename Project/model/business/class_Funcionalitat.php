<?php

require_once("controller/function_AutoLoad.php");

class Funcionalitat {

    private $id_funcionalita;
    private $nom;

    function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 1:
                $this->setNom(func_get_args()[0]);
                break;
            case 2:
                $this->setNom(func_get_args()[0]);
                $this->setId_funcionalita(func_get_args()[1]);
                break;
        }
    }

    function getId_funcionalita() {
        return $this->id_funcionalita;
    }

    function getNom() {
        return $this->nom;
    }

    function setId_funcionalita($id_funcionalita) {
        $this->id_funcionalita = $id_funcionalita;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

}

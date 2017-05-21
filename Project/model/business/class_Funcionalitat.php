<?php

require_once("controller/function_AutoLoad.php");

class Funcionalitat {

    private $id_funcionalitat;
    private $nom;

    function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 1:
                $this->setNom(func_get_args()[0]);
                break;
            case 2:
                $this->setId_funcionalitat(func_get_args()[0]);
                $this->setNom(func_get_args()[1]);
                break;
        }
    }

    function getId_funcionalitat() {
        return $this->id_funcionalitat;
    }

    function getNom() {
        return $this->nom;
    }

    function setId_funcionalitat($id_funcionalitat) {
        $this->id_funcionalitat = $id_funcionalitat;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

}

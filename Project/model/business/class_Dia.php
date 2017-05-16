<?php

require_once("controller/function_AutoLoad.php");

class Dia {

    private $id_dia;
    private $nom;

    function __construct($nom) {
        
           switch (func_num_args()) {
            case 0:
                break;
            case 2:
                $this->setId_dia(func_get_args()[0]);
                $this->setNom(func_get_args()[1]);
                break;
        }
    }

    function getId_dia() {
        return $this->id_dia;
    }

    function getNom() {
        return $this->nom;
    }

    function setId_dia($id_dia) {
        $this->id_dia = $id_dia;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

}

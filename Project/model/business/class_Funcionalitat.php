<?php

require_once("controller/function_AutoLoad.php");

class Funcionalitat {

    private $id_funcionalita;
    private $nom;

    function __construct($nom) {
        $this->setId_funcionalita(null);
        $this->setNom($nom);
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

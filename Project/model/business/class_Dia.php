<?php


class Dia{
    private $id_dia;
    private $nom;

    function __construct($nom) {
        $this->id_dia = null;
        $this->nom = $this->setNom($nom);
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



<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

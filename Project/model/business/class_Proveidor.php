<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

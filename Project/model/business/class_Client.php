<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Client {

    private $id_client;
    private $nom;
    private $codi;
    private $informacio;

    function __construct($nom, $codi, $informacio) {
        $this->setId_client(null);
        $this->setNom($nom);
        $this->setCodi($codi);
        $this->setInformacio($informacio);
    }

    function getId_client() {
        return $this->id_client;
    }

    function getNom() {
        return $this->nom;
    }

    function getCodi() {
        return $this->codi;
    }

    function getInformacio() {
        return $this->informacio;
    }

    function setId_client($id_client) {
        $this->id_client = $id_client;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setCodi($codi) {
        $this->codi = $codi;
    }

    function setInformacio($informacio) {
        $this->informacio = $informacio;
    }

}

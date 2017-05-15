<?php

require_once("controller/function_AutoLoad.php");

class Client {

    private $id_client;
    private $nom;
    private $codi;
    private $informacio;

    function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 3:
                $this->setId_client(null);
                $this->setNom(func_get_args()[0]);
                $this->setCodi(func_get_args()[1]);
                $this->setInformacio(func_get_args()[2]);
                break;
            case 4:
                $this->setId_client(func_get_args()[0]);
                $this->setNom(func_get_args()[1]);
                $this->setCodi(func_get_args()[2]);
                $this->setInformacio(func_get_args()[3]);
                break;
        }
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

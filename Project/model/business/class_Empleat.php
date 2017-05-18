<?php

require_once("controller/function_AutoLoad.php");

class Empleat {

    private $id_empleat;
    private $id_empresa;
    private $nom;
    private $cognom;
    private $dni;
    private $localitat;
    private $nomina;
    private $nss;
    private $imatge;
    private $descripcio;

    function __construct() {

        switch (func_num_args()) {
            case 0:
                break;
            case 9:
                $this->setId_empleat(null);
                $this->setId_empresa(func_get_args()[0]);
                $this->setNom(func_get_args()[1]);
                $this->setCognom(func_get_args()[2]);
                $this->setDni(func_get_args()[3]);
                $this->setLocalitat(func_get_args()[4]);
                $this->setNomina(func_get_args()[5]);
                $this->setNss(func_get_args()[6]);
                $this->setImatge(func_get_args()[7]);
                $this->setDescripcio(func_get_args()[8]);
                break;
        }
    }

    function getId_empleat() {
        return $this->id_empleat;
    }

    function getId_empresa() {
        return $this->id_empresa;
    }

    function getNom() {
        return $this->nom;
    }

    function getCognom() {
        return $this->cognom;
    }

    function getDni() {
        return $this->dni;
    }

    function getLocalitat() {
        return $this->localitat;
    }

    function getNomina() {
        return $this->nomina;
    }

    function getNss() {
        return $this->nss;
    }

    function getImatge() {
        return $this->imatge;
    }

    function getDescripcio() {
        return $this->descripcio;
    }

    function setId_empleat($id_empleat) {
        $this->id_empleat = $id_empleat;
    }

    function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setCognom($cognom) {
        $this->cognom = $cognom;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setLocalitat($localitat) {
        $this->localitat = $localitat;
    }

    function setNomina($nomina) {
        $this->nomina = $nomina;
    }

    function setNss($nss) {
        $this->nss = $nss;
    }

    function setImatge($imatge) {
        $this->imatge = $imatge;
    }

    function setDescripcio($descripcio) {
        $this->descripcio = $descripcio;
    }
    
    function addEmpleat(){
        $EmpleatDAO = new EmpleatDAO();
        $id_empleat = $EmpleatDAO->insertEmpleat($this);
        return $id_empleat;
    }
}

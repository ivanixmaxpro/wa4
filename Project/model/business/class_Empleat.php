<?php


require_once("controller/function_AutoLoad.php"); 	

class Empleat{
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
    
    function __construct($id_empresa, $nom, $cognom, $dni, $localitat, $nomina, $nss, $imatge, $descripcio) {
        $this->id_empleat = null;
        $this->id_empresa = $this->setId_empresa($id_empresa);
        $this->nom = $this->setNom($nom);
        $this->cognom = $this->setCognom($cognom);
        $this->dni = $this->setDni($dni);
        $this->localitat = $this->setLocalitat($localitat);
        $this->nomina = $this->setNomina($nomina);
        $this->nss = $this->setNss($nss);
        $this->imatge = $this->setImatge($imatge);
        $this->descripcio = $this->setDescripcio($descripcio);
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



    
    
}
  
    
    


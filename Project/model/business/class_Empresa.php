<?php

require_once("controller/function_AutoLoad.php"); 	

class Empresa{
    private $id_empresa;
    private $nom;
    
    
    function __construct($nom) {
        $this->id_empresa = null;
        $this->nom = $this->setNom($nom);
    }
    
    function getId_empresa() {
        return $this->id_empresa;
    }

    function getNom() {
        return $this->nom;
    }

    function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }



    
}
    

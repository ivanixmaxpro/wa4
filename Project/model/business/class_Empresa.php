<?php

require_once("controller/function_AutoLoad.php");

class Empresa {

    private $id_empresa;
    private $nom;

    function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 1:
                $this->setId_empresa(null);
                $this->setNom(func_get_args()[0]);
                break;
        }
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

    function recuperarEmpresa() {
        $EmpresaDAO = new EmpresaDAO();
        $dades = $EmpresaDAO->recuperarEmpresa();
        $this->setId_empresa($dades[0]);
        $this->setNom($dades[1]);
    }
    
    function populateEmpleats() {
        $EmpresaDAO = new EmpresaDAO();
        $empleats = $EmpresaDAO->populateEmpleats();
        return $empleats;
    }
}

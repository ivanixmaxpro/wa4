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

    function populateProductes() {
        $EmpresaDAO = new EmpresaDAO();
        $productes = $EmpresaDAO->populateProductes();
        return $productes;
    }

    function populateLiquid() {
        $EmpresaDAO = new EmpresaDAO();
        $productesLiquid = $EmpresaDAO->populateProductesLiquid();
        return $productesLiquid;
    }

    function populateAltres() {
        $EmpresaDAO = new EmpresaDAO();
        $productesAltre = $EmpresaDAO->populateProductesAltre();
        return $productesAltre;
    }

    function populateSemiSolid() {
        $EmpresaDAO = new EmpresaDAO();
        $productesSemiSolid = $EmpresaDAO->populateProductesSemiSolid();
        return $productesSemiSolid;
    }

    function populateSolid() {
        $EmpresaDAO = new EmpresaDAO();
        $productesSolid = $EmpresaDAO->populateProductesSolid();
        return $productesSolid;
    }

    function populateGas() {
        $EmpresaDAO = new EmpresaDAO();
        $productesGas = $EmpresaDAO->populateProductesGas();
        return $productesGas;
    }

    function searchEmpleat($id_empleat) {
        $EmpresaDAO = new EmpresaDAO();
        $empleat = $EmpresaDAO->searchEmpleat($id_empleat);
        return $empleat;
    }

    function cercarProducte($conservarenfred, $quantitat, $array) {
        $arrDeProductes = array();

        if (count($array) < $quantitat) {
            $quantitat = count($array);
        }

        for ($i = $quantitat; $i < count($array); $i--) {

            if ($conservarenfred == 1) {
                array_push($arrDeProductes, $array[$i]);
            } else if ($conservarenfred == 0) {
                array_push($arrDeProductes, $array[$i]);
            }
        }

        return $arrDeProductes;
    }

    function searchLastControl($id_usuari) {
        $EmpresaDAO = new EmpresaDAO();
        $control = $EmpresaDAO->searchLastControl($id_usuari);
        return $control;
    }

}

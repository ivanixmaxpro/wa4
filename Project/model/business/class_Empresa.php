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
    /**
     * Metode per cridar al DAO faci la consulata a la base de dades
     * @return array de proveidors
     */
    function populateProveidors(){
        $proveidorsDAO = new ProveidorDAO();
        $proveidors =  $proveidorsDAO->populateProveidors();
        return $proveidors;
    }
    
    function populateClients(){
        $clientDAO = new ClientDAO();
        $clients =  $clientDAO->populateClients();
        return $clients;
    }
    
    /**
     * Metodes per cridar al DAO i tenir la llista de missatges
     * @return array de missatges
     */
    function populateMissatges() {
        $missatgesDAO = new MissatgeDAO();
        $missatges = $missatgesDAO->populateMissatges();
        return $missatges;
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

    function searchProducte($id_producte) {
        $EmpresaDAO = new EmpresaDAO();
        $producte = $EmpresaDAO->searchProducte($id_producte);
        return $producte;
    }

    function searchEmpleat($id_empleat) {
        $EmpresaDAO = new EmpresaDAO();
        $empleat = $EmpresaDAO->searchEmpleat($id_empleat);
        return $empleat;
    }

    function filtrarProductes($conservarenfred, $quantitat, $tipus) {
        $EmpresaDAO = new EmpresaDAO();
        $resultatDelFiltre = $EmpresaDAO->filterProducte($conservarenfred, $quantitat, $tipus);
        return $resultatDelFiltre;
    }

    function searchLastControl($id_usuari) {
        $EmpresaDAO = new EmpresaDAO();
        $control = $EmpresaDAO->searchLastControl($id_usuari);
        return $control;
    }

    function showAllControl($id_usuari) {
        $EmpresaDAO = new EmpresaDAO();
        $control = $EmpresaDAO->searchAllControl($id_usuari);
        return $control;
    }

    function showHorari($id_usuari) {
        $EmpresaDAO = new EmpresaDAO();
        $horari = $EmpresaDAO->showHorari($id_usuari);
        return $horari;
    }


    function searchUsuariByEmpleat($id_empleat) {
        $EmpresaDAO = new EmpresaDAO();
        $usuari = $EmpresaDAO->searchUsuariByEmpleat($id_empleat);
        return $usuari;
    }
    
    
    function searchUbicacio($id_ubicacio) {
        $EmpresaDAO = new EmpresaDAO();
        $ubicacio = $EmpresaDAO->searchUbicacio($id_ubicacio);
        return $ubicacio;
    }
    
    function searchProducte($id_producte) {
        $EmpresaDAO = new EmpresaDAO();
        $producte = $EmpresaDAO->searchProducte($id_producte);
        return $producte;
    }
}

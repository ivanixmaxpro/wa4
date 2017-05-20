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
    function populateProveidors() {
        $proveidorsDAO = new ProveidorDAO();
        $proveidors = $proveidorsDAO->populateProveidors();
        return $proveidors;
    }

    /**
     * metode per consultar els clients a la base de dades
     * @return array de clients
     */
    function populateClients() {
        $clientDAO = new ClientDAO();
        $clients = $clientDAO->populateClients();
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

    function populateAlbaransVenta() {
        $EmpresaDAO = new EmpresaDAO();
        $albaransVenta = $EmpresaDAO->populateAlbaransVenta();
        return $albaransVenta;
    }

    function populateAlbaransCompra() {
        $EmpresaDAO = new EmpresaDAO();
        $albaransCompra = $EmpresaDAO->populateAlbaransCompra();
        return $albaransCompra;
    }

    function populateUsuaris() {
        $EmpresaDAO = new EmpresaDAO();
        $usuaris = $EmpresaDAO->populateUsuariDAO();
        return $usuaris;
    }

    function populateControl() {
        $EmpresaDAO = new EmpresaDAO();
        $control = $EmpresaDAO->populateControl();
        return $control;
    }

    function searchProducte($id_producte) {
        $EmpresaDAO = new EmpresaDAO();
        $producte = $EmpresaDAO->searchProducte($id_producte);
        return $producte;
    }

    function searchProveidorById($id_proveidor) {
        $EmpresaDAO = new EmpresaDAO();
        $proveidor = $EmpresaDAO->searchProveidorById($id_proveidor);
        return $proveidor;
    }

    function searchEmpleat($id_empleat) {
        $EmpresaDAO = new EmpresaDAO();
        $empleat = $EmpresaDAO->searchEmpleat($id_empleat);
        return $empleat;
    }

    function searchEmpleatByDNI($dni) {
        $EmpresaDAO = new EmpresaDAO();
        $empleat = $EmpresaDAO->searchEmpleatByDNI($dni);
        return $empleat;
    }

    function searchEmpleatByNSS($nss) {
        $EmpresaDAO = new EmpresaDAO();
        $empleat = $EmpresaDAO->searchEmpleatByNSS($nss);
        return $empleat;
    }
    
    function searchUsuariByNom($usuari){
        $EmpresaDAO = new EmpresaDAO();
        $usri = $EmpresaDAO->searchUsuariByNom($usuari);
        return $usri;
        
    }

    function searchAlbaraVenta($id_albaraVenta) {
        $EmpresaDAO = new EmpresaDAO();
        $albaraVentaComplet = $EmpresaDAO->searchAlbaraVenta($id_albaraVenta);
        return $albaraVentaComplet;
    }

    function searchAlbaraCompra($id_albaraCompra) {
        $EmpresaDAO = new EmpresaDAO();
        $albaraCompraComplet = $EmpresaDAO->searchAlbaraCompra($id_albaraCompra);
        return $albaraCompraComplet;
    }

    function filtrarProductes($conservarenfred, $quantitat, $tipus) {
        $EmpresaDAO = new EmpresaDAO();
        $resultatDelFiltre = $EmpresaDAO->filterProducte($conservarenfred, $quantitat, $tipus);
        return $resultatDelFiltre;
    }

    function filtrarControlUsuari($id_usuari) {
        $EmpresaDAO = new ControlDAO();
        $usuari = $EmpresaDAO->filtrarControlUsuari($id_usuari);
        return $usuari;
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

    function afegirProducte($producte, $tipusProdcute) {
        $EmpresaDAO = new EmpresaDAO();
        $EmpresaDAO->afegirProducte($producte, $tipusProdcute);
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

    function searchUbicacioById($id_ubicacio) {
        $EmpresaDAO = new EmpresaDAO();
        $ubicacio = $EmpresaDAO->searchUbicacioById($id_ubicacio);
        return $ubicacio;
    }

    function searchUsuariById($id_usuari) {
        $EmpresaDAO = new EmpresaDAO();
        $ubicacio = $EmpresaDAO->searchUsuariById($id_usuari);
        return $ubicacio;
    }

    function searchClientById($id_client) {
        $EmpresaDAO = new EmpresaDAO();
        $client = $EmpresaDAO->searchClientById($id_client);
        return $client;
    }

    function eliminarProducte($producte) {
        $EmpresaDAO = new EmpresaDAO();
        $EmpresaDAO->eliminarProducte($producte);
    }

    function searchUbicacio($id_ubicacio) {
        $EmpresaDAO = new EmpresaDAO();
        $ubicacio = $EmpresaDAO->searchUbicacio($id_ubicacio);
        return $ubicacio;
    }

    function searchProducteChilds($id_producte) {
        $EmpresaDAO = new EmpresaDAO();
        $producte = $EmpresaDAO->searchProducteChilds($id_producte);
        return $producte;
    }

    function updateProducte($producte, $type) {
        $EmpresaDAO = new EmpresaDAO();
        $EmpresaDAO->updateProducte($producte, $type);
    }

    function updateEmpleat($empleat) {
        $EmpresaDAO = new EmpresaDAO();
        $EmpresaDAO->updateEmpleat($empleat);
    }

    function searchPermissos($id_usuari) {
        $EmpresaDAO = new EmpresaDAO();
        $permisos = $EmpresaDAO->searchPermissos($id_usuari);
        return $permisos;
    }

    function searchHoraris($id_usuari) {
        $EmpresaDAO = new EmpresaDAO();
        $permisos = $EmpresaDAO->searchHoraris($id_usuari);
        return $permisos;
    }

    function populateDia() {
        $EmpresaDAO = new EmpresaDAO();
        $dies = $EmpresaDAO->populateDia();
        return $dies;
    }

    function populateFuncionalitats() {
        $EmpresaDAO = new EmpresaDAO();
        $funcionalitats = $EmpresaDAO->populateFuncionalitats();
        return $funcionalitats;
    }

}

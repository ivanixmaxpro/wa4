<?php

require_once("controller/function_AutoLoad.php");

class AlbaraCompra {

    private $id_albara;
    private $id_proveidor;
    private $id_empresa;
    private $codi;
    private $observacions;
    private $preu;
    private $data;
    private $localitat;

    function __construct() {
		switch (func_num_args()) {
            case 0:
                break;
            case 8:
                $this->setId_albara(func_get_args()[0]);
                $this->setId_proveidor(func_get_args()[1]);
                $this->setId_empresa(func_get_args()[2]);
                $this->setCodi(func_get_args()[3]);
                $this->setObservacions(func_get_args()[4]);
                $this->setPreu(func_get_args()[5]);
                $this->setData(func_get_args()[6]);
                $this->setLocalitat(func_get_args()[7]);
                break;
        }
    }

    function getId_albara() {
        return $this->id_albara;
    }

    function getId_proveidor() {
        return $this->id_proveidor;
    }

    function getId_empresa() {
        return $this->id_empresa;
    }

    function getCodi() {
        return $this->codi;
    }

    function getObservacions() {
        return $this->observacions;
    }

    function getPreu() {
        return $this->preu;
    }

    function getData() {
        return $this->data;
    }

    function getLocalitat() {
        return $this->localitat;
    }

    function setId_albara($id_albara) {
        $this->id_albara = $id_albara;
    }

    function setId_proveidor($id_proveidor) {
        $this->id_proveidor = $id_proveidor;
    }

    function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }

    function setCodi($codi) {
        $this->codi = $codi;
    }

    function setObservacions($observacions) {
        $this->observacions = $observacions;
    }

    function setPreu($preu) {
        $this->preu = $preu;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setLocalitat($localitat) {
        $this->localitat = $localitat;
    }
	
	function insertAlbara($campProveidor, $campEmpresa, $campCodi, $campObservacions, $campPreu, $campData, $campLocalitat, $arrProductesDelAlbara) {
        $albaraVentaDAO = new AlbaraCompraDAO();
        $albaraVentaDAO->insertAlbara($campProveidor, $campEmpresa, $campCodi, $campObservacions, $campPreu, $campData, $campLocalitat, $arrProductesDelAlbara);
    }

}

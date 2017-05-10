<?php

require_once("controller/function_AutoLoad.php");

class AlbaraVenta {

    private $id_albara;
    private $id_client;
    private $id_empresa;
    private $codi;
    private $observacions;
    private $preu;
    private $data;
    private $localitat;

    function __construct() { //$id_client, $id_empresa, $codi, $observacions, $preu, $data, $localitat
//        $this->setId_albara(null);
//        $this->setId_client($id_client);
//        $this->setId_empresa($id_empresa);
//        $this->setCodi($codi);
//        $this->setObservacions($observacions);
//        $this->setPreu($preu);
//        $this->setData($data);
//        $this->setLocalitat($localitat);
        switch (func_num_args()) {
            case 0:
                break;
//            case 3:
//                $this->setId_client(null);
//                $this->setNom(func_get_args()[0]);
//                $this->setCodi(func_get_args()[1]);
//                $this->setInformacio(func_get_args()[2]);
//                break;
//            case 4:
//                $this->setId_client(func_get_args()[0]);
//                $this->setNom(func_get_args()[1]);
//                $this->setCodi(func_get_args()[2]);
//                $this->setInformacio(func_get_args()[3]);
//                break;
        }
    }

    function getId_albara() {
        return $this->id_albara;
    }

    function getId_client() {
        return $this->id_client;
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

    function setId_client($id_client) {
        $this->id_client = $id_client;
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

    function insertAlbara($campClient, $campEmpresa, $campCodi, $campObservacions, $campPreu, $campData, $campLocalitat, $arrProductesDelAlbara) {
        $albaraVentaDAO = new AlbaraVentaDAO();
        $albaraVentaDAO->insertAlbara($campClient, $campEmpresa, $campCodi, $campObservacions, $campPreu, $campData, $campLocalitat, $arrProductesDelAlbara);
    }

}

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

    function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 8:
                $this->setId_albara(func_get_args()[0]);
                $this->setId_client(func_get_args()[1]);
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

    /**
     * metode per validar que els parametres son correctes
     * @return objecte Validation
     */
    function validateAlbara() {
        $validation = new Validation(true, '');
        $validation->setMsg("Has afegit correctament l'albarà de venta.");
        if ($this->getId_empresa() == "-") {
            $validation->setMsg("Has d'escollir un client.");
            $validation->setOK(false);
        }

        if ($validation->getOk() && trim($this->getCodi()) == '') {
            $validation->setMsg("El camp codi no pot està buit.");
            $validation->setOK(false);
        }
        if ($validation->getOk() && trim($this->getObservacions()) == '') {
            $validation->setMsg("El camp observacions no pot està buit.");
            $validation->setOK(false);
        }
        if ($validation->getOk() && trim($this->getLocalitat()) == '') {
            $validation->setMsg("El camp localitat no pot està buit.");
            $validation->setOK(false);
        }
        if ($validation->getOk() && $this->getPreu() <= 0) {
            $validation->setMsg("No hi han productes a l'albarà.");
            $validation->setOK(false);
        }

        return $validation;
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AlbaraCompra {

    private $id_albara;
    private $id_proveidor;
    private $id_empresa;
    private $codi;
    private $observacions;
    private $preu;
    private $data;
    private $localitat;

    function __construct($id_proveidor, $id_empresa, $codi, $observacions, $preu, $data, $localitat) {
        $this->setId_albara(null);
        $this->setId_client($id_proveidor);
        $this->setId_empresa($id_empresa);
        $this->setCodi($codi);
        $this->setObservacions($observacions);
        $this->setPreu($preu);
        $this->setData($data);
        $this->setLocalitat($localitat);
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

}

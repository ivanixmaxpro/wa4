<?php

require_once("controller/function_AutoLoad.php");

class Control {

    private $id_control;
    private $id_usuari;
    private $fitxat;
    private $data;

    function __construct($id_usuari, $fitxat, $data) {
        $this->setId_control(null);
        $this->setId_usuari($id_usuari);
        $this->setFitxat($fitxat);
        $this->setData($data);
    }

    function getId_control() {
        return $this->id_control;
    }

    function getId_usuari() {
        return $this->id_usuari;
    }

    function getFitxat() {
        return $this->fitxat;
    }

    function getData() {
        return $this->data;
    }

    function setId_control($id_control) {
        $this->id_control = $id_control;
    }

    function setId_usuari($id_usuari) {
        $this->id_usuari = $id_usuari;
    }

    function setFitxat($fitxat) {
        $this->fitxat = $fitxat;
    }

    function setData($data) {
        $this->data = $data;
    }

}

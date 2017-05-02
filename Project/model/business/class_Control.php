<?php

require_once("controller/function_AutoLoad.php");

class Control {

    private $id_control;
    private $id_usuari;
    private $fitxat;
    private $data;

    function __construct() {
        switch (func_num_args()) {
            case 0:
                $this->setId_control(null);
                $this->setId_usuari(null);
                $this->setFitxat(null);
                $this->setData(null);
                break;
            case 3:
                $this->setId_control(null);
                $this->setId_usuari(func_get_args()[0]);
                $this->setFitxat(func_get_args()[1]);
                $this->setData(func_get_args()[2]);
                break;
            case 4:
                $this->setId_control(func_get_args()[0]);
                $this->setId_usuari(func_get_args()[1]);
                $this->setFitxat(func_get_args()[2]);
                $this->setData(func_get_args()[3]);
                break;
        }
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

    function insert() {
        $ControlDAO = new ControlDAO();
        $ControlDAO->insert($this);
    }

}

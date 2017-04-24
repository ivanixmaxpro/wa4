<?php

require_once("controller/function_AutoLoad.php");

class Missatge {

    private $id_missatge;
    private $id_usuari;
    private $llegit;
    private $titol;
    private $data;
    private $missatge;

    function __construct($id_usuari, $llegit, $titol, $data, $missatge) {
        $this->setId_missatge(null);
        $this->setId_usuari($id_usuari);
        $this->setLlegit($llegit);
        $this->setTitol($titol);
        $this->setData($data);
        $this->setMissatge($missatge);
    }

    function getId_missatge() {
        return $this->id_missatge;
    }

    function getId_usuari() {
        return $this->id_usuari;
    }

    function getLlegit() {
        return $this->llegit;
    }

    function getTitol() {
        return $this->titol;
    }

    function getData() {
        return $this->data;
    }

    function getMissatge() {
        return $this->missatge;
    }

    function setId_missatge($id_missatge) {
        $this->id_missatge = $id_missatge;
    }

    function setId_usuari($id_usuari) {
        $this->id_usuari = $id_usuari;
    }

    function setLlegit($llegit) {
        $this->llegit = $llegit;
    }

    function setTitol($titol) {
        $this->titol = $titol;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setMissatge($missatge) {
        $this->missatge = $missatge;
    }

}

<?php

require_once("controller/function_AutoLoad.php");

class Usuari {

    private $id_usuari;
    private $id_empleat;
    private $usuari;
    private $contrasenya;

    function __construct($id_empleat, $usuari, $contrasenya) {
        $this->setId_usuari(null);
        $this->setId_empleat($id_empleat);
        $this->setUsuari($usuari);
        $this->setContrasenya($contrasenya);
    }

    function getId_usuari() {
        return $this->id_usuari;
    }

    function getId_empleat() {
        return $this->id_empleat;
    }

    function getUsuari() {
        return $this->usuari;
    }

    function getContrasenya() {
        return $this->contrasenya;
    }

    function setId_usuari($id_usuari) {
        $this->id_usuari = $id_usuari;
    }

    function setId_empleat($id_empleat) {
        $this->id_empleat = $id_empleat;
    }

    function setUsuari($usuari) {
        $this->usuari = $usuari;
    }

    function setContrasenya($contrasenya) {
        $this->contrasenya = $contrasenya;
    }

}

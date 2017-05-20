<?php

require_once("controller/function_AutoLoad.php");

class Usuari {

    private $id_usuari;
    private $id_empleat;
    private $usuari;
    private $contrasenya;

    public function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 1:
                $this->setUsuari(func_get_args()[0]);
                break;
            case 3:
                $this->setId_empleat(func_get_args()[0]);
                $this->setUsuari(func_get_args()[1]);
                $this->setContrasenya(func_get_args()[2]);
                break;
            case 4:
                $this->setId_usuari(func_get_args()[0]);
                $this->setId_empleat(func_get_args()[1]);
                $this->setUsuari(func_get_args()[2]);
                $this->setContrasenya(func_get_args()[3]);
                break;
        }
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

//
//    function populateUsuaris() {
//        $usuariDAO = new UsuariDAO();
//        return $llistaUsuaris = $usuariDAO->populateUsuariDAO();
//    }

    function validateUser($usuari, $clau) {
        $validat = false;
        $usuariDAO = new UsuariDAO();
        if (!trim($usuari) == '' && !trim($clau) == '') {
            $usuari_trobat = $usuariDAO->searchUsuari($usuari);
            if ($usuari_trobat != null) {
                if ($usuari_trobat->getUsuari() && password_verify($clau, $usuari_trobat->getContrasenya())) {
                    $validat = true;
                    $this->setId_usuari($usuari_trobat->getId_usuari());
                    $this->setId_empleat($usuari_trobat->getId_empleat());
                }
            }
        }
        return $validat;
    }

    function updateContrasenya() {
        $UsuariDAO = new UsuariDAO();
        $UsuariDAO->updateContrasenya($this->getId_usuari(), $this->getContrasenya());
    }
    
    function addUsuari(){
        $UsuariDAO = new UsuariDAO();
        $id_usuari = $UsuariDAO->insertUsuari($this);
        return $id_usuari;
    }
    /**
     * 
     */
    function validateNewUser(){
        
    }

}

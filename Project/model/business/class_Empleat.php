<?php

require_once("controller/function_AutoLoad.php");

class Empleat {

    private $id_empleat;
    private $id_empresa;
    private $nom;
    private $cognom;
    private $dni;
    private $localitat;
    private $nomina;
    private $nss;
    private $imatge;
    private $descripcio;

    function __construct() {

        switch (func_num_args()) {
            case 0:
                break;
            case 9:
                $this->setId_empleat(null);
                $this->setId_empresa(func_get_args()[0]);
                $this->setNom(func_get_args()[1]);
                $this->setCognom(func_get_args()[2]);
                $this->setDni(func_get_args()[3]);
                $this->setLocalitat(func_get_args()[4]);
                $this->setNomina(func_get_args()[5]);
                $this->setNss(func_get_args()[6]);
                $this->setImatge(func_get_args()[7]);
                $this->setDescripcio(func_get_args()[8]);
                break;
        }
    }

    function getId_empleat() {
        return $this->id_empleat;
    }

    function getId_empresa() {
        return $this->id_empresa;
    }

    function getNom() {
        return $this->nom;
    }

    function getCognom() {
        return $this->cognom;
    }

    function getDni() {
        return $this->dni;
    }

    function getLocalitat() {
        return $this->localitat;
    }

    function getNomina() {
        return $this->nomina;
    }

    function getNss() {
        return $this->nss;
    }

    function getImatge() {
        return $this->imatge;
    }

    function getDescripcio() {
        return $this->descripcio;
    }

    function setId_empleat($id_empleat) {
        $this->id_empleat = $id_empleat;
    }

    function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setCognom($cognom) {
        $this->cognom = $cognom;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setLocalitat($localitat) {
        $this->localitat = $localitat;
    }

    function setNomina($nomina) {
        $this->nomina = $nomina;
    }

    function setNss($nss) {
        $this->nss = $nss;
    }

    function setImatge($imatge) {
        $this->imatge = $imatge;
    }

    function setDescripcio($descripcio) {
        $this->descripcio = $descripcio;
    }

    function addEmpleat() {
        $EmpleatDAO = new EmpleatDAO();
        $id_empleat = $EmpleatDAO->insertEmpleat($this);
        return $id_empleat;
    }

    /**
     * funcio per validar per php un dni
     * @param type $dni
     * @return boolean
     */
    public function validarDni($dni) {
        $letraExt = substr($dni, -1);
        $letra = strtoupper($letraExt);
        $numeros = substr($dni, 0, -1);
        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letra && strlen($letra) == 1 && strlen($numeros) == 8) {
            return true;
        } else {
            return false;
            
        }
    }

    /**
     * funcio per validar per php que tots els cmaps de un empleat son correctes
     * @return \objecte Validation
     */
    public function validateEmpleat() {
        
        
        $validation = new Validation(true, '');
        $patroLletres = "/^[a-zA-Z]+$/i";
        $patroNum = "/^[[:digit:]]+$/";

        if ($validation->getOk() && trim($this->getNom()) == '') {
            $validation->setMsg("nom esta buit");
            $validation->setOK(false);
        }
        if ($validation->getOk() && !preg_match($patroLletres, trim($this->getNom()))) {
            $validation->setMsg("nom només poden ser lletres");
            $validation->setOK(false);
        }
        if ($validation->getOk() && trim($this->getCognom()) == '') {
            $validation->setMsg("cognom esta buit");
            $validation->setOK(false);
        }
        if ($validation->getOk() && !preg_match($patroLletres, trim($this->getCognom()))) {
            $validation->setMsg("cognom només poden ser lletres");
            $validation->setOK(false);
        }

        if ($validation->getOk() && trim($this->getDni()) == '') {
            $validation->setMsg("dni esta buit");
            $validation->setOK(false);
        }
        if ($validation->getOk() && !$this->validarDni($this->getDni())) {
            $validation->setMsg("dni no vàlid");
            $validation->setOK(false);
        }

        if ($validation->getOk() && trim($this->getLocalitat()) == '') {
            $validation->setMsg("camp localitat esta buit");
            $validation->setOK(false);
        }

        if ($validation->getOk() && trim($this->getNomina()) == '') {
            $validation->setMsg("camp nomina esta buit");
            $validation->setOK(false);
        }

        if ($validation->getOk() && preg_match($patroNum, trim($this->getNomina())) == '') {
            $validation->setMsg("nomina només poden ser numeros");
            $validation->setOK(false);
        }

        if ($validation->getOk() && trim($this->getNss()) == '') {
            $validation->setMsg("camp nss esta buit");
            $validation->setOK(false);
        }

        if ($validation->getOk() && !$this->validateNss($this->getNss())) {
            $validation->setMsg("nss no vàlid");
            $validation->setOK(false);
        }


        return $validation;
    }

    /**
     * funcrio per validar per php el nss
     * @param type $nss
     * @return boolean
     */
    function validateNss($nss) {
        $nss = preg_replace("/[^0-9]/i", "", $nss); //número S.S. entero

        if (strlen($nss) == 12) {
            $na = substr($nss, 0, 2);
            $nb = substr($nss, 2, 8);
            $nc = substr($nss, 10, 2);
        }
        //Si falta alguno de los dígitos da error
        if ($na && $nb && $nc) {

            //Si el número es menor de 10 millones
            if ($nb < 10000000) {

                //Asignamos a d la suma de b+a * 10 millones
                $nd = $nb + $na * 10000000;

                //Si el número es mayor de 10 millones
            } else {

                //Asignamos a d la concatenación de a y b
                $nd = $na . $nb;
            }

            //El código de validación ($c), 
            //debe ser el resto de la división d entre 97
            $validacion = $nd % 97;

            //Muestra el resultado de la validación
            if ($validacion == $nc) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    

}

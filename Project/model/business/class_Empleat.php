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
        $validation->setMsg("Has afegit correctament l'empleat.");
        $patroLletres = "/^[a-zA-Z\s]+$/i";
        $patroNum = "/^[[:digit:]]+$/";
        
         $validation->setMsg("empleat afegit correctament");

        if ($validation->getOk() && trim($this->getNom()) == '') {
            $validation->setMsg("El nom no pot està buit.");
            $validation->setOK(false);
        }
        if ($validation->getOk() && !preg_match($patroLletres, trim($this->getNom()))) {
            $validation->setMsg("El nom ha de ser alfabètic.");
            $validation->setOK(false);
        }
        if ($validation->getOk() && trim($this->getCognom()) == '') {
            $validation->setMsg("El cognom no pot està buit.");
            $validation->setOK(false);
        }
        if ($validation->getOk() && !preg_match($patroLletres, trim($this->getCognom()))) {
            $validation->setMsg("El cognom ha de ser alfabètic.");
            $validation->setOK(false);
        }

        if ($validation->getOk() && trim($this->getDni()) == '') {
            $validation->setMsg("El DNI no pot està buit.");
            $validation->setOK(false);
        }
        if ($validation->getOk() && !$this->validarDni($this->getDni())) {
            $validation->setMsg("El DNI no és vàlid.");
            $validation->setOK(false);
        }

        if ($validation->getOk() && trim($this->getLocalitat()) == '') {
            $validation->setMsg("El camp localitat no pot està buit.");
            $validation->setOK(false);
        }

        if ($validation->getOk() && trim($this->getNomina()) == '') {
            $validation->setMsg("El camp nòmina no pot està buit.");
            $validation->setOK(false);
        }

        if ($validation->getOk() && preg_match($patroNum, trim($this->getNomina())) == '') {
            $validation->setMsg("El camp nòmina ha de ser númeric.");
            $validation->setOK(false);
        }

        if ($validation->getOk() && trim($this->getNss()) == '') {
            $validation->setMsg("El camp Nº Seguretat Social no pot està buit.");
            $validation->setOK(false);
        }

        if ($validation->getOk() && !$this->validateNss($this->getNss())) {
            $validation->setMsg("El Nº Seguretat Social no és vàlid.");
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
        //$nssBo = preg_replace("/[^0-9]/i", "", $nss); //número S.S.
        if (preg_match("/^[0-9]{12}$/", $nss)) {
            $numsSenseControl = substr($nss, 0, 10);
            $numsControl = (int)substr($nss, 10, 12);

            if (substr($numsSenseControl, 2, 1) == 0) {
                $operan1 = substr($numsSenseControl, 0, 2);
                $operant2 = substr($numsSenseControl, 3, 10);
                $numsSenseControl = $operan1 . $operant2;
            }

            //El código de validación ($c), 
            //debe ser el resto de la división d entre 97
            //3961204658 % 97;
           $validacion = $numsSenseControl % 97;

            if ($validacion < 10) {
                $validacion = "0" . $validacion;
            }
            
            //Muestra el resultado de la validación
            if ($validacion == $numsControl) {
                return true;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }

}

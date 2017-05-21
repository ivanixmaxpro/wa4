<?php

require_once("controller/function_AutoLoad.php");

class Semisolid extends Producte {

    private $capacitatMg;
    private $id_semiSolid;

    function __construct() { /* Provar de quitar el primer constructor, 
      aver si no es necesario i solo con el heretado
      funciona */
        parent::__construct();
        switch (func_num_args()) {
            case 0:
                break;
            case 9:
                parent::setNom(func_get_args()[0]);
                parent::setMarca(func_get_args()[1]);
                parent::setPreuBase(func_get_args()[2]);
                parent::setReferencia(func_get_args()[3]);
                parent::setModel(func_get_args()[4]);
                parent::setDescripcio(func_get_args()[5]);
                parent::setConservarFred(func_get_args()[6]);
                parent::setImatge(func_get_args()[7]);
                $this->setCapacitatMg(func_get_args()[8]);
                break;
            case 12:
                parent::setId_producte(func_get_args()[0]);
                parent::setId_ubicacio(func_get_args()[1]);
                parent::setNom(func_get_args()[2]);
                parent::setMarca(func_get_args()[3]);
                parent::setPreuBase(func_get_args()[4]);
                parent::setReferencia(func_get_args()[5]);
                parent::setModel(func_get_args()[6]);
                parent::setDescripcio(func_get_args()[7]);
                parent::setConservarFred(func_get_args()[8]);
                parent::setImatge(func_get_args()[9]);
                $this->setId_semiSolid(func_get_args()[10]);
                $this->setCapacitatMg(func_get_args()[11]);
                break;
        }
    }

    function getId_semiSolid() {
        return $this->id_semiSolid;
    }

    function setId_semiSolid($id_semiSolid) {
        $this->id_semiSolid = $id_semiSolid;
    }

    function getCapacitatMg() {
        return $this->capacitatMg;
    }

    function setCapacitatMg($capacitatMg) {
        $this->capacitatMg = $capacitatMg;
    }

    public function validateProduct() {
        $patroNum = "/^[[:digit:]]+$/";
        $patroPreu = "/^\d+([\.|\,]{1}\d{1,2}){0,1}$/";
        $validation = new Validation(true, '');
        $validation->setMsg("El producte s'ha afegit correctament.");

        if ($validation->getOk() && trim($this->getNom()) == '') {
            $validation->setOk(false);
            $validation->setMsg("El camp nom no pot està buit.");
        }
        if ($validation->getOk() && trim($this->getMarca()) == '') {
            $validation->setOk(false);
            $validation->setMsg("El camp marca no pot està buit.");
        }
        if ($validation->getOk() && preg_match($patroPreu, trim($this->getPreuBase())) == '') {
            $validation->setOk(false);
            $validation->setMsg("L'import ha de ser númeric.");
        }
        if ($validation->getOk() && !$this->validatePrice()) {
            $validation->setOk(false);
            $validation->setMsg("L'import ha de ser superior a 0.");
        }
        if ($validation->getOk() && trim($this->getReferencia()) == '') {
            $validation->setMsg("El camp referència no pot està buit.");
            $validation->setOK(false);
        }
        if ($validation->getOk() && preg_match($patroNum, trim($this->getReferencia())) == '') {
            $validation->setMsg("La referència ha de ser nùmeric.");
            $validation->setOK(false);
        }
        if ($validation->getOk() && trim($this->getModel()) == '') {
            $validation->setMsg("El camp model no pot està buit.");
            $validation->setOK(false);
        }
        if ($validation->getOk() && trim($this->getDescripcio()) == '') {
            $validation->setMsg("El camp descripció no pot està buit.");
            $validation->setOK(false);
        }

        if ($validation->getOk() && trim($this->getCapacitatMg()) == '') {
            $validation->setMsg("El camp capacitatMg no pot està buit.");
            $validation->setOK(false);
        }
        if ($validation->getOk() && preg_match($patroNum, trim($this->getCapacitatMg())) == '') {
            $validation->setMsg("La capacitatMg ha de ser nùmeric.");
            $validation->setOK(false);
        }
        return $validation;
    }

}

?>
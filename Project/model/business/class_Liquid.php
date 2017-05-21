<?php

require_once("controller/function_AutoLoad.php");

class Liquid extends Producte {

    private $id_liquid;
    private $capacitatMl;

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
                $this->setCapacitatMl(func_get_args()[8]);
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
                $this->setId_liquid(func_get_args()[10]);
                $this->setCapacitatMl(func_get_args()[11]);
                break;
        }
    }

    function getId_liquid() {
        return $this->id_liquid;
    }

    function setId_liquid($id_liquid) {
        $this->id_liquid = $id_liquid;
    }

    function getCapacitatMl() {
        return $this->capacitatMl;
    }

    function setCapacitatMl($capacitatMl) {
        $this->capacitatMl = $capacitatMl;
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

        if ($validation->getOk() && trim($this->getCapacitatMl()) == '') {
            $validation->setMsg("El camp capacitatMl no pot està buit.");
            $validation->setOK(false);
        }
        if ($validation->getOk() && preg_match($patroNum, trim($this->getCapacitatMl())) == '') {
            $validation->setMsg("La capacitatMl ha de ser nùmeric.");
            $validation->setOK(false);
        }
        return $validation;
    }

}

?>
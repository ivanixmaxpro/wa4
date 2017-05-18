<?php

require_once("controller/function_AutoLoad.php");

class Altres extends Producte {

    private $id_altres;
    private $unitats;

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
                $this->setUnitats(func_get_args()[8]);
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
                $this->setId_altres(func_get_args()[10]);
                $this->setUnitats(func_get_args()[11]);
                break;
        }
    }

    function getId_altres() {
        return $this->id_altres;
    }

    function getUnitats() {
        return $this->unitats;
    }

    function setId_altres($id_altres) {
        $this->id_altres = $id_altres;
    }

    function setUnitats($unitats) {
        $this->unitats = $unitats;
    }

    public function validateProduct() {
        $patroNum ="/^[[:digit:]]+$/";
       $validation = new Validation(true, '');
        $validation->setMsg("producte afegit correctament");

        if ($validation->getOk() && trim($this->getNom()) == '') {
            $validation->setOk(false);
            $validation->setMsg("camp Nom esta buit");
        }
        if ($validation->getOk() && trim($this->getMarca()) == '') {
            $validation->setOk(false);
            $validation->setMsg("camp Marca esta buit");
        }
        if ($validation->getOk() && preg_match($patroNum,trim($this->getPreuBase())) == '') {
            $validation->setOk(false);
            $validation->setMsg("import preu ha de ser un num");
        }
        if ($validation->getOk() && !$this->validatePrice()) {
            $validation->setOk(false);
            $validation->setMsg("import preu ha de ser superior a 0");
        }
        if ($validation->getOk() && trim($this->getReferencia()) == '') {
            $validation->setMsg("referencia esta buida");
            $validation->setOK(false);
        }
         if ($validation->getOk() && preg_match($patroNum,trim($this->getReferencia())) == '') {
            $validation->setMsg("referencia només poden ser numeros");
            $validation->setOK(false);
        }
        if ($validation->getOk() && trim($this->getModel()) == '') {
            $validation->setMsg("model esta buit");
            $validation->setOK(false);
        }
         if ($validation->getOk() && trim($this->getDescripcio()) == '') {
            $validation->setMsg("descripcio esta buida");
            $validation->setOK(false);
        }
        if ($validation->getOk() && trim($this->getUnitats()) == '') {
            $validation->setMsg("referencia esta buida");
            $validation->setOK(false);
        }
        if ($validation->getOk() && preg_match($patroNum, trim($this->getUnitats())) == '') {
            $validation->setMsg("referencia només poden ser numeros");
            $validation->setOK(false);
        }
        return $validation;
    }

}

?>
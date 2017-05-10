<?php

require_once("controller/function_AutoLoad.php");

class Liquid extends Producte {

    private $capacitatMl;
    private $id_liquid;

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

}

?>
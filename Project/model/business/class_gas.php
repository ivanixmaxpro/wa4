<?php
require_once("controller/function_AutoLoad.php");

class Gas extends Producte {
    private $capacitatMl;
    private $id_gas;
    
    function __construct($conservarFred,$descripcio,$id_producte,$id_ubicacio,$imatge,$marca,$model,$nom,$preuBase,$referencia,$id_gas,$capacitatMl) {
        parent::__construct($conservarFred,$descripcio,$id_producte,$id_ubicacio,$imatge,$marca,$model,$nom,$preuBase,$referencia);
        $this->capacitatMl = $capacitatMl;
        $this->id_gas = $id_gas;
    }
    
    function getCapacitatMl() {
        return $this->capacitatMl;
    }

    function getId_gas() {
        return $this->id_gas;
    }

    function setCapacitatMl($capacitatMl) {
        $this->capacitatMl = $capacitatMl;
    }

    function setId_gas($id_gas) {
        $this->id_gas = $id_gas;
    }


}
?>

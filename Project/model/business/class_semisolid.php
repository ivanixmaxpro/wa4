<?php
require_once("controller/function_AutoLoad.php");

class SemiSolid extends Producte {
    private $capacitatMg;
    private $id_semiSolid;
    
    function __construct($conservarFred,$descripcio,$id_producte,$id_ubicacio,$imatge,$marca,$model,$nom,$preuBase,$referencia,$id_semiSolid,$capacitatMg) {
        parent::__construct($conservarFred,$descripcio,$id_producte,$id_ubicacio,$imatge,$marca,$model,$nom,$preuBase,$referencia);
        $this->capacitatMg = $capacitatMg;
        $this->id_semiSolid = $id_semiSolid;
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


}
?>
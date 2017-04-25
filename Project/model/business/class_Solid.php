<?php
require_once("controller/function_AutoLoad.php");

class Solid extends Producte {
    private $capacitatMg;
    private $id_solid;
    private $unitats;
    
    function __construct($conservarFred,$descripcio,$id_producte,$id_ubicacio,$imatge,$marca,$model,$nom,$preuBase,$referencia,$capacitatMg, $id_solid, $unitats) {
        parent::__construct($conservarFred,$descripcio,$id_producte,$id_ubicacio,$imatge,$marca,$model,$nom,$preuBase,$referencia);
        $this->capacitatMg = $capacitatMg;
        $this->id_solid = $id_solid;
        $this->unitats = $unitats;
    }

    
    function getCapacitatMg() {
        return $this->capacitatMg;
    }

    function getId_solid() {
        return $this->id_solid;
    }

    function getUnitats() {
        return $this->unitats;
    }

    function setCapacitatMg($capacitatMg) {
        $this->capacitatMg = $capacitatMg;
    }

    function setId_solid($id_solid) {
        $this->id_solid = $id_solid;
    }

    function setUnitats($unitats) {
        $this->unitats = $unitats;
    }


}
?>
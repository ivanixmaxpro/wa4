<?php
require_once("controller/function_AutoLoad.php");

class Altres extends Producte {
    private $id_altres;
    private $unitats;
    
     function __construct($conservarFred,$descripcio,$id_producte,$id_ubicacio,$imatge,$marca,$model,$nom,$preuBase,$referencia,$id_altres,$unitats) {
        parent::__construct($conservarFred,$descripcio,$id_producte,$id_ubicacio,$imatge,$marca,$model,$nom,$preuBase,$referencia);
        $this->unitats = $unitats;
        $this->id_altres = $id_altres;
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


}
?>
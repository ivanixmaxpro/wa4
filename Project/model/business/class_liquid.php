<?php
require_once("controller/function_AutoLoad.php");

class Liquid extends Producte {
    private $capacitatMl;
    private $id_liquid;
    function __construct($conservarFred,$descripcio,$id_producte,$id_ubicacio,$imatge,$marca,$model,$nom,$preuBase,$referencia,$id_liquid,$capacitatMl) {
        parent::__construct($conservarFred,$descripcio,$id_producte,$id_ubicacio,$imatge,$marca,$model,$nom,$preuBase,$referencia);
        $this->capacitatMl = $capacitatMl;
        $this->id_liquid = $id_liquid;
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
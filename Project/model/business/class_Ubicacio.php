<?php

require_once("controller/function_AutoLoad.php");

class Ubicacio {

    private $id_ubicacio;
    private $quantitatStock;
    private $quantitatTenda;
    private $situacio;

    /**
     * 3 constructos, un sense dades per accedir als metodes de la classe, un amb tots els atributs 
     * sense el id i el ultim amb el id
     */
    public function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 3:
                $this->setQuantitatStock(func_get_args()[0]);
                $this->setQuantitatTenda(func_get_args()[1]);
                $this->setSituacio(func_get_args()[2]);
                break;
            case 4:
                $this->setId_ubicacio(func_get_args()[0]);
                $this->setQuantitatStock(func_get_args()[1]);
                $this->setQuantitatTenda(func_get_args()[2]);
                $this->setSituacio(func_get_args()[3]);
                break;
        }
    }

    function getId_ubicacio() {
        return $this->id_ubicacio;
    }

    function getQuantitatStock() {
        return $this->quantitatStock;
    }

    function getQuantitatTenda() {
        return $this->quantitatTenda;
    }

    function getSituacio() {
        return $this->situacio;
    }

    function setId_ubicacio($id_ubicacio) {
        $this->id_ubicacio = $id_ubicacio;
    }

    function setQuantitatStock($quantitatStock) {
        $this->quantitatStock = $quantitatStock;
    }

    function setQuantitatTenda($quantitatTenda) {
        $this->quantitatTenda = $quantitatTenda;
    }

    function setSituacio($situacio) {
        $this->situacio = $situacio;
    }

}

?>

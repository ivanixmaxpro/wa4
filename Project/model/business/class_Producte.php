<?php

require_once("controller/function_AutoLoad.php");

class Producte {

    private $id_producte;
    private $id_ubicacio;
    private $nom;
    private $marca;
    private $preuBase;
    private $referencia;
    private $model;
    private $descripcio;
    private $conservarFred;
    private $imatge;

    /*
     * constructor 0 arguments
     * constructor 8 arguments ( no id's) Crear
     * constructor 10 arguments ( amb id's ) Recuperar
     */

    public function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 8:
                $this->setNom(func_get_args()[0]);
                $this->setMarca(func_get_args()[1]);
                $this->setPreuBase(func_get_args()[2]);
                $this->setReferencia(func_get_args()[3]);
                $this->setModel(func_get_arg()[4]);
                $this->setDescripcio(func_get_args()[5]);
                $this->setConservarFred(func_get_args()[6]);
                $this->setImatge(func_get_args()[7]);
                break;
            case 10:
                $this->setId_producte(func_get_args()[0]);
                $this->setId_ubicacio(func_get_args()[1]);
                $this->setNom(func_get_args()[2]);
                $this->setMarca(func_get_args()[3]);
                $this->setPreuBase(func_get_args()[4]);
                $this->setReferencia(func_get_args()[5]);
                $this->setModel(func_get_args()[6]);
                $this->setDescripcio(func_get_args()[7]);
                $this->setConservarFred(func_get_args()[8]);
                $this->setImatge(func_get_args()[9]);
                break;
        }
    }

    function getId_producte() {
        return $this->id_producte;
    }

    function getId_ubicacio() {
        return $this->id_ubicacio;
    }

    function getNom() {
        return $this->nom;
    }

    function getMarca() {
        return $this->marca;
    }

    function getPreuBase() {
        return $this->preuBase;
    }

    function getReferencia() {
        return $this->referencia;
    }

    function getModel() {
        return $this->model;
    }

    function getDescripcio() {
        return $this->descripcio;
    }

    function getConservarFred() {
        return $this->conservarFred;
    }

    function getImatge() {
        return $this->imatge;
    }

    function setId_producte($id_producte) {
        $this->id_producte = $id_producte;
    }

    function setId_ubicacio($id_ubicacio) {
        $this->id_ubicacio = $id_ubicacio;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setPreuBase($preuBase) {
        $this->preuBase = $preuBase;
    }

    function setReferencia($referencia) {
        $this->referencia = $referencia;
    }

    function setModel($model) {
        $this->model = $model;
    }

    function setDescripcio($descripcio) {
        $this->descripcio = $descripcio;
    }

    function setConservarFred($conservarFred) {
        $this->conservarFred = $conservarFred;
    }

    function setImatge($imatge) {
        $this->imatge = $imatge;
    }

}

?>
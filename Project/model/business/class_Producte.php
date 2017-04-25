<?php
require_once("controller/function_AutoLoad.php");

class Producte{
    private $conservarFred;
    private $descripcio;
    private $id_producte;
    private $id_ubicacio;
    private $imatge;
    private $marca;
    private $model;
    private $nom;
    private $preuBase;
    private $referencia;
    
    /*
     * constructor 0 arguments
     * constructor 8 arguments ( no id's)
     * constructor 10 arguments ( amb id's )
     */
     public function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 8:
                $this->setConservarFred(func_get_args()[0]);
                $this->setDescripcio(func_get_args()[1]);
                $this->setImatge(func_get_args()[2]);
                $this->setMarca(func_get_args()[3]);
                $this->setModel(func_get_arg()[4]);
                $this->setNom(func_get_args()[5]);
                $this->setPreuBase(func_get_args()[6]);
                $this->setReferencia(func_get_args()[7]);
                break;
            case 10:
               $this->setConservarFred(func_get_args()[0]);
                $this->setDescripcio(func_get_args()[1]);
                $this->setId_producte(func_get_args()[2]);
                $this->setId_ubicacio(func_get_args()[3]);
                $this->setImatge(func_get_args()[4]);
                $this->setMarca(func_get_args()[5]);
                $this->setModel(func_get_arg()[6]);
                $this->setNom(func_get_args()[7]);
                $this->setPreuBase(func_get_args()[8]);
                $this->setReferencia(func_get_args()[9]);
                break;
        }
    }
    
    public function getConservarFred() {
        return $this->conservarFred;
    }

    public function getDescripcio() {
        return $this->descripcio;
    }

    public function getId_producte() {
        return $this->id_producte;
    }

    public function getId_ubicacio() {
        return $this->id_ubicacio;
    }

    public function getImatge() {
        return $this->imatge;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModel() {
        return $this->model;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPreuBase() {
        return $this->preuBase;
    }

    public function getReferencia() {
        return $this->referencia;
    }

    public function setConservarFred($conservarFred) {
        $this->conservarFred = $conservarFred;
    }

    public function setDescripcio($descripcio) {
        $this->descripcio = $descripcio;
    }

    public function setId_producte($id_producte) {
        $this->id_producte = $id_producte;
    }

    public function setId_ubicacio($id_ubicacio) {
        $this->id_ubicacio = $id_ubicacio;
    }

    public function setImatge($imatge) {
        $this->imatge = $imatge;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPreuBase($preuBase) {
        $this->preuBase = $preuBase;
    }

    public function setReferencia($referencia) {
        $this->referencia = $referencia;
    }


}
?>
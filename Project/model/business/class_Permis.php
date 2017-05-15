<?php

require_once("controller/function_AutoLoad.php");

class Permis extends Funcionalitat {

    private $id_permis;
    private $id_usuari;
    private $id_funcionalitat;
    private $visualitzar;
    private $crear;
    private $editar;
    private $eliminar;

    function __construct() {
        parent::__construct();
        switch (func_num_args()) {
            case 0:
                break;
            case 7:
                $this->setId_usuari(func_get_args()[0]);
                parent::setId_funcionalita(func_get_args()[1]);
                $this->setVisualitzar(func_get_args()[2]);
                $this->setCrear(func_get_args()[3]);
                $this->setEditar(func_get_args()[4]);
                $this->setEliminar(func_get_args()[5]);
                parent::setNom(func_get_args()[6]);
                break;
            case 5:
                $this->setVisualitzar(func_get_args()[0]);
                $this->setCrear(func_get_args()[1]);
                $this->setEditar(func_get_args()[2]);
                $this->setEliminar(func_get_args()[3]);
                parent::setNom(func_get_args()[4]);
                break;
        }
    }

    function getId_permis() {
        return $this->id_permis;
    }

    function getId_usuari() {
        return $this->id_usuari;
    }

    function getVisualitzar() {
        return $this->visualitzar;
    }

    function getCrear() {
        return $this->crear;
    }

    function getEditar() {
        return $this->editar;
    }

    function getEliminar() {
        return $this->eliminar;
    }

    function setId_permis($id_permis) {
        $this->id_permis = $id_permis;
    }

    function setId_usuari($id_usuari) {
        $this->id_usuari = $id_usuari;
    }

    function setVisualitzar($visualitzar) {
        $this->visualitzar = $visualitzar;
    }

    function setCrear($crear) {
        $this->crear = $crear;
    }

    function setEditar($editar) {
        $this->editar = $editar;
    }

    function setEliminar($eliminar) {
        $this->eliminar = $eliminar;
    }

}

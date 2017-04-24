<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Permis {

    private $id_permis;
    private $id_usuari;
    private $id_funcionalitat;
    private $visualitzar;
    private $crear;
    private $editar;
    private $eliminar;

    function __construct($id_usuari, $id_funcionalitat, $visualitzar, $crear, $editar, $eliminar) {
        $this->setId_permis(null);
        $this->setId_usuari($id_usuari);
        $this->setId_funcionalitat($id_funcionalitat);
        $this->setVisualitzar($visualitzar);
        $this->setCrear($crear);
        $this->setEditar($editar);
        $this->setEliminar($eliminar);
    }

    function getId_permis() {
        return $this->id_permis;
    }

    function getId_usuari() {
        return $this->id_usuari;
    }

    function getId_funcionalitat() {
        return $this->id_funcionalitat;
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

    function setId_funcionalitat($id_funcionalitat) {
        $this->id_funcionalitat = $id_funcionalitat;
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

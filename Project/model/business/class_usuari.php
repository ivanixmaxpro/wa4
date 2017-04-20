<?php


class Usuari {
    private $id;
    private $name;
    private $password;
    private $rol;

    public function __construct($id, $name, $password, $rol) {
        $this->setId($id);
        $this->setName($name);
        $this->setPassword($password);
        $this->setRol($rol);
        $arrayUsuaris = array();
    }
    public function getId() {
        return $this->id;
    }

    public function getRol() {
        return $this->rol;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($value) {
        $this->name = $value;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($value) {
        $this->password = $value;
    }
}
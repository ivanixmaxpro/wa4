<?php

class Horari{
    private $id_horari;
    private $id_usuari;
    private $id_dia;
    private $horaInici;
    private $horaFinal;
    
    
    function __construct($id_usuari, $id_dia, $horaInici, $horaFinal) {
        $this->id_horari = null;
        $this->id_usuari = $this->setId_usuari($id_usuari);
        $this->id_dia = $this->setId_dia($id_dia);
        $this->horaInici = $this->setHoraInici($horaInici);
        $this->horaFinal = $this->setHoraFinal($horaFinal);
    }
    

    function getId_horari() {
        return $this->id_horari;
    }

    function getId_usuari() {
        return $this->id_usuari;
    }

    function getId_dia() {
        return $this->id_dia;
    }

    function getHoraInici() {
        return $this->horaInici;
    }

    function getHoraFinal() {
        return $this->horaFinal;
    }

    function setId_horari($id_horari) {
        $this->id_horari = $id_horari;
    }

    function setId_usuari($id_usuari) {
        $this->id_usuari = $id_usuari;
    }

    function setId_dia($id_dia) {
        $this->id_dia = $id_dia;
    }

    function setHoraInici($horaInici) {
        $this->horaInici = $horaInici;
    }

    function setHoraFinal($horaFinal) {
        $this->horaFinal = $horaFinal;
    }


    
    
    
    
    
}

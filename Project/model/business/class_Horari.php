<?php

require_once("controller/function_AutoLoad.php");

class Horari {

    private $id_horari;
    private $id_usuari;
    private $id_dia;
    private $horaInici;
    private $horaFinal;

    function __construct() {        
        switch (func_num_args()) {
            case 0:
                break;
            case 5:
                $this->setId_horari(func_get_args()[0]);
                $this->setId_usuari(func_get_args()[1]);
                $this->setId_dia(func_get_args()[2]);
                $this->setHoraInici(func_get_args()[3]);
                $this->setHoraFinal(func_get_args()[4]);
        }
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
    
    function updateHorari (){
        $HorariDAO = new HorariDAO();
        $HorariDAO->updateHorari($this);
    }

}

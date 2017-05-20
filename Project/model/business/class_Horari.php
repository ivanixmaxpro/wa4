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
            case 2:
                $this->setId_horari(null);
                $this->setId_usuari(func_get_args()[0]);
                $this->setId_dia(func_get_args()[1]);
                $this->setHoraInici(null);
                $this->setHoraFinal(null);
                break;
            case 4:
                $this->setId_horari(null);
                $this->setId_usuari(func_get_args()[0]);
                $this->setId_dia(func_get_args()[1]);
                $this->setHoraInici(func_get_args()[2]);
                $this->setHoraFinal(func_get_args()[3]);
                break;
            case 5:
                $this->setId_horari(func_get_args()[0]);
                $this->setId_usuari(func_get_args()[1]);
                $this->setId_dia(func_get_args()[2]);
                $this->setHoraInici(func_get_args()[3]);
                $this->setHoraFinal(func_get_args()[4]);
                break;
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

    function updateHorari() {
        $HorariDAO = new HorariDAO();
        $HorariDAO->updateHorari($this);
    }

    function insertHorari() {
        $HorariDAO = new HorariDAO();
        $HorariDAO->insertHorari($this);
    }
/**
 * metode per validar que el format de una data sigui bo
 * @param type $date
 */
    public function validarData($date) {

        if ($this->ok) {

            try {

                $auxDate = explode("-", $date);

                if (!checkdate($auxDate[0], $auxDate[1], $auxDate[2])) {

                    $this->msg = "La data introduïda no és correcte.";
                }
            } catch (Exception
            $exc) {

                $this->msg = "La data introduïda no és correcte.";
            }
        }
    }
/**
 * metode per validar que una data no sigui anterior a l'altre
 * @param type $dataInici
 * @param type $dataFi
 */
    public function validarDataIniciFinal($dataInici, $dataFi) {

        if ($this->ok) {

            $this->validarData($dataInici);

            $this->validarData($dataFi);


            if ($this->ok && ($dataFi <
                    $dataInici)) {

                $this->ok = false;

                $this->msg = "La data final ha de ser major a la data d'inici.";
            }
        }
    }

}

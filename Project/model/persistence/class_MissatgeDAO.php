<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class MissatgeDAO {

    public function inserir($missatge) {
        $con = new db();
        $query = $con->prepare("insert into missatge (id_usuari, llegit, titol, data, missatge) values (:id_usuari, :llegit, :titol, :data, :missatge)");
        $query->bindValue(":id_usuari", $missatge->getId_usuari());
        $query->bindValue(":llegit", $missatge->getLlegit());
        $query->bindValue(":titol", $missatge->getTitol());
        $query->bindValue(":data", $missatge->getData());
        $query->bindValue(":missatge", $missatge->getMissatge());
        $con->consultar($query);
        $con = null;
    }

    /**
     * metodes per consultar els missatges a la base de dades
     * @return array de Missatges
     */
    public function populateMissatges() {
        $missatgesArray = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM missatge INNER JOIN usuari ON missatge.id_usuari = usuari.id_usuari;");
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $usuari = $row["usuari"];
            $llegit = $row["llegit"];
            if ($llegit == '0') {
                $llegit = 'no';
            } else {
                $llegit = 'si';
            }
            $titol = $row["titol"];
            $data = $row["data"];
            $text = $row["missatge"];
            $id_missatge = $row["id_missatge"];
            $missatge = new Missatge($usuari, $llegit, $titol, $data, $text);
            $missatge->setId_missatge($id_missatge);
            array_push($missatgesArray, $missatge);
        }
        $con = null;
        return $missatgesArray;
    }

    /**
     * buscar i retorna un missatge per una id en concret
     * @param type $id
     * @return objecte Missatge
     */
    function buscarPerId($id) {

        $con = new db();
        $query = $con->prepare("SELECT * FROM missatge INNER JOIN usuari ON missatge.id_usuari = usuari.id_usuari WHERE id_missatge='$id';");
        $result = $con->consultar($query);

        $usuari = $result[0]["usuari"];
        $llegit = $result[0]["llegit"];
        if ($llegit == '0') {
            $llegit = 'no';
        } else {
            $llegit = 'si';
        }
        $titol = $result[0]["titol"];
        $data = $result[0]["data"];
        $text = $result[0]["missatge"];
        $id_missatge = $result[0]["id_missatge"];
        $missatge = new Missatge($usuari, $llegit, $titol, $data, $text);
        $missatge->setId_missatge($id_missatge);

        if ($llegit == 'no') {
            $query = $con->prepare("UPDATE missatge set llegit=1 WHERE id_missatge='$id';");
        }

        $con->consulta($query);
        $con = null;


        return $missatge;
    }

}

?>
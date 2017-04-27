<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class UsuariDAO {
  
    public function searchUsuari ($nom_usuari){

        $con = new db();
        $query = $con->prepare("SELECT * FROM usuari WHERE usuari = :usuari;");
        $query->bindValue(":usuari", $nom_usuari);
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $id_usuari = $row["id_usuari"];
            $id_empleat = $row["id_empleat"];
            $usuari = $row["usuari"];
            $contrasenya = $row["contrasenya"];
            $usuari = new Usuari($id_usuari, $id_empleat, $usuari, $contrasenya);
        }

        $con = null;
        return $usuari;
    }

    public function inserir($usuari) {

        $query = "insert into usuari values('','" . $usuari->getId_empleat() . "','" . $usuari->getUsuari() . "','" . $usuari->getConstrasenya() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>
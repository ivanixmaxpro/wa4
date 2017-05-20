<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class UsuariDAO {

    public function searchUsuari($nom_usuari) {

        $con = new db();
        $query = $con->prepare("SELECT * FROM usuari WHERE usuari = :usuari;");
        $query->bindValue(":usuari", $nom_usuari);
        $result = $con->consultar($query);
        $usuari = null;

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

        $pass = password_hash($usuari->getUsuari(), PASSWORD_BCRYPT);

        $query = "insert into usuari values('','" . $usuari->getId_empleat() . "','" . $pass . "','" . $usuari->getConstrasenya() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function updateContrasenya($id_usuari, $contrasenya) {
        try {
            $con = new db();
            $query = $con->prepare("UPDATE usuari SET contrasenya  = :contrasenya WHERE id_usuari = :id_usuari");
            $query->bindValue(":contrasenya", $contrasenya);
            $query->bindValue(":id_usuari", $id_usuari);

            $con->consulta($query);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertUsuari($usuari) {
        try {
            $con = new db();
            $query = $con->prepare("INSERT INTO usuari (id_empleat,usuari,contrasenya) 
                VALUES (:id_empleat, :usuari, :contrasenya)");
            $query->bindValue(":id_empleat", $usuari->getId_empleat());
            $query->bindValue(":usuari", $usuari->getUsuari());
            $query->bindValue(":contrasenya", $usuari->getContrasenya());
            $con->consulta($query);
            return $con->lastInsertId();
        } catch (Exception $e) {
            die($e->getMessage());
        }
        $con = null;
    }

}

?>
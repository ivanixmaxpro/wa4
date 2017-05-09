<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ProveidorDAO {

    public function inserir($proveidor) {
        $con = new db();
        $query = $con->prepare("insert into proveidor (nom, codi) values (:nom, :codi)");
        $query->bindValue(":nom", $proveidor->getNom());
        $query->bindValue(":codi", $proveidor->getCodi());
        $con->consultar($query);
        $con = null;
    }

    public function populateProveidors() {
        $proveidorsArray = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM proveidor;");
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $nom = $row["nom"];
            $codi = $row["codi"];
            $id_proveidor = $row["id_proveidor"];
            $proveidor = new Proveidor($nom, $codi);
            $proveidor->setId_proveidor($id_proveidor);

            array_push($proveidorsArray, $proveidor);
        }
        $con = null;
        return $proveidorsArray;
    }

    public function searchById($id) {
        $con = new db();
        $query = $con->prepare("SELECT * FROM proveidor WHERE id_proveidor='$id';");
        $result = $con->consultar($query);

        $nom = $result[0]["nom"];
        $codi = $result[0]["codi"];

        $id_proveidor = $result[0]["id_proveidor"];
        $proveidor = new Proveidor($nom, $codi);
        $proveidor->setId_proveidor($id_proveidor);


        $con->consulta($query);
        $con = null;


        return $proveidor;
    }

    public function modificar($proveidor,$id) {
        $con = new db();
        $nom = $proveidor->getNom();
        $codi = $proveidor->getCodi();
        $query = $con->prepare("UPDATE proveidor set nom='$nom', codi='$codi' WHERE id_proveidor='$id';");


        $con->consulta($query);
        $con = null;
    }

}

?>
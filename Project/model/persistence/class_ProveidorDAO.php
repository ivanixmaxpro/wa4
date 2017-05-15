<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ProveidorDAO {

    /**
     * funcio per afegir proveidors a la base de dades, li tirem un objecte proveidor
     * @param type $proveidor
     */
    public function inserir($proveidor) {
        $con = new db();
        $query = $con->prepare("insert into proveidor (nom, codi) values (:nom, :codi)");
        $query->bindValue(":nom", $proveidor->getNom());
        $query->bindValue(":codi", $proveidor->getCodi());
        $con->consultar($query);
        $con = null;
    }

    /**
     * metode per carregar tots el proveidors de la base de dades
     * @return array de proveidors
     */
    public function populateProveidors() {
        $proveidorsArray = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM proveidor;");
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $nom = $row["nom"];
            $codi = $row["codi"];
            $id_proveidor = $row["id_proveidor"];
            $proveidor = new Proveidor($id_proveidor, $nom, $codi);
            array_push($proveidorsArray, $proveidor);
        }
        $con = null;
        return $proveidorsArray;
    }

    /**
     * metode per buscar a la base de dades un proveidor a partir de la seva id
     * @param type $id
     * @return \Proveidor
     */
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

    /**
     * metode per modificar les dades de un proveidor a la base de dades
     * @param type $proveidor
     * @param type $id
     */
    public function modificar($proveidor, $id) {
        $con = new db();
        $nom = $proveidor->getNom();
        $codi = $proveidor->getCodi();
        $query = $con->prepare("UPDATE proveidor set nom='$nom', codi='$codi' WHERE id_proveidor='$id';");


        $con->consulta($query);
        $con = null;
    }
    /**
     * metode per eliminar un proveidor determinat a la base de dades
     * @param type $id
     */
    public function eliminar($id) {
        $con = new db();
        $query = $con->prepare("DELETE FROM proveidor WHERE id_proveidor='$id';");
        $con->consulta($query);
        $con = null;
    }

}

?>

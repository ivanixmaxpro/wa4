<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ClientDAO {

    /**
     * metode per demanar a la base de dades tots els clients
     * @return array clients
     */
    public function populateClients() {
        $clientsArray = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM client;");
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $nom = $row["nom"];
            $codi = $row["codi"];
            $informacio = $row["informacio"];
            $id_client = $row["id_client"];
            $client = new Client($nom, $codi, $informacio);
            $client->setId_client($id_client);

            array_push($clientsArray, $client);
        }
        $con = null;
        return $clientsArray;
    }

    /**
     * metode per obtenir un client a partir de la seva id
     * @param type $id
     * @return Client
     */
    public function searchById($id) {
        $con = new db();
        $query = $con->prepare("SELECT * FROM client WHERE id_client='$id';");
        $result = $con->consultar($query);

        $nom = $result[0]["nom"];
        $codi = $result[0]["codi"];
        $informacio = $result[0]["informacio"];
        $id_client = $result[0]["id_client"];
        $client = new Client($nom, $codi, $informacio);
        $client->setId_client($id_client);
        $con->consulta($query);
        $con = null;
        return $client;
    }
    /**
     * metode per modificar les dades de un client a la base de dades
     * @param type $client
     * @param type $id
     */
    public function modificar($client, $id) {
        $con = new db();
        $nom = $client->getNom();
        $codi = $client->getCodi();
        $informacio = $client->getInformacio();
        $query = $con->prepare("UPDATE client set nom='$nom', codi='$codi', informacio='$informacio' WHERE id_client='$id';");


        $con->consulta($query);
        $con = null;
    }
    /**
     * metode per afegir un client a la base de dades
     * @param type $proveidor
     */
    public function inserir($client) {
        $con = new db();
        $query = $con->prepare("insert into client (nom, codi, informacio) values (:nom, :codi, :informacio)");
        $query->bindValue(":nom", $client->getNom());
        $query->bindValue(":codi", $client->getCodi());
        $query->bindValue(":informacio", $client->getInformacio());
        $con->consultar($query);
        $con = null;
    }
    /**
     * metode per eliminar un client de la base de dades
     * @param type $id
     */
     public function eliminar($id) {
        $con = new db();
        $query = $con->prepare("DELETE FROM client WHERE id_client='$id';");
        $con->consulta($query);
        $con = null;
    }

}

?>
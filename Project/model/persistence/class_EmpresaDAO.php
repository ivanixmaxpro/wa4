<?php

require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class EmpresaDAO {

    public function __construct() {
        
    }

    public function recuperarEmpresa() {
        $empresa = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM empresa;");
        $result = $con->consultar($query);


        foreach ($result as $row) {
            $id_empresa = $row["id_empresa"];
            array_push($empresa, $id_empresa);
            $nom = $row["nom"];
            array_push($empresa, $nom);
        }
        $con = null;
        return $empresa;
    }

    public function populateEmpleats() {
        $empleatsarray = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM empleat;");
        $result = $con->consultar($query);


        foreach ($result as $row) {
            $id_empleat = $row["id_empleat"];
            $id_empresa = $row["id_empresa"];
            $nom = $row["nom"];
            $cognom = $row["cognom"];
            $dni = $row["dni"];
            $localitat = $row["localitat"];
            $nomina = $row["nomina"];
            $nss = $row["nss"];
            $imatge = $row["imatge"];
            $descripcio = $row["descripcio"];
            $empleat = new Empleat($id_empresa, $nom, $cognom, $dni, $localitat, $nomina, $nss, $imatge, $descripcio);
            $empleat->setId_empleat($id_empleat);
            array_push($empleatsarray, $empleat);
        }
        $con = null;
        return $empleatsarray;
    }

    public function searchEmpleat($id_empleat) {
        $con = new db();
        $query = $con->prepare("SELECT * FROM empleat WHERE id_empleat = :id_empleat");
        $query->bindValue(":id_empleat", $id_empleat);
        $result = $con->consultar($query);

        
        foreach ($result as $row) {
            $id_empleat = $row["id_empleat"];
            $id_empresa = $row["id_empresa"];
            $nom = $row["nom"];
            $cognom = $row["cognom"];
            $dni = $row["dni"];
            $localitat = $row["localitat"];
            $nomina = $row["nomina"];
            $nss = $row["nss"];
            $imatge = $row["imatge"];
            $descripcio = $row["descripcio"];
            $empleat = new Empleat($id_empresa, $nom, $cognom, $dni, $localitat, $nomina, $nss, $imatge, $descripcio);
            $empleat->setId_empleat($id_empleat);
            
        }
        $con = null;
        return $empleat;
    }

}

?>
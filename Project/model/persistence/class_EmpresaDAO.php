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

    public function populateProductes() {
        $productesarray = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM producte;");
        $result = $con->consultar($query);


        foreach ($result as $row) {
            $id_producte = $row["id_producte"];
            $id_ubicacio = $row["id_ubicacio"];
            $nom = $row["nom"];
            $marca = $row["marca"];
            $preuBase = $row["preuBase"];
            $referencia = $row["referencia"];
            $model = $row["model"];
            $descripcio = $row["descripcio"];
            $conservarFred = $row["conservarFred"];
            $imatge = $row["imatge"];
            $producte = new Producte($id_producte, $id_ubicacio, $nom, $marca, $preuBase, $referencia, $model, $descripcio, $conservarFred, $imatge);
            array_push($productesarray, $producte);
        }
        $con = null;
        return $productesarray;
    }

    public function populateUsuariDAO() {
        $usuaris = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM usuari;");
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $id_usuari = $row["id_usuari"];
            $id_empleat = $row["id_empleat"];
            $usuari = $row["usuari"];
            $contrasenya = $row["contrasenya"];
            $usuari = new Usuari($id_usuari, $id_empleat, $usuari, $contrasenya);
            array_push($usuaris, $usuari);
        }

        $con = null;
        return $usuaris;
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

    public function searchLastControl($id_usuari) {
        $con = new db();
        $query = $con->prepare("SELECT * FROM control WHERE id_usuari = :id_usuari ORDER BY id_control DESC LIMIT 1");
        $query->bindValue(":id_usuari", $id_usuari);
        $result = $con->consultar($query);

        $control = new Control();
        foreach ($result as $row) {
            $id_control = $row["id_control"];
            $id_usuari = $row["id_usuari"];
            $fitxat = $row["fitxat"];
            $data = $row["data"];
            $control = new Control($id_control, $id_usuari, $fitxat, $data);
        }
        $con = null;
        return $control;
    }

    public function showHorari($id_usuari) {
        $horari = array();
        $con = new db();
        $query = $con->prepare("SELECT dia.nom,horari.horaInici,horari.horaFinal FROM horari INNER JOIN dia ON horari.id_dia = dia.id_dia WHERE horari.id_usuari = :id_usuari ORDER BY dia.id_dia ASC");
        $query->bindValue(":id_usuari", $id_usuari);
        $result = $con->consultar($query);
        
        foreach ($result as $row) {
            $nom = $row["nom"];
            $horaInici = $row["horaInici"];
            $horaFinal = $row["horaFinal"];
            
            array_push($horari, array($nom,$horaInici,$horaFinal));
        }
        
        $con = null;
        return $horari;
    }

}

?>
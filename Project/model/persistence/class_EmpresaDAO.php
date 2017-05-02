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

    function populateProductesLiquid() {

        $productesLiquidArray = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM liquid INNER JOIN producte ON liquid.id_producte = producte.id_producte;");
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $id_liquid = $row["id_liquid"];
            $id_producte = $row["id_producte"];
            $capacitatMl = $row["capacitatMl"];
            $id_ubicacio = $row["id_ubicacio"];
            $nom = $row["nom"];
            $marca = $row["marca"];
            $preuBase = $row["preuBase"];
            $referencia = $row["referencia"];
            $model = $row["model"];
            $descripcio = $row["descripcio"];
            $conservarFred = $row["conservarFred"];
            $imatge = $row["imatge"];


            $producteLiquid = new Liquid($id_producte, $id_ubicacio, $nom, $marca, $preuBase, $referencia, $model, $descripcio, $conservarFred, $imatge, $id_liquid, $capacitatMl);
            array_push($productesLiquidArray, $producteLiquid);
        }

        $con = null;
        return $productesLiquidArray;
    }

    function populateProductesAltre() {

        $productesAltreArray = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM altres INNER JOIN producte ON altres.id_producte = producte.id_producte;");
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $id_altres = $row["id_altres"];
            $id_producte = $row["id_producte"];
            $unitats = $row["unitats"];
            $id_ubicacio = $row["id_ubicacio"];
            $nom = $row["nom"];
            $marca = $row["marca"];
            $preuBase = $row["preuBase"];
            $referencia = $row["referencia"];
            $model = $row["model"];
            $descripcio = $row["descripcio"];
            $conservarFred = $row["conservarFred"];
            $imatge = $row["imatge"];

            $producteAltre = new Altres($id_producte, $id_ubicacio, $nom, $marca, $preuBase, $referencia, $model, $descripcio, $conservarFred, $imatge, $id_altres, $unitats);
            array_push($productesAltreArray, $producteAltre);
        }

        $con = null;
        return $productesAltreArray;
    }

    function populateProductesSolid() {

        $productesSolidArray = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM solid INNER JOIN producte ON solid.id_producte = producte.id_producte;");
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $id_solid = $row["id_solid"];
            $id_producte = $row["id_producte"];
            $capacitatMg = $row["capacitatMg"];
            $unitats = $row["unitats"];
            $id_ubicacio = $row["id_ubicacio"];
            $nom = $row["nom"];
            $marca = $row["marca"];
            $preuBase = $row["preuBase"];
            $referencia = $row["referencia"];
            $model = $row["model"];
            $descripcio = $row["descripcio"];
            $conservarFred = $row["conservarFred"];
            $imatge = $row["imatge"];

            $producteSolid = new Solid($id_producte, $id_ubicacio, $nom, $marca, $preuBase, $referencia, $model, $descripcio, $conservarFred, $imatge, $id_solid, $capacitatMg, $unitats);
            array_push($productesSolidArray, $producteSolid);
        }

        $con = null;
        return $productesSolidArray;
    }

    function populateProductesSemiSolid() {

        $productesSemiSolidArray = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM semisolid INNER JOIN producte ON semisolid.id_producte = producte.id_producte;");
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $id_semisolid = $row["id_semisolid"];
            $id_producte = $row["id_producte"];
            $capacitatMg = $row["capacitatMg"];
            $id_ubicacio = $row["id_ubicacio"];
            $nom = $row["nom"];
            $marca = $row["marca"];
            $preuBase = $row["preuBase"];
            $referencia = $row["referencia"];
            $model = $row["model"];
            $descripcio = $row["descripcio"];
            $conservarFred = $row["conservarFred"];
            $imatge = $row["imatge"];

            $producteSolid = new Semisolid($id_producte, $id_ubicacio, $nom, $marca, $preuBase, $referencia, $model, $descripcio, $conservarFred, $imatge, $id_semisolid, $capacitatMg);
            array_push($productesSemiSolidArray, $producteSolid);
        }

        $con = null;
        return $productesSemiSolidArray;
    }

    function populateProductesGas() {

        $productesGasArray = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM gas INNER JOIN producte ON gas.id_producte = producte.id_producte;");
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $id_gas = $row["id_gas"];
            $id_producte = $row["id_producte"];
            $capacitatMl = $row["capacitatMl"];
            $id_ubicacio = $row["id_ubicacio"];
            $nom = $row["nom"];
            $marca = $row["marca"];
            $preuBase = $row["preuBase"];
            $referencia = $row["referencia"];
            $model = $row["model"];
            $descripcio = $row["descripcio"];
            $conservarFred = $row["conservarFred"];
            $imatge = $row["imatge"];

            $producteGas = new Gas($id_producte, $id_ubicacio, $nom, $marca, $preuBase, $referencia, $model, $descripcio, $conservarFred, $imatge, $id_gas, $capacitatMl);
            array_push($productesGasArray, $producteGas);
        }

        $con = null;
        return $productesGasArray;
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

}

?>
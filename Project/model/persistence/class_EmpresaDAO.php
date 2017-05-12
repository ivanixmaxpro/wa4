<?php

require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class EmpresaDAO {

    public function __construct() {
        
    }

    public function eliminarProducte($producte) {
        $con = new db();
        $query = $con->prepare("DELETE FROM producte WHERE id_producte = :id;");
        $query->bindValue(":id", $producte->getId_producte());
        $con->consultar($query);

        $con = null;
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

    public function populateAlbaransVenta() {
        $albaransVentaArray = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM albara_venta;");
        $result = $con->consultar($query);


        foreach ($result as $row) {
            $id_albara = $row["id_albara"];
            $id_client = $row["id_client"];
            $id_empresa = $row["id_empresa"];
            $codi = $row["codi"];
            $observacions = $row["observacions"];
            $preu = $row["preu"];
            $data = $row["data"];
            $localitat = $row["localitat"];
            $albaraVenta = new AlbaraVenta($id_albara, $id_client, $id_empresa, $codi, $observacions, $preu, $data, $localitat);
            array_push($albaransVentaArray, $albaraVenta);
        }
        $con = null;
        return $albaransVentaArray;
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

    /* public function aplicarFiltre($conservarFred, $limitRegistres, $tipusProducte) {

      } */

    public function searchEmpleat($id_empleat) {
        $con = new db();
        $query = $con->prepare("SELECT * FROM empleat WHERE id_empleat = :id_empleat;");
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

    public function searchProducte($id_producte) {
        $con = new db();
        $query = $con->prepare("SELECT * FROM producte WHERE id_producte = :id_producte;");
        $query->bindValue(":id_producte", $id_producte);
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
            $producte->setId_producte($id_producte);
        }
        $con = null;
        return $producte;
    }

    public function searchLastControl($id_usuari) {
        $con = new db();
        $query = $con->prepare("SELECT * FROM control WHERE id_usuari = :id_usuari ORDER BY id_control DESC LIMIT 1;");
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

    public function searchAllControl($id_usuari) {

        $con = new db();
        $fitxesArray = array();
        $query = $con->prepare("SELECT * FROM control WHERE id_usuari = :id_usuari ORDER BY id_control DESC LIMIT 5;");
        $query->bindValue(":id_usuari", $id_usuari);
        $result = $con->consultar($query);

        $control = new Control();
        foreach ($result as $row) {
            $id_control = $row["id_control"];
            $id_usuari = $row["id_usuari"];
            $fitxat = $row["fitxat"];
            $data = $row["data"];
            $control = new Control($id_control, $id_usuari, $fitxat, $data);
            array_push($fitxesArray, $control);
        }
        $con = null;
        return $fitxesArray;
    }

    function filterProducte($conservarenfred, $quantitat, $tipus) {
        $productesArray = array();
        $con = new db();
        $consulta = "SELECT * FROM";

        switch ($tipus) {
            case "tots":
                $consulta .= " producte";

                break;

            default:
                $consulta .= " " . $tipus . " INNER JOIN producte ON " . $tipus . ".id_producte = producte.id_producte";
                break;
        }


        switch ($conservarenfred) {
            case "tots":
                $consulta .= "";

                break;

            default:
                $consulta .= " WHERE producte.conservarFred=" . $conservarenfred;
                break;
        }
        switch ($quantitat) {
            case "tots":
                $consulta .= "";

                break;

            default:
                $consulta .= " LIMIT " . $quantitat + ";";
                break;
        }
        $consulta .= ";";
        $query = $con->prepare($consulta);
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
            array_push($productesArray, $producte);
        }

        $con = null;
        return $productesArray;
    }

    public function showHorari($id_usuari) {
        $horari = array();
        $con = new db();
        $query = $con->prepare("SELECT dia.nom,horari.horaInici,horari.horaFinal FROM horari INNER JOIN dia ON horari.id_dia = dia.id_dia WHERE horari.id_usuari = :id_usuari ORDER BY dia.id_dia ASC;");
        $query->bindValue(":id_usuari", $id_usuari);
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $nom = $row["nom"];
            $horaInici = $row["horaInici"];
            $horaFinal = $row["horaFinal"];

            array_push($horari, array($nom, $horaInici, $horaFinal));
        }

        $con = null;
        return $horari;
    }

    public function searchUsuariByEmpleat($id_empleat) {
        $con = new db();
        $query = $con->prepare("SELECT * FROM usuari WHERE id_empleat = :id_empleat;");
        $query->bindValue(":id_empleat", $id_empleat);
        $result = $con->consultar($query);


        foreach ($result as $row) {
            $id_usuari = $row["id_usuari"];
            $id_empleat = $row["id_empleat"];
            $nomusuari = $row["usuari"];
            $contrasenya = $row["contrasenya"];

            $usuari = new Usuari($id_usuari, $id_empleat, $nomusuari, $contrasenya);
        }
        $con = null;
        return $usuari;
    }

    public function searchUbicacioById($id_ubicacio) {
        $con = new db();
        $query = $con->prepare("SELECT * FROM producte INNER JOIN ubicacio ON producte.id_ubicacio = ubicacio.id_ubicacio WHERE ubicacio.id_ubicacio = :id_ubicacio;");
        $query->bindValue(":id_ubicacio", $id_ubicacio);
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $id_ubicacio = $row["id_ubicacio"];
            $quantitatTenda = $row["quantitatTenda"];
            $quantitatStock = $row["quantitatStock"];
            $situacio = $row["situacio"];
            $ubicacio = new Ubicacio($id_ubicacio, $quantitatTenda, $quantitatStock, $situacio);
        }
        $con = null;
        return $ubicacio;
    }

    public function searchClientById($id_client) {
        $con = new db();
        $query = $con->prepare("SELECT * FROM client WHERE id_client = :id_client;");
        $query->bindValue(":id_client", $id_client);
        $result = $con->consultar($query);


        foreach ($result as $row) {
            $id_client = $row["id_client"];
            $nom = $row["nom"];
            $codi = $row["codi"];
            $informacio = $row["informacio"];
            $client = new Client($id_client, $nom, $codi, $informacio);
        }
        $con = null;
        return $client;
    }

    public function populateClients() {
        $clients = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM client;");
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $id_client = $row["id_client"];
            $nom = $row["nom"];
            $codi = $row["codi"];
            $informacio = $row["informacio"];
            $client = new Client($id_client, $nom, $codi, $informacio);
            array_push($clients, $client);
        }

        $con = null;
        return $clients;
    }

    public function searchUbicacio($id_ubicacio) {
        $con = new db();
        $query = $con->prepare("SELECT * FROM ubicacio WHERE id_ubicacio = :id_ubicacio;");
        $query->bindValue(":id_ubicacio", $id_ubicacio);
        $result = $con->consultar($query);


        foreach ($result as $row) {
            $id_ubicacio = $row["id_ubicacio"];
            $quantitatTenda = $row["quantitatTenda"];
            $quantitatStock = $row["quantitatStock"];
            $situacio = $row["situacio"];

            $ubicacio = new Ubicacio($id_ubicacio, $quantitatTenda, $quantitatStock, $situacio);
        }
        $con = null;
        return $ubicacio;
    }

    public function searchProducteChilds($id_producte) {
        $con = new db();
        $query = $con->prepare("select producte.id_producte,producte.id_ubicacio,producte.nom,producte.marca,producte.preuBase,producte.referencia,producte.model,producte.descripcio,producte.conservarFred,producte.imatge,solid.id_solid,solid.capacitatMg as capacitatSolid,solid.unitats as unitatsSolid,semisolid.id_semisolid,semisolid.capacitatMg as capacitatSemisolid,liquid.id_liquid,liquid.capacitatMl as capacitatLiquid,gas.id_gas,gas.capacitatMl as capacitatGas,altres.id_altres,altres.unitats as unitatsAltres from producte left join solid on producte.id_producte = solid.id_producte left join semisolid on producte.id_producte = semisolid.id_producte left join liquid on producte.id_producte = liquid.id_producte left join gas on producte.id_producte = gas.id_producte left join altres on producte.id_producte = altres.id_producte WHERE producte.id_producte = :id_producte;");
        $query->bindValue(":id_producte", $id_producte);
        $result = $con->consultar($query);

        $producte = null;
        foreach ($result as $row) {

            if ($row["id_solid"] != null) {

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
                $id_solid = $row["id_solid"];
                $capacitatMg = $row["capacitatSolid"];
                $unitats = $row["unitatsSolid"];

                $producte = new Solid($id_producte, $id_ubicacio, $nom, $marca, $preuBase, $referencia, $model, $descripcio, $conservarFred, $imatge, $id_solid, $capacitatMg, $unitats);
            }
            if ($row["id_semisolid"] != null) {
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
                $id_semisolid = $row["id_semisolid"];
                $capacitatMg = $row["capacitatSemisolid"];

                $producte = new Semisolid($id_producte, $id_ubicacio, $nom, $marca, $preuBase, $referencia, $model, $descripcio, $conservarFred, $imatge, $id_semisolid, $capacitatMg);
            }
            if ($row["id_liquid"] != null) {

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
                $id_liquid = $row["id_liquid"];
                $capacitatMl = $row["capacitatLiquid"];

                $producte = new Liquid($id_producte, $id_ubicacio, $nom, $marca, $preuBase, $referencia, $model, $descripcio, $conservarFred, $imatge, $id_liquid, $capacitatMl);
            }
            if ($row["id_gas"] != null) {

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
                $id_gas = $row["id_gas"];
                $capacitatMl = $row["capacitatGas"];

                $producte = new Gas($id_producte, $id_ubicacio, $nom, $marca, $preuBase, $referencia, $model, $descripcio, $conservarFred, $imatge, $id_gas, $capacitatMl);
            }
            if ($row["id_altres"] != null) {
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
                $id_altres = $row["id_altres"];
                $unitats = $row["unitatsAltres"];

                $producte = new Altres($id_producte, $id_ubicacio, $nom, $marca, $preuBase, $referencia, $model, $descripcio, $conservarFred, $imatge, $id_altres, $unitats);
            }
        }
        $con = null;
        return $producte;
    }

    public function afegirProducte($producte, $tipusProdcute) {

        try {
            $con = new db();
            $query = $con->prepare("INSERT INTO ubicacio (quantitatTenda, quantitatStock, situacio) 
                VALUES (:quantitatTenda,:quantitatStock,:situacio);");
            $query->bindValue(":quantitatTenda", 0);
            $query->bindValue(":quantitatStock", 0);
            $query->bindValue(":situacio", "NULL");
            $con->consulta($query);
            $idUbicacio = ($con->lastInsertId());


            $query = $con->prepare("INSERT INTO producte (id_ubicacio, nom, marca, preuBase, referencia, model, descripcio, conservarFred, imatge) 
                VALUES (:id_ubicacio,:nom,:marca,:preuBase,:referencia,:model,:descripcio,:conservarFred,:imatge);");
            $query->bindValue(":id_ubicacio", $idUbicacio);
            $query->bindValue(":nom", $producte->getNom());
            $query->bindValue(":marca", $producte->getMarca());
            $query->bindValue(":preuBase", $producte->getPreuBase());
            $query->bindValue(":referencia", $producte->getReferencia());
            $query->bindValue(":model", $producte->getModel());
            $query->bindValue(":descripcio", $producte->getDescripcio());
            $query->bindValue(":conservarFred", $producte->getConservarFred());
            $query->bindValue(":imatge", $producte->getImatge());
            $con->consulta($query);
            $idProducte = ($con->lastInsertId());


            switch ($tipusProdcute) {
                case "Solid":

                    $query = $con->prepare("INSERT INTO solid (id_producte, capacitatMg, unitats) 
                VALUES (:id_producte,:capacitatMg,:unitats);");
                    $query->bindValue(":id_producte", $idProducte);
                    $query->bindValue(":capacitatMg", $producte->getCapacitatMg());
                    $query->bindValue(":unitats", $producte->getUnitats());
                    $con->consulta($query);

                    break;
                case "Semisolid":

                    $query = $con->prepare("INSERT INTO semisolid (id_producte, capacitatMg) 
                VALUES (:id_producte,:capacitatMg);");
                    $query->bindValue(":id_producte", $idProducte);
                    $query->bindValue(":capacitatMg", $producte->getCapacitatMg());
                    $con->consulta($query);

                    break;
                case "Liquid":

                    $query = $con->prepare("INSERT INTO liquid (id_producte, capacitatMl) 
                VALUES (:id_producte,:capacitatMl);");
                    $query->bindValue(":id_producte", $idProducte);
                    $query->bindValue(":capacitatMg", $producte->getCapacitatMl());
                    $con->consulta($query);

                    break;
                case "Gas":

                    $query = $con->prepare("INSERT INTO gas (id_producte, capacitatMl) 
                VALUES (:id_producte,:capacitatMl);");
                    $query->bindValue(":id_producte", $idProducte);
                    $query->bindValue(":capacitatMl", $producte->getCapacitatMl());
                    $con->consulta($query);

                    break;
                case "Altres":

                    $query = $con->prepare("INSERT INTO altres (id_producte, unitats) 
                VALUES (:id_producte,:unitats);");
                    $query->bindValue(":id_producte", $idProducte);
                    $query->bindValue(":unitats", $producte->getUnitats());
                    $con->consulta($query);

                    break;
                default:
                    $con = null;
                    break;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
        $con = null;
    }

    function updateProducte($producte, $type) {
        try {
            $con = new db();

            $query = $con->prepare("UPDATE producte SET nom = :nom, marca  = :marca, preuBase = :preuBase, referencia = :referencia, model = :model, descripcio = :descripcio, conservarFred = :conservarFred, imatge = :imatge WHERE id_producte = :id_producte;");
            $query->bindValue(":id_producte", $producte->getId_producte());
            $query->bindValue(":nom", $producte->getNom());
            $query->bindValue(":marca", $producte->getMarca());
            $query->bindValue(":preuBase", $producte->getPreuBase());
            $query->bindValue(":referencia", $producte->getReferencia());
            $query->bindValue(":model", $producte->getModel());
            $query->bindValue(":descripcio", $producte->getDescripcio());
            $query->bindValue(":conservarFred", $producte->getConservarFred());
            $query->bindValue(":imatge", $producte->getImatge());
            $con->consulta($query);
            switch ($type) {
                case "Solid":
                    $query = $con->prepare("UPDATE solid SET capacitatMg = :capacitatMg, unitats  = :unitats WHERE id_producte = :id_producte;");
                    $query->bindValue(":id_producte", $producte->getId_producte());
                    $query->bindValue(":capacitatMg", $producte->getCapacitatMg());
                    $query->bindValue(":unitats", $producte->getUnitats());
                    $con->consulta($query);
                    break;
                case "Semisolid":
                    $query = $con->prepare("UPDATE semisolid SET capacitatMg = :capacitatMg WHERE id_producte = :id_producte;");
                    $query->bindValue(":id_producte", $producte->getId_producte());
                    $query->bindValue(":capacitatMg", $producte->getCapacitatMg());
                    $con->consulta($query);

                    break;
                case "Liquid":
                    $query = $con->prepare("UPDATE liquid SET capacitatMl = :capacitatMl WHERE id_producte = :id_producte;");
                    $query->bindValue(":id_producte", $producte->getId_producte());
                    $query->bindValue(":capacitatMl", $producte->getCapacitatMl());
                    $con->consulta($query);
                    break;
                case "Gas":
                    $query = $con->prepare("UPDATE gas SET capacitatMl = :capacitatMl WHERE id_producte = :id_producte;");
                    $query->bindValue(":id_producte", $producte->getId_producte());
                    $query->bindValue(":capacitatMl", $producte->getCapacitatMl());
                    $con->consulta($query);
                    break;
                case "Altres":
                    $query = $con->prepare("UPDATE altres SET unitats = :unitats WHERE id_producte = :id_producte;");
                    $query->bindValue(":id_producte", $producte->getId_producte());
                    $query->bindValue(":unitats", $producte->getUnitats());
                    $con->consulta($query);
                    break;

                default:
                    $con = null;
                    break;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
        $con = null;
    }

}

?>
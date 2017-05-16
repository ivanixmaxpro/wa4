<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 9/05/17
 * Time: 16:20
 */

$title = "Modificar empleat";
if(isset($_SESSION['empresa'])){
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$usuariId = $_SESSION['id_usuari'];

if(empty($_POST)) {
    if (isset($_REQUEST['id'])) {
        $empleat = $empresa->searchEmpleat($_REQUEST['id']);

        require_once 'view/header.php';
        require_once 'view/sidebar.php';
        require_once 'view/mainNav.php';
        require_once 'view/modificarEmpleat.php';
        require_once 'view/footer.php';
    }
}

if(!empty($_POST)){
    if(isset($_REQUEST['modify'])){
        require_once 'view/header.php';
        require_once 'view/sidebar.php';
        require_once 'view/mainNav.php';

        $nom = $_REQUEST['nom'];
        $cognom = $_REQUEST['cognom'];
        $dni = $_REQUEST['dni'];
        $address = $_REQUEST['address'];
        $nss = $_REQUEST['nss'];
        $nomina = $_REQUEST['nomina'];
        $info = $_REQUEST['info'];
        $imatge = $_REQUEST['imatge'];
        $dades = true;


        $empleat = $empresa->searchEmpleat($_REQUEST['id']);

        if(!isset($nom) && !is_string($nom)){
            $dades = false;
        }
        if(!isset($cognom) && !is_string($cognom)){
            $dades = false;
        }
        if(!isset($dni) && !is_string($dni)){
            $dades = false;
        }
        if(!isset($address) && !is_numeric($address)){
            $dades = false;
        }
        if(!isset($nss) && !is_string($nss)){
            $dades = false;
        }
        if(!isset($nomina) && !is_numeric($nomina)){
            $dades = false;
        }
        // mirar que fer amb imatges
        if(!isset($info) && !is_string($info)){
            $dades = false;
        }
        if(!isset($imatge) && !is_string($imatge)){
            $dades = false;
        }


        if($dades == true) {
                    if (isset($nom) && isset($cognom) && isset($dni) && isset($address) && isset($nss) && isset($nomina) && isset($info) && isset($imatge)) {
                        $empleat->setNom($nom);
                        $empleat->setCognom($cognom);
                        $empleat->setDni($dni);
                        $empleat->setLocalitat($address);
                        $empleat->setNss($nss);
                        $empleat->setNomina($nomina);
                        $empleat->setDescripcio($info);
                        $empleat->setImatge($imatge);

                        $empresa->UpdateEmpleat($empleat);
                        echo "S'ha modificar satisfactoriament.";
                        require_once 'view/footer.php';
                    }
            }
        }else{
            echo "Dades entrades incorrectament.";
            // dades entrades erroneament
        }
}


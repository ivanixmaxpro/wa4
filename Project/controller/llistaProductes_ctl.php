<?php

require_once 'view/tablaProducte.php';

//Empresa
$tipus = "tots";

if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = new Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}

if (isset($_REQUEST["Submit"])) {

    $conservarFred = $_REQUEST['conservarFred'];
    $limitRegistres = $_REQUEST['qqa'];
    $tipusProducte = $_REQUEST['tipus'];

    $productes = $empresa->filtrarProductes($conservarFred, $limitRegistres, $tipusProducte);

//    if (isset($_REQUEST['conservarFred'])) {
//        $conservarFred = $_REQUEST['conservarFred'];
//    }
//    if (isset($_REQUEST['qqa'])) {
//        $quantitat = $_REQUEST['qqa'];
//    }
//    if (isset($_REQUEST['tipus'])) {
//        $tipus = $_REQUEST['tipus'];
//        switch ($tipus) {
//            case "altres":
//                $productesAltres = $empresa->populateAltres();
//                $productes = $empresa->cercarProducte($conservarFred, $quantitat, $productesAltres);
//                break;
//            case "solid":
//                $productesSolid = $empresa->populateSolid();
//                $productes = $empresa->cercarProducte($conservarFred, $quantitat, $productesSolid);
//                break;
//            case "semisolid":
//                $productesSemiSolid = $empresa->populateSemiSolid();
//                $productes = $empresa->cercarProducte($conservarFred, $quantitat, $productesSemiSolid);
//                break;
//            case "liquid":
//                $productesLiquid = $empresa->populateLiquid();
//                $productes = $empresa->cercarProducte($conservarFred, $quantitat, $productesLiquid);
//                break;
//            case "gas":
//                $productesGas = $empresa->populateGas();
//                $productes = $empresa->cercarProducte($conservarFred, $quantitat, $productesGas);
//                break;
//            default :
//                $productestots = $empresa->populateProductes();
//                $productes = $empresa->cercarProducte($conservarFred, $quantitat, $productestots);
//                break;
//        }
//    }
} else {
    $productes = $empresa->populateProductes();
}
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/llistaProductes.php';
require_once 'view/footer.php';
?>
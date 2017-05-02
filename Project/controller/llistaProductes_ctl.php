<?php
require_once 'view/tablaProducte.php';

//Empresa
$tipus = "tots";

if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}

if (isset($_REQUEST["Submit"])) {

    if (isset($_REQUEST['conservarFred'])) {
        $conservarFred = $_REQUEST['conservarFred'];
    }
    if (isset($_REQUEST['quantitat'])) {
        $quantitat = $_REQUEST['quantitat'];
    }
    if (isset($_REQUEST['tipus'])) {
        $tipus = $_REQUEST['tipus'];
        switch ($tipus) {
            case "altres":
                $productesAltres = $empresa->populateAltres();
                $productes = $empresa->cercarProducte($conservarFred, $quantitat,$productesAltres);
                break;
            case "solid":
                $productesSolid = $empresa->populateSolid();
                $productes = $empresa->cercarProducte($conservarFred, $quantitat,$productesSolid);
                break;
            case "semisolid":
                $productesSemiSolid = $empresa->populateSemiSolid();
                $productes = $empresa->cercarProducte($conservarFred, $quantitat,$productesSemiSolid);
                break;
            case "liquid":
                $productesLiquid = $empresa->populateLiquid();
                $productes = $empresa->cercarProducte($conservarFred, $quantitat,$productesLiquid);
                break;
            case "gas":
                $productesGas = $empresa->populateGas();
                $productes = $empresa->cercarProducte($conservarFred, $quantitat,$productesGas);
                break;
        }
    }
    $productestots =$empresa->populateProductes();
    $productes = $empresa->cercarProducte($conservarFred, $quantitat, $productestots);
} else {
    $productes = $empresa->populateProductes();
}
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/llistaProductes.php';
require_once 'view/footer.php';
?>
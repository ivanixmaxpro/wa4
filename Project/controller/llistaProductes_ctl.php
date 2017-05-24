<?php

$title = "Productes";

require_once 'view/tablas.php';
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';

if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = new Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}

if (isset($_REQUEST["Submit"])) {

    $nom = $_REQUEST['nom'];
    $conservarFred = $_REQUEST['conservarFred'];
    $limitRegistres = $_REQUEST['qqa'];
    $tipusProducte = $_REQUEST['tipus'];


    $productes = $empresa->filtrarProductes($nom, $conservarFred, $limitRegistres, $tipusProducte);

} else {
    $productes = $empresa->populateProductes();
}

require_once 'view/llistaProductes.php';
require_once 'view/footer.php';
?>
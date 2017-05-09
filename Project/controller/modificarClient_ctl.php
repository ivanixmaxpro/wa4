<?php

$title = "modificar client";
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$clientDAO = new ClientDAO();
$client = $clientDAO->searchByID($id);
if (isset($_REQUEST['Submit'])) {

    if (isset($_REQUEST['codi'])) {
        $codi = $_REQUEST['codi'];
    }
    if (isset($_REQUEST['nom'])) {
        $nom = $_REQUEST['nom'];
    }
    if (isset($_REQUEST['informacio'])) {
        $informacio = $_REQUEST['informacio'];
    }

    $client = new Client($nom, $codi, $informacio);
    $clientDAO->modificar($client, $id);
    $missatge = 'client modificat';
    $redireccio = 'index.php?ctl=client&act=llista';
    require_once 'view/confirmacio.php';
    // falta missatge confirmacio
} else {
    require_once 'view/modificarClient.php';
}
require_once 'view/footer.php';
?>
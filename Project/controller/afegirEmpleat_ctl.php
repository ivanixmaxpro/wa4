<?php

$title = "afegir client";
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';

if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$clientDAO = new ClientDAO();


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

    $client = new Client(null,$nom, $codi,$informacio);
    $clientDAO->inserir($client);
    $missatge = 'client afegit';
    $redireccio = 'index.php?ctl=client&act=llista';
    require_once 'view/confirmacio.php';
} else {
    require_once 'view/afegirClient.php';
}
require_once 'view/footer.php';
?>
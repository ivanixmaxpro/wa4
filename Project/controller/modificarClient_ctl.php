<?php

$title = "modificar client";
$redireccio = 'index.php?ctl=client&act=llista';
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
    if ($client->validateClient()->getOk()) {
        try {
            $clientDAO->modificar($client, $id);
            $missatge = $client->validateClient()->getMsg();

            require_once 'view/confirmacio.php';
        } catch (Exception $e) {

            $missatge = $e->getMessage();
            require_once 'view/error.php';
        }
    } else {
        $missatge = $client->validateClient()->getMsg();
        require_once 'view/error.php';
    }
} else {
    require_once 'view/modificarClient.php';
}
require_once 'view/footer.php';
?>
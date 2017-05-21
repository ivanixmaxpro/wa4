<?php

$title = "afegir client";
$redireccio = 'index.php?ctl=client&act=llista';
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

    $client = new Client(null, $nom, $codi, $informacio);

    if ($client->validateClient()->getOk()) {
        try {
            $clientDAO->inserir($client);
            $missatge = $client->validateClient()->getMsg();

            require_once 'view/confirmacio.php';
        } catch (Exception $e) {

            $missatge = $e->getMessage();
            require_once 'view/error.php';
        }
    } else {
        //missatege de la clase validar

        $missatge = $client->validateClient()->getMsg();
        require_once 'view/error.php';
    }
}else{
    require_once 'view/afegirClient.php';
}
require_once 'view/footer.php';
?>
<?php

$title = 'llista clients';
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
    $proveidors = $empresa->populateProveidors();
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();
    $clients = $empresa->populateClients();
    $_SESSION['empresa'] = serialize($empresa);
}
$clientDAO = new ClientDAO();
$clientDAO->eliminar($id);
$missatge = 'S\'ha eliminat el client satisfactòriament.';
$redireccio = 'index.php?ctl=client&act=llista';
require_once 'view/confirmacio.php';
require_once 'view/footer.php';

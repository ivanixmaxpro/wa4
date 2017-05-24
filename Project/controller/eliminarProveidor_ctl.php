<?php

$title = 'llista proveidors';
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
    $proveidors = $empresa->populateProveidors();
    $_SESSION['empresa'] = serialize($empresa);
}
$proveidorsDAO = new ProveidorDAO();
$proveidorsDAO->eliminar($id);
$missatge = 'S\'ha eliminat el proveïdor satisfactòriament.';
$redireccio = 'index.php?ctl=proveidor&act=llista';
require_once 'view/confirmacio.php';
require_once 'view/footer.php';

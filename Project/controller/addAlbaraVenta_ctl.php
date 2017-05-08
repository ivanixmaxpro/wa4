<?php

if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = new Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}

if (isset($_REQUEST["submit"])) {
    
} else {
    $productes = $empresa->populateProductes();
}
$title = "Creacio d'un Albar de venta";

include 'view/mostrarSelects.php';
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/form_addAlbaraVenta.php';
require_once 'view/footer.php';

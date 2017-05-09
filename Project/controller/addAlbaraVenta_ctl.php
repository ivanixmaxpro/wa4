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
//    $cars = array
//  (
//  array("Volvo",22,18),
//  array("BMW",15,13),
//  array("Saab",5,2),
//  array("Land Rover",17,15)
//  );

$title = "Creacio d'un Albar de venta";

include 'view/mostrarSelects.php';
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/form_addAlbaraVenta.php';
require_once 'view/footer.php';

<?php

if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = new Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}

if (isset($_REQUEST["Submit"])) {
} else {
    $albaransVenta = $empresa->populateAlbaransVenta();
}
$title = "Llista albarans de venta";

require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/tablas.php';
require_once 'view/llistaAlbaransVenta.php';
require_once 'view/footer.php';
?>
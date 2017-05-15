<?php

$title = "";
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}


$albaraCompraComplet = $empresa->searchAlbaraCompra($_REQUEST['id']);
$title = "Albarà: " . $albaraCompraComplet[0][0]->getCodi();

require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/detallAlbaraCompra.php';
require_once 'view/footer.php';

<?php

$title = "";
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}


$albaraVentaComplet = $empresa->searchAlbaraVenta($_REQUEST['id']);
$title = "Albarà: " . $albaraVentaComplet[0][0]->getCodi();

require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/detallAlbaraVenta.php';
require_once 'view/footer.php';

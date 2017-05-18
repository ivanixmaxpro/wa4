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
$client = $empresa->searchClientById($albaraVentaComplet[0][0]->getId_client());
$data = date_create($albaraVentaComplet[0][0]->getData());
$dataFormatada = date_format($data, 'd-m-Y');

require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/tablas.php';
require_once 'view/detallAlbaraVenta.php';
require_once 'view/footer.php';

<?php

/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 9/05/17
 * Time: 16:20
 */
$title = "Detalls producte";
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$usuariId = $_SESSION['id_usuari'];


if (isset($_REQUEST['id'])) {
    $producte = $empresa->searchProducteChilds($_REQUEST['id']);
    $ubicacio = $empresa->searchUbicacioById($producte->getId_ubicacio());
}

require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/detallsProducte.php';
require_once 'view/footer.php';
?>
<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 9/05/17
 * Time: 16:20
 */

$title = "Modificar producte";
if(isset($_SESSION['empresa'])){
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$usuariId = $_SESSION['id_usuari'];


if(isset($_REQUEST['id'])){
    $producte = new Producte();
    $producte = $empresa->searchProducte($_REQUEST['id']);
}



require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/modificarProducte.php';
require_once 'view/footer.php';

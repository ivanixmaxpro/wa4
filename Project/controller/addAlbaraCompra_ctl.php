<?php

if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = new Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}

if (isset($_REQUEST["submit"])) {

    $arrProductesDelAlbara = array();

    $ss = $_POST['passarArrProductes'];
    $campProveidor = $_POST['campProveidor'];
    $campEmpresa = $_POST['campEmpresa'];
    $campCodi = $_POST['campCodi'];
    $campObservacions = $_POST['campObservacions'];
    $campPreu = $_POST['campPreu'];
    $campData = $_POST['campData'];
    $campLocalitat = $_POST['campLocalitat'];
    $arrDePosProductes = explode(',', $ss);

    foreach ($arrDePosProductes as $prod) {
        array_push($arrProductesDelAlbara, explode('-', $prod));
    }

    $albara = new AlbaraCompra();

    $albara->insertAlbara($campProveidor, $campEmpresa, $campCodi, $campObservacions, $campPreu, $campData, $campLocalitat, $arrProductesDelAlbara);
    header("Location: index.php");
} else {

    $productes = $empresa->populateProductes();
    $proveidors = $empresa->populateProveidors();
}


$title = "Creacio d'un Albar de compra";

include 'view/mostrarSelects.php';
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/form_addAlbaraCompra.php';
require_once 'view/footer.php';
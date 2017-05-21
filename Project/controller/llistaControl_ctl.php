<?php

$title = "Control de personal";
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
if (isset($_REQUEST["Submit"]) && $_REQUEST['usuari'] != "-") {
    $usri = $_REQUEST['usuari'];
    $usuaris = $empresa->populateUsuaris();
    $control = $empresa->filtrarControlUsuari($usri);
} else {
    //Monta Taula
    $control = $empresa->populateControl();
    //Monta Select
    $usuaris = $empresa->populateUsuaris();
}

require_once 'view/mostrarSelects.php';
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/tablas.php';
require_once 'view/llistaControl.php';
require_once 'view/footer.php';
?>

<?php

$title = "Empleat";
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}

if ($_REQUEST['id'] != $_SESSION['id_usuari'] && $_SESSION['permisos']['empleat']->getVisualitzar() != 1) {
    $missatge = "No tens permisos per accedir.";
    $redireccio = "index.php";
    include "view/error.php";
} else {

    $empleat = $empresa->searchEmpleat($_REQUEST['id']);
    $usuari = $empresa->searchUsuariByEmpleat($_REQUEST['id']);
    $horari = $empresa->showHorari($usuari->getId_usuari());
    if ($horari == null || $horari == "") {
        $horari = "Aquest usuari no té un horari assignat, siusplau, posis amb contace amb resursus humans per establir-lo.";
    }
// mirar tema permisos
    $permisos = [];
    $permisos['edicio'] = 0;
    require_once 'view/detallEmpleat.php';
}


require_once 'view/footer.php';
?>
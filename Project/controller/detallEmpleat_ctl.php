<?php

$title = "Detall empleat";
if(isset($_SESSION['empresa'])){
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}

if ($_REQUEST['id'] != $_SESSION['id_usuari'] && $_SESSION['permisos']['empleat']->getVisualitzar() != 1) {
header("Location: index.php");
}

$empleat = $empresa->searchEmpleat($_REQUEST['id']);
$horari = $empresa->showHorari($_SESSION['id_usuari']);
if($horari == null || $horari == ""){
    $horari = "Aquest usuari no té un horari assignat, siusplau, posis amb contace amb resursus humans per establir-lo.";
}
// mirar tema permisos
$permisos = [];
$permisos['edicio'] = 0;

require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/detallEmpleat.php';
require_once 'view/footer.php';
?>
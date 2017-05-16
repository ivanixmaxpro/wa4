<?php

$title = "afegir client";
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

if (isset($_REQUEST['Submit'])) {
//
//    if (isset($_REQUEST['codi'])) {
//        $codi = $_REQUEST['codi'];
//    }

    $usuari = new Usuari();
    $empleat = new Empleat();
    $horari = new Horari();
    $permis = new Permis();
    
//    $clientDAO->inserir($client);
//    $missatge = 'client afegit';
//    $redireccio = 'index.php?ctl=client&act=llista';
//    require_once 'view/confirmacio.php';
} else {
     $llistatFuncionalitats = $empresa->populateFuncionalitats();
     $dies = $empresa->populateDia();
    
    require_once 'view/afegirClient.php';
}
require_once 'view/footer.php';
?>
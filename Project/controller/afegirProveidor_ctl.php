<?php

$title = "afegir proveidor";
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
$proveidorsDAO = new ProveidorDAO();


if (isset($_REQUEST['Submit'])) {

    if (isset($_REQUEST['codi'])) {
        $codi = $_REQUEST['codi'];
    }
    if (isset($_REQUEST['nom'])) {
        $nom = $_REQUEST['nom'];
    }


    $proveidor = new Proveidor(null,$nom, $codi);
    $proveidorsDAO->inserir($proveidor);
    $missatge = 'proveidor afegit';
    $redireccio = 'index.php?ctl=proveidor&act=llista';
    require_once 'view/confirmacio.php';
} else {
    require_once 'view/afegirProveidor.php';
}
require_once 'view/footer.php';
?>
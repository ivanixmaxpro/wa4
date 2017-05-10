<?php

$title = "llista Missatges";
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$missatgesDAO = new MissatgeDAO();



require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';

if (isset($_REQUEST['Submit'])) {

    if (isset($_REQUEST['titol'])) {
        $titol = $_REQUEST['titol'];
    }
    if (isset($_REQUEST['informacio'])) {
        $informacio = $_REQUEST['informacio'];
    }
    $idUsuari = $_SESSION["id_usuari"];
    $data=getdate();
    $data = date('Y-m-d H:i:s');
    $missatgeNou = new Missatge($idUsuari,false,$titol,$data,$informacio);
    $missatgesDAO->inserir($missatgeNou);
    $missatge = 'has creat missatge correctament';
    $redireccio = 'index.php?ctl=missatge&act=llistaMissatges';
    require_once 'view/confirmacio.php';
}else {
    require_once 'view/crearMissatge.php';
}

require_once 'view/footer.php';
?>

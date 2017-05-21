<?php

$title = "llista Missatges";
$redireccio = 'index.php?ctl=missatge&act=llistaMissatges';
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
    $data = getdate();
    $data = date('Y-m-d H:i:s');
    $missatgeNou = new Missatge($idUsuari, false, $titol, $data, $informacio);

    if ($missatgeNou->validateMissatge()->getOk()) {
        try {
            $missatgesDAO->inserir($missatgeNou);
            $missatge = $missatgeNou->validateMissatge()->getMsg();
            $redireccio = "?ctl=missatge&act=llista";
            require_once 'view/confirmacio.php';
        } catch (Exception $e) {
            $missatge = $e->getMessage();
            $redireccio = "?ctl=missatge&act=llista";
            require_once 'view/error.php';
        }
    } else {
        //missatege de la clase validar
        $missatge = $missatgeNou->validateMissatge()->getMsg();
        $redireccio = "?ctl=missatge&act=llista";
        require_once 'view/error.php';
    }
} else {
    require_once 'view/crearMissatge.php';
}

require_once 'view/footer.php';
?>

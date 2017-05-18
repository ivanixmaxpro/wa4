<?php

$title = "afegir proveidor";
 $redireccio = 'index.php?ctl=proveidor&act=llista';
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
    $proveidor = new Proveidor(null, $nom, $codi);
    if ($proveidor->validateProveidor()->getOk()) {
        try {
            $proveidorsDAO->inserir($proveidor);
            $missatge = $proveidor->validateProveidor()->getMsg();
            require_once 'view/confirmacio.php';
        } catch (Exception $e) {
            $missatge = $e->getMessage();
            require_once 'view/error.php';
        }
    } else {
        $missatge = $proveidor->validateProveidor()->getMsg();
        require_once 'view/error.php';
    }
} else {
    require_once 'view/afegirProveidor.php';
}
require_once 'view/footer.php';
?>
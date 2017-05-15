<?php

$title = "modificar client";
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
if (isset($_REQUEST['id_usuari'])) {
    $id = $_REQUEST['id_usuari'];
}
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
if (isset($_REQUEST['Submit'])) {

} else {
    $llistatPermissos = $empresa->searchPermissos($id);
    
    
    require_once 'view/modificarPermissos.php';
}
require_once 'view/footer.php';
?>
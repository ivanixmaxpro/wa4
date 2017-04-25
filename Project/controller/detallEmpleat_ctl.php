<?php

if(isset($_SESSION['empresa'])){
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}

$empleats = $empresa->populateEmpleats();
// buscar empleat per id agafada de la sessio

require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/detallEmpleat.php';
require_once 'view/footer.php';
?>
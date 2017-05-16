<?php

$title = "afegir empleat";
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
$clientDAO = new ClientDAO();


    require_once 'view/afegirEmpleat.php';

require_once 'view/footer.php';
?>
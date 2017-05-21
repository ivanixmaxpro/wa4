<?php

$title = "Veure els moviments de productes";
require_once 'view/tablas.php';
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
$registre = array();
$file = "logs/MoureProductesLog.txt";

if (file_exists($file)) {
    $file = fopen("logs/MoureProductesLog.txt", "r");
    while (!feof($file)) {
        array_push($registre, fgets($file));
    }
    fclose($file);
} else {
    array_push($registre, "No s'han realitzat cap moviment de producte.");
}

require_once 'view/veureMovimentsProductes.php';
require_once 'view/footer.php';

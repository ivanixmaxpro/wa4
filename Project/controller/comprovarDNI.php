<?php
header('Content-Type: text/txt; charset=utf-8');
echo "PRUEBA";
die();

if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}

$dni = $_REQUEST['dni'];

if (!empty($dni)) {
    validar_dni($dni);
}

function validar_dni($dni) {
    $letra = substr($dni, -1);
    $letra = strtoupper($letra);
    $numeros = substr($dni, 0, -1);

    $empleat = $empresa->searchEmpleatByDNI($dni);

    if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letra && strlen($letra) == 1 && strlen($numeros) == 8) {
        if (isset($empleat)) {
            echo 'Aquest DNI ja és troba registrat.';
        } else {
            echo 'DNI Vàlid';
        }
    } else {
        echo 'DNI Invàlid';
    }
}

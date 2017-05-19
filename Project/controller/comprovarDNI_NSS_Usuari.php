<?php
require_once("function_AutoLoad.php");

session_start();

if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}

if (!empty($_REQUEST['dni'])) {
    $dni = $_REQUEST['dni'];
    validar_dni($dni, $empresa);
} else if (!empty($_REQUEST['nss'])) {
    $nss = $_REQUEST['nss'];
    validar_nss($nss, $empresa);
} else if (!empty($_REQUEST['usuari'])) {
    $usuari = $_REQUEST['usuari'];
    validar_usuari($usuari, $empresa);
}

function validar_dni($dni, $empresa) {

    if (!preg_match('/^[0-9]{8}[A-Z]$/', $dni)) {
        echo 'El DNI és invàlid';
    } else {
        $letraDNI = substr($dni, -1);
        $letra = strtoupper($letraDNI);
        $numeros = substr($dni, 0, -1);

        $empleat = $empresa->searchEmpleatByDNI($dni);

        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letra && strlen($letra) == 1 && strlen($numeros) == 8) {
            if (isset($empleat) && $empleat != null) {
                echo 'Aquest DNI ja és troba registrat.';
            } else {
                echo 'El DNI és vàlid';
            }
        }
    }
}

function validar_nss($nss, $empresa) {
    $empleat = $empresa->searchEmpleatByNSS($nss);

    if (isset($empleat) && $empleat != null) {
        echo 'Aquest número de la Seguretat Social ja és troba registrat.';
    }
}

function validar_usuari($usuari, $empresa) {
    $usri = $empresa->searchUsuariByNom($usuari);

    if (isset($usri) && $usri != null) {
        echo 'Aquest usuari ja és troba registrat.';
    }
}

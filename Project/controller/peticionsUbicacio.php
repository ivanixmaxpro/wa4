<?php

require_once("function_AutoLoad.php");

session_start();


if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = new Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}


$ubicacio = $empresa->searchUbicacio($_REQUEST['id_ubicacio']);


if ($ubicacio != null) {

    $tenda = $ubicacio->getQuantitatTenda();
    $stock = $ubicacio->getQuantitatStock();
    $total = $tenda + $stock;



    echo "{\"total\":\"$total\"}";
}

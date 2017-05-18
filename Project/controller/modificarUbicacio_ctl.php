<?php

$title = "Modificar ubicacio";
if (isset($_REQUEST['id_ubicacio'])) {
    $id = $_REQUEST['id_ubicacio'];
}
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
if (isset($_REQUEST['submit'])) {

    if (isset($_REQUEST['quantitatMoure']) && $_REQUEST['quantitatMoure'] > 0) {
        $ubicacio = $empresa->searchUbicacio($id);
        $tenda = $ubicacio->getQuantitatTenda();
        $stock = $ubicacio->getQuantitatStock();

        switch ($_REQUEST['moureUbicacio']) {
            case 'tenda':
                if ($_REQUEST['quantitatMoure'] <= $stock) {
                    $ubicacio->updateUbicacio($_REQUEST['quantitatMoure'], $id, $_REQUEST['moureUbicacio']);
                } else {
                    
                }

                break;
            case 'stock':
                if ($_REQUEST['quantitatMoure'] <= $tenda) {
                    $ubicacio->updateUbicacio($_REQUEST['quantitatMoure'], $id, $_REQUEST['moureUbicacio']);
                } else {
                    
                }

                break;
            default:
                break;
        }
    }
} else {
    
}
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/mostrarSelects.php';
require_once 'view/modificarUbicacio.php';
require_once 'view/footer.php';
?>
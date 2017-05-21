<?php

$title = "Modificar ubicacio";
if (isset($_REQUEST['id_ubicacio'])) {
    $id = $_REQUEST['id_ubicacio'];
}
if (isset($_REQUEST['id'])) {
    $idProducte = $_REQUEST['id'];
}
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';

if (isset($_REQUEST['submit'])) {

    if (isset($_REQUEST['id'])) {
        $idProducte = $_REQUEST['id'];
        $producte = $empresa->searchProducte($idProducte);
    }
    if ($producte->getId_ubicacio() == $_REQUEST['id_ubicacio']) {

        if (isset($_REQUEST['quantitatMoure']) && $_REQUEST['quantitatMoure'] > 0) {
            $ubicacio = $empresa->searchUbicacio($id);
            $tenda = $ubicacio->getQuantitatTenda();
            $stock = $ubicacio->getQuantitatStock();

            switch ($_REQUEST['moureUbicacio']) {
                case 'tenda':
                    if ($_REQUEST['quantitatMoure'] <= $stock) {
                        $ubicacio->updateUbicacio($_REQUEST['quantitatMoure'], $id, $_REQUEST['moureUbicacio']);
                        $missatgeFitxer = "Del producte " . $producte->getNom() . " s’ha traspassat la quantitat de " . $_REQUEST['quantitatMoure'] . " del estoc cap a la tenda al dia " . date("d-m-Y") . " a les " . date("H:i:s") . ".";
                        $redireccio = "?ctl=producte&act=llista";
                        $missatge = "S'ha canviar l'ubicació correctament.";
                        require_once 'view/confirmacio.php';
                        require_once 'view/footer.php';
                    }
                    break;
                case 'stock':
                    if ($_REQUEST['quantitatMoure'] <= $tenda) {
                        $ubicacio->updateUbicacio($_REQUEST['quantitatMoure'], $id, $_REQUEST['moureUbicacio']);
                        $missatgeFitxer = "Del producte " . $producte->getNom() . " s’ha traspassat la quantitat " . $_REQUEST['quantitatMoure'] . " de la tenda cap a l'estoc al dia " . date("Y-m-d ") . " a les " . date("H:i:s") . ".";
                        ;
                        $redireccio = "?ctl=producte&act=llista";
                        $missatge = "S'ha canviar l'ubicació correctament.";
                        require_once 'view/confirmacio.php';
                        require_once 'view/footer.php';
                    }
                    break;
                default:
                    break;
            }
            $fp = fopen("logs/MoureProductesLog.txt", "a");
            fwrite($fp, $missatgeFitxer . PHP_EOL);
            fclose($fp);
        }
    } else {
        $redireccio = "?ctl=producte&act=llista";
        $missatge = "S'ha canviar l'ubicació correctament.";
        require_once 'view/confirmacio.php';
        require_once 'view/footer.php';
    }
} else {
    if (isset($_REQUEST['id'])) {
        $idProducte = $_REQUEST['id'];
        $producte = $empresa->searchProducte($idProducte);
    }
    require_once 'view/mostrarSelects.php';
    require_once 'view/modificarUbicacio.php';
    require_once 'view/footer.php';
}
?>
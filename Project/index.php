<?php

require_once("controller/function_AutoLoad.php");

session_start();


if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);

} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);

}

if(isset($_SESSION['permisos'])){

    unset($_SESSION['permisos']);

    if(isset($empresa)){
        $_SESSION['permisos'] = $empresa->searchPermissos($_SESSION['id_usuari']);
    }else{
        $empresa = New Empresa();
        $_SESSION['permisos'] = $empresa->searchPermissos($_SESSION['id_usuari']);
    }
}

$ctl = "home";

if (isset($_REQUEST['ctl'])) {
    $ctl = $_REQUEST['ctl'];
    $act = null;
    if (isset($_REQUEST['act'])) {
        $act = $_REQUEST['act'];
    }
}

if (isset($_SESSION["login"]) == false) {

    //descomentar per afegir funcionalitat login
    $ctl = "login";
    $act = "login";
}

switch ($ctl) {
    case"login":
        switch ($act) {
            case "login":
                include "controller/login_ctl.php";
                break;
            case "canviar":
                include "controller/canviarContra_ctl.php";
                break;
            case"sortir";
                include "controller/logout.php";
                break;
        }
        break;

    case "empleat":
        switch ($act) {
            case "afegir":
                if($_SESSION['permisos']['empleat']->getCrear() == 1 && isset($_SESSION['permisos'])){
                    include "controller/afegirEmpleat_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "menu":
                if($_SESSION['permisos']['empleat']->getEliminar() == 1 && $_SESSION['permisos']['empleat']->getEditar() && $_SESSION['permisos']['empleat']->getVisualitzar() && isset($_SESSION['permisos'])){
                    include "controller/menuEmpleat_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "detall":
                include "controller/detallEmpleat_ctl.php";
                break;
            case "eliminar":
                if($_SESSION['permisos']['empleat']->getEliminar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/eliminarEmpleat_ctl.php";
                 }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "modificar":
                if($_SESSION['permisos']['empleat']->getEditar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/modificarEmpleat_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "llista":
                if($_SESSION['permisos']['empleat']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/llistaEmpleats_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "fitxar":
                include "controller/fitxarEmpleat_ctl.php";
                break;
        }
        break;
    case "missatge":
        switch ($act) {
            case "llistaMissatges":
                include "controller/llistaMissatges_ctl.php";
                break;

            case "detall":
                include "controller/detallMissatge_ctl.php";
                break;
            case "crear":
                include "controller/crearMissatge_ctl.php";
                break;
        }
        break;

    case "producte":
        switch ($act) {
            case "afegir":
                if($_SESSION['permisos']['producte']->getCrear() == 1 && isset($_SESSION['permisos'])){
                    include "controller/afegirProducte_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "llista":
                if($_SESSION['permisos']['producte']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/llistaProductes_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "detall":
                if($_SESSION['permisos']['producte']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/detallProducte_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "modificar":
                if($_SESSION['permisos']['producte']->getEditar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/modificarProductes_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "eliminar":
                if($_SESSION['permisos']['producte']->getEliminar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/eliminarProducte_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
        }
        break;

    case "proveidor":
        switch ($act) {
            case "afegir":
                if($_SESSION['permisos']['proveidor']->getCrear() == 1 && isset($_SESSION['permisos'])){
                    include "controller/afegirProveidor_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "cercar":
                include "controller/cercarProveidor_ctl.php";
                break;
            case "modificar":
                if($_SESSION['permisos']['proveidor']->getEditar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/modificarProveidor_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "eliminar":
                if($_SESSION['permisos']['proveidor']->getEliminar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/eliminarProveidor_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "detall":
                if($_SESSION['permisos']['proveidor']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/detallProveidor_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "llista":
                if($_SESSION['permisos']['proveidor']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/llistaProveidor_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
        }
        break;

    case "client":
        switch ($act) {
            case "afegir":
                if($_SESSION['permisos']['client']->getCrear() == 1 && isset($_SESSION['permisos'])){
                    include "controller/afegirClient_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "cercar":
                    include "controller/cercarClient_ctl.php";
                break;
            case "modificar":
                if($_SESSION['permisos']['client']->getEditar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/modificarClient_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "eliminar":
                if($_SESSION['permisos']['client']->getEliminar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/eliminarClient_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "detall":
                if($_SESSION['permisos']['client']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/detallClient_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "llista":
                if($_SESSION['permisos']['client']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/llistaClient_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
        }
        break;
    case "albara":
        switch ($act) {

            case "llista":
                if($_SESSION['permisos']['albaraVenta']->getVisualitzar() == 1 && $_SESSION['permisos']['albaraCompra']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/llistaAlbarans_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
        }
        break;
    case "control":
        switch ($act) {

            case "llista":
                if($_SESSION['permisos']['control']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/llistaControl_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
        }
        break;
    case "albaraVenta":
        switch ($act) {
            case "afegir":
                if($_SESSION['permisos']['albaraVenta']->getCrear() == 1 && isset($_SESSION['permisos'])){
                    include "controller/addAlbaraVenta_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "modificar":
                if($_SESSION['permisos']['albaraVenta']->getCrear() == 1 && isset($_SESSION['permisos'])){
                    include "controller/modificarAlbaraVenta_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "detall":
                if($_SESSION['permisos']['albaraVenta']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/detallAlbaraVenta_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "llista":
                if($_SESSION['permisos']['albaraVenta']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/llistaAlbaransVenta_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
        }
        break;
    case "albaraCompra":
        switch ($act) {
            case "afegir":
                if($_SESSION['permisos']['albaraCompra']->getCrear() == 1 && isset($_SESSION['permisos'])){
                    include "controller/addAlbaraCompra_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "modificar":
                if($_SESSION['permisos']['albaraCompra']->getEditar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/modificarAlbaraCompra_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "detall":
                if($_SESSION['permisos']['albaraCompra']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/detallAlbaraCompra_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "llista":
                if($_SESSION['permisos']['albaraCompra']->getVisualitzar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/llistaAlbaransCompra_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
        }
        break;


    case "permis":
        switch ($act) {
            case "modificar":
                if($_SESSION['permisos']['permisos']->getEditar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/modificarPermissos_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
            case "detall":
                if($_SESSION['permisos']['permisos']->getVisualitzar() == 1 && isset($_SESSION['permisos']) && isset($_SESSION['permisos'])){
                    include "controller/detallPermissos_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
        }
        break;
    case "horari":
        switch ($act) {
            case "modificar":
                if($_SESSION['permisos']['empleat']->getEditar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/modificarHorari_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
        }
        break;
    case "ubicacio":
        switch ($act) {
            case "modificar":
                if($_SESSION['permisos']['producte']->getEditar() == 1 && isset($_SESSION['permisos'])){
                    include "controller/modificarUbicacio_ctl.php";
                }else{
                    $title="Error de permisos";
                    include "view/header.php";
                    include "view/sidebar.php";
                    include "view/mainNav.php";
                    $redireccio = "?ctl=home";
                    $missatge = "No tens permisos per accedir.";
                    include "view/error.php";
                }
                break;
        }
        break;
    default:
        include "controller/" . $ctl . "_ctl.php";
        break;
}
?>


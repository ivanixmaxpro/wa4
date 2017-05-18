<?php

require_once("controller/function_AutoLoad.php");

session_start();

//Empresa	
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
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
    //$ctl = "login";
    //$act = "login";
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
            case "registre":
                include "controller/registreusuari_ctl.php";
                break;
            case"sortir";
                include "controller/logout.php";
                break;
        }
        break;

    case "empleat":
        switch ($act) {
            case "afegir":
                include "controller/afegirEmpleat_ctl.php";
                break;
            case "menu":
                include "controller/menuEmpleat_ctl.php";
                break;
            case "detall":
                include "controller/detallEmpleat_ctl.php";
                break;
            case "eliminar":
                include "controller/eliminarEmpleat_ctl.php";
                break;
            case "modificar":
                include "controller/modificarEmpleat_ctl.php";
                break;
            case "llista":
                include "controller/llistaEmpleats_ctl.php";
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
                include "controller/afegirProducte_ctl.php";
                break;
            case "llista":
                include "controller/llistaProductes_ctl.php";
                break;
            case "detall":
                include "controller/detallProducte_ctl.php";
                break;
            case "modificar":
                include "controller/modificarProductes_ctl.php";
                break;
            case "eliminar":
                include "controller/eliminarProducte_ctl.php";
                break;
        }
        break;

    case "proveidor":
        switch ($act) {
            case "afegir":
                include "controller/afegirProveidor_ctl.php";
                break;
            case "cercar":
                include "controller/cercarProveidor_ctl.php";
                break;
            case "modificar":
                include "controller/modificarProveidor_ctl.php";
                break;
            case "eliminar":
                include "controller/eliminarProveidor_ctl.php";
                break;
            case "detall":
                include "controller/detallProveidor_ctl.php";
                break;
            case "llista":
                include "controller/llistaProveidor_ctl.php";
                break;
        }
        break;

    case "client":
        switch ($act) {
            case "afegir":
                include "controller/afegirClient_ctl.php";
                break;
            case "cercar":
                include "controller/cercarClient_ctl.php";
                break;
            case "modificar":
                include "controller/modificarClient_ctl.php";
                break;
            case "eliminar":
                include "controller/eliminarClient_ctl.php";
                break;
            case "detall":
                include "controller/detallClient_ctl.php";
                break;
            case "llista":
                include "controller/llistaClient_ctl.php";
                break;
        }
        break;
    case "albara":
        switch ($act) {

            case "llista":
                include "controller/llistaAlbarans_ctl.php";
                break;
        }
        break;
    case "control":
        switch ($act) {
           
            case "llista":
                include "controller/llistaControl_ctl.php";
                break;
        }
        break;
    case "albaraVenta":
        switch ($act) {
            case "afegir":
                include "controller/addAlbaraVenta_ctl.php";
                break;
            case "modificar":
                include "controller/ctl.php";
                break;
            case "detall":
                include "controller/detallAlbaraVenta_ctl.php";
                break;
            case "llista":
                include "controller/llistaAlbaransVenta_ctl.php";
                break;
        }
        break;
    case "albaraCompra":
        switch ($act) {
            case "afegir":
                include "controller/addAlbaraCompra_ctl.php";
                break;
            case "modificar":
                include "controller/ctl.php";
                break;
            case "detall":
                include "controller/detallAlbaraCompra_ctl.php";
                break;
            case "llista":
                include "controller/llistaAlbaransCompra_ctl.php";
                break;
        }
        break;


    case "permis":
        switch ($act) {
            case "modificar":
                include "controller/modificarPermissos_ctl.php";
                break;
            case "detall":
                include "controller/detallPermissos_ctl.php";
                break;
        }
        break;
    case "horari":
        switch ($act) {
            case "modificar":
                include "controller/modificarHorari_ctl.php";
                break;
        }
        break;
    default:
        include "controller/" . $ctl . "_ctl.php";
        break;
}
?>


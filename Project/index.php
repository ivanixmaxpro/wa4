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
            case "detall":
                include "controller/detallEmpleat_ctl.php";
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
            case "llista":
                include "controller/llistaProductes_ctl.php";
                break;
            case "modificar":
                include "controller/modificarProductes_ctl.php";
                break;
            case "eliminar":
                include "controller/eliminarEmpleat_ctl.php";
                break;
        }
        break;

    case "albaraVenta":
        switch ($act) {
            case "afegir":
                include "controller/addAlbaraVenta_ctl.php";
                break;
        }
        break;

    default:
        include "controller/" . $ctl . "_ctl.php";
        break;
}
?>


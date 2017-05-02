<?php
//require_once("function_AutoLoad.php");
//session_start();


if(isset($_SESSION['empresa'])){
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}

$control = new Control();
$control = $empresa->searchLastControl($_SESSION['id_usuari']);
if($control == null || $control == ""){
    $control = null;
}

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'fitxarOn' :
                $fitxar = new Control($_SESSION['id_usuari'], 1, date('Y-m-d H:i:s'));
                $fitxar->insert();
            break;
        case 'fitxarOff' :
                $fitxar = new Control($_SESSION['id_usuari'], 0, date('Y-m-d H:i:s'));
                $fitxar->insert();
            break;
    }
}

require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/fitxarEmpleat.php';
require_once 'view/footer.php';
unset($control);
?>
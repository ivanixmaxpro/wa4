<?php

include 'view/mostrarSelects.php';
$title = "Creacio d'un Albar de venta";
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = new Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$data = getdate();
$data = date('d-m-Y');
if (isset($_REQUEST["submit"])) {
    $data = getdate();
    $data = date('Y-m-d');
    $arrProductesDelAlbara = array();

    $ss = $_POST['passarArrProductes'];
    $campClient = $_POST['campClient'];
    $campEmpresa = $_POST['campEmpresa'];
    $campCodi = $_POST['campCodi'];
    $campObservacions = $_POST['campObservacions'];
    $campPreu = $_POST['campPreu'];
    $campData = $data;
    $campLocalitat = $_POST['campLocalitat'];
    $arrDePosProductes = explode(',', $ss);

    foreach ($arrDePosProductes as $prod) {
        array_push($arrProductesDelAlbara, explode('-', $prod));
    }

 //   $albara = new AlbaraVenta();

//    $albara->insertAlbara($campClient, $campEmpresa, $campCodi, $campObservacions, $campPreu, $campData, $campLocalitat, $arrProductesDelAlbara);

    $albara = new AlbaraVenta(null, $campClient, $campEmpresa, $campCodi, $campObservacions, $campPreu, $campData, $campLocalitat);
    $redireccio = 'index.php?ctl=albara&act=llista';
    if ($albara->validateAlbara()->getOk()) {
        try {
            $albara->insertAlbara($campClient, $campEmpresa, $campCodi, $campObservacions, $campPreu, $campData, $campLocalitat, $arrProductesDelAlbara);
            $missatge = $albara->validateAlbara()->getMsg();

            require_once 'view/confirmacio.php';
        } catch (Exception $e) {

            $missatge = $e->getMessage();
            require_once 'view/error.php';
        }
    } else {
        //missatege de la clase validar

        $missatge = $albara->validateAlbara()->getMsg();
        require_once 'view/error.php';
    }
} else {
    $productes = $empresa->populateProductes();
    $clients = $empresa->populateClients();
    require_once 'view/form_addAlbaraVenta.php';
}
require_once 'view/footer.php';

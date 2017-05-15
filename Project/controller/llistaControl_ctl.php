<?php
$title= "Crear Missatge";
if(isset($_SESSION['empresa'])){
	$empresa = unserialize($_SESSION['empresa']);
} else {
	$empresa = New Empresa();
	$empresa->recuperarEmpresa(); 

	$_SESSION['empresa'] = serialize($empresa);
}
if (isset($_REQUEST["Submit"])) {
    $usuari = $_REQUEST['usuari'];
    $clients = $empresa->filtrarProveidors($conservarFred, $limitRegistres, $tipusProducte);
} else {
$control = $empresa->populateControl();
$usuaris = $empresa->populateUsuaris();
}
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/llistaControl.php';
require_once 'view/footer.php';

?>

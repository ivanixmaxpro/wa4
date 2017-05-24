<?php
$title= "Clients";
if(isset($_SESSION['empresa'])){
	$empresa = unserialize($_SESSION['empresa']);
} else {
	$empresa = New Empresa();
	$empresa->recuperarEmpresa(); 

	$_SESSION['empresa'] = serialize($empresa);
}

if (isset($_REQUEST["Submit"])) {
    $nom = $_REQUEST['nom'];
    $clients = $empresa->filtrarClients($nom);
} else {
    $clients = $empresa->populateClients();
}



require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/llistaClients.php';
require_once 'view/footer.php';

?>

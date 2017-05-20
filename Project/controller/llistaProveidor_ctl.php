<?php
$title= "Llista proveidor";
if(isset($_SESSION['empresa'])){
	$empresa = unserialize($_SESSION['empresa']);
} else {
	$empresa = New Empresa();
	$empresa->recuperarEmpresa(); 

	$_SESSION['empresa'] = serialize($empresa);
}

if (isset($_REQUEST["Submit"])) {
    $nom = $_REQUEST['nom'];
    $proveidors = $empresa->filtrarProveidors($nom);
} else {
    $proveidors = $empresa->populateProveidors();
}



require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/llistaProveidors.php';
require_once 'view/footer.php';

?>

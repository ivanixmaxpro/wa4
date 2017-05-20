<?php
$title= "Llista Missatges";
if(isset($_SESSION['empresa'])){
	$empresa = unserialize($_SESSION['empresa']);
} else {
	$empresa = New Empresa();
	$empresa->recuperarEmpresa(); 

	$_SESSION['empresa'] = serialize($empresa);
}


require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';


if (isset($_REQUEST["Submit"])) {
    $titol = $_REQUEST['titol'];
    $missatges = $empresa->filtrarMissatges($titol);
} else {
    $missatges = $empresa->populateMissatges();
}

require_once 'view/llistaMissatges.php';
require_once 'view/footer.php';

?>

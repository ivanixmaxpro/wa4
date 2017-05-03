<?php
//Empresa	
if(isset($_SESSION['empresa'])){
	$empresa = unserialize($_SESSION['empresa']);
} else {
	$empresa = New Empresa();
	$empresa->recuperarEmpresa(); 

	$_SESSION['empresa'] = serialize($empresa);
}

if (isset($_REQUEST["Submit"])) {
    if (isset($_REQUEST['marca'])) {
        $marca = $_REQUEST['marca'];
    }
    if (isset($_REQUEST['conservarFred'])) {
        $conservarFred = $_REQUEST['conservarFred'];
    }
    if (isset($_REQUEST['quantitat'])) {
        $quantitat = $_REQUEST['quantitat'];      
    }
    $productes = $empresa->cercar($marca, $conservarFred,$quantitat);
}else{
   $productes = $empresa->populateProductes();
}
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/llistaProductes.php';
require_once 'view/footer.php';

?>
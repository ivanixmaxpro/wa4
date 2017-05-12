<?php
require_once("../controller/function_AutoLoad.php");
if(isset($_SESSION['empresa'])){
	$empresa = unserialize($_SESSION['empresa']);
} else {
	$empresa = New Empresa();
	$empresa->recuperarEmpresa(); 

	$_SESSION['empresa'] = serialize($empresa);
}

$clients = $empresa->populateClients();


foreach ($clients as $client ) {
    
        $id_client = $client->getId_client();
        $nom = $client->getNom();
        $codi = $client-> getCodi();
        $informacio = $client->getInformacio();
        $elementos_json[] = "\"$id_client\": \"$nom\":\"$codi\":\"$informacio\"";
    
   
}

echo "{" . implode(",", $elementos_json) . "}"
?>
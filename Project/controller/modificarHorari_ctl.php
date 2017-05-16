<?php

$title = "Modificar horaris";
if (isset($_REQUEST['id_usuari'])) {
    $id = $_REQUEST['id_usuari'];
}
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
if (isset($_REQUEST['submit'])) {
    
    $llistatHorari = $empresa->searchHoraris($id);
    $i = 0;
     foreach ($llistatHorari as $horari) {

        
        if (isset($_REQUEST["festa$i"])) {
           $horari->setHoraInici(null);
           $horari->setHoraFinal(null);
        } else {
           $horari->setHoraInici($_REQUEST["horaInici_$i"]);
           $horari->setHoraFinal($_REQUEST["horaFinal_$i"]);
        }

        
        $horari->updateHorari();
        $i++;
    }
    
    

} else {
    $dies = $empresa->populateDia();
    $llistatHorari = $empresa->searchHoraris($id);
    
  
    
    
}
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/form_modificarHorari.php';
require_once 'view/footer.php';
?>
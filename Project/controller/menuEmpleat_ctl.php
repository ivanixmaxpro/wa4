<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 9/05/17
 * Time: 16:20
 */

$title = "Menú empleats";
if(isset($_SESSION['empresa'])){
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$usuari = $empresa->searchUsuariByEmpleat($_REQUEST['id']);

$empleat = $empresa->searchEmpleat($_REQUEST['id']);
$horari = $empresa->showHorari($usuari->getId_usuari());
    require_once 'view/header.php';
    require_once 'view/sidebar.php';
    require_once 'view/mainNav.php';
    require_once 'view/menuEmpleat.php';
    require_once 'view/footer.php';


?>
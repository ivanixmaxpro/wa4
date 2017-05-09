<?php
$title = "modificar proveidor";
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$proveidorsDAO = new ProveidorDAO();
$proveidor = $proveidorsDAO->searchByID($id);
if (isset($_REQUEST['Submit'])) {

    if (isset($_REQUEST['codi'])) {
        $codi = $_REQUEST['codi'];
    }
    if (isset($_REQUEST['nom'])) {
        $nom = $_REQUEST['nom'];
    }


    $proveidor = new Proveidor($nom, $codi);
    $proveidorsDAO->modificar($proveidor,$id);

   // falta missatge confirmacio
   
} else {
    require_once 'view/modificarProveidor.php';
}
require_once 'view/footer.php';
?>
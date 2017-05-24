<?php

/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 4/05/17
 * Time: 16:13
 */
$title = "Canviar contrasenya";
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$Idusuari = $_REQUEST['id'];

require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';

if (!empty($_POST)) {
    if ($_REQUEST['send']) {
        $usuariId = $_REQUEST['id'];
        $usuari = $empresa->searchUsuariByEmpleat($usuariId);

        $novaContrasenya1 = $_REQUEST['nova1'];
        $novaContrasenya2 = $_REQUEST['nova2'];

        if ($novaContrasenya1 == $novaContrasenya2) {
            $usuari->setContrasenya(password_hash($novaContrasenya1, PASSWORD_BCRYPT));
            $usuari->updateContrasenya();
            $missatge = "Contrasenya modificada amb éxit.";
            $redireccio = "?ctl=empleat&act=llista";
            require_once "view/confirmacio.php";
            require_once 'view/footer.php';
        } else {
            $msg = "Les contrasenyes noves no coincideixen.";
        }
    }
} else {
    require_once 'view/canviarContraEmpleat.php';
    require_once 'view/footer.php';
}
?>
<?php

$titlePage = "Iniciar Sessio";
$usuari_objecte = new Usuari();

if (isset($_REQUEST['recordarUsuari'])) {
    setcookie("usuari", $_REQUEST['usuari'], time() + 3600, "/");
} else {
    setcookie("usuari", "", time() - 3600, "/");
}


if (isset($_REQUEST['Submit'])) {

    $pass = $_POST['pass'];
    $usuari = $_REQUEST['usuari'];
    $clau = $_REQUEST['pass'];
    $usuariValidat = $usuari_objecte->validateUser($usuari, $clau);
    if ($usuariValidat == true) {
        $_SESSION["login"] = true;
        $_SESSION["usuari"] = $usuari;
        $_SESSION["id_usuari"] = $usuari_objecte->getId_usuari();
        $_SESSION["id_empleat"] = $usuari_objecte->getId_empleat();

        if(!isset($_SESSION['permisos'])){
            if(isset($_SESSION['id_usuari'])){
                $empresa = new Empresa;
                $_SESSION['permisos'] = $empresa->searchPermissos($_SESSION['id_usuari']);
            }
        }
        // guardar en sessión id usuario
        header("Location: index.php");
    } else {
        $_SESSION["usuari"] = "";
        session_unset("usuari");
        session_destroy();
        require_once 'view/header.php';
        $missatge = "Nom d'usuari o contrasenya incorrecte.";
        $redireccio = "index.php";
        require_once 'view/error.php';
        require_once 'view/footer.php';
    }
} else {
    require_once 'view/header.php';
    require_once 'view/login.php';
    require_once 'view/footer.php';
}
?>
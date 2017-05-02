<?php

$titlePage = "Iniciar Sessio";
$usuari_objecte = new Usuari();

if (isset($_REQUEST['recordarUsuari'])) {
    setcookie("usuari", $_REQUEST['usuari'], time() + 3600, "/");
} else {
    setcookie("usuari", "", time() - 3600, "/");
}

require_once 'view/header.php';

if (isset($_REQUEST['Submit'])) {

    $pass = $_POST['pass'];
    $usuari = $_REQUEST['usuari'];
    $clau = $_REQUEST['pass'];
    $usuariValidat = $usuari_objecte->validateUser($usuari, $clau);
    if ($usuariValidat == true) {
        $_SESSION["login"] = true;
        $_SESSION["usuari"] = $usuari;
        $_SESSION["id_usuari"] = $usuari_objecte->getId_usuari();
        header("Location: index.php");
    } else {
        $_SESSION["usuari"] = "";
        session_unset("usuari");
        session_destroy();
        require_once 'view/header.php';
        $missatge = "Error Login";
        require_once 'view/error.php';
        require_once 'view/footer.php';
    }
} else {
    require_once 'view/login.php';
    
}

?>
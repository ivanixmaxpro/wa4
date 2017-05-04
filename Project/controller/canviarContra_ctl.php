<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 4/05/17
 * Time: 16:13
 */

$title = "Canviar contrasenya";
if(isset($_SESSION['empresa'])){
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$usuariId = $_SESSION['id_usuari'];

if (!empty($_POST)) {
    if ($_REQUEST['send']) {
        $usuari = $empresa->searchUsuari($usuariId);
        $contrasenyaAntiga = $_REQUEST['antiga'];
        if(password_verify($usuari->getContrasenya(), $_REQUEST['antiga'])) {
            $novaContrasenya1 = $_REQUEST['nova1'];
            $novaContrasenya1 = $_REQUEST['nova2'];
            if ($novaContrasenya1 === $novaContrasenya2) {
                $usuari->updateContrasenya($usuariId, password_hash($novaContrasenya2, PASSWORD_BCRYPT));
                $msg = "Contrasenya modificada amb éxit.";
            } else {
                $msg = "Les contrasenyes noves con coincideixen.";
            }
        }
        $usuari = $empresa->searchEmpleat($_SESSION['id_usuari']);

        // modificar contrasenya
        var_dump($usuari);
        $usuari->getContrasenya();

    }
}

require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/canviarContra.php';
require_once 'view/footer.php';

?>
<?php

$title = "Veure permissos";
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
if (isset($_REQUEST['submit'])) {

    $llistatPermissos = $empresa->searchPermissos($id);

    foreach ($llistatPermissos as $permis) {

        $nom = $permis->getNom();

        if (isset($_REQUEST["visualitzar_$nom"])) {
            $permis->setVisualitzar(1);
        } else {
            $permis->setVisualitzar(0);
        }
        if (isset($_REQUEST["crear_$nom"])) {
            $permis->setCrear(1);
        } else {
            $permis->setCrear(0);
        }
        if (isset($_REQUEST["editar_$nom"])) {
            $permis->setEditar(1);
        } else {
            $permis->setEditar(0);
        }
        if (isset($_REQUEST["eliminar_$nom"])) {
            $permis->setEliminar(1);
        } else {
            $permis->setEliminar(0);
        }

        $permis->updatePermis();

    }



} else {
    $llistatPermissos = $empresa->searchPermissos($id);

}
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/detallPermissos.php';
require_once 'view/footer.php';
?>
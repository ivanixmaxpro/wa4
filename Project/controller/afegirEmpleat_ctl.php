<?php

$title = "afegir empleat";
include 'emmagatzemarFoto.php';
require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';

if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}

if (isset($_REQUEST['submit'])) {
    $dies = $empresa->populateDia();
    $llistatFuncionalitats = $empresa->populateFuncionalitats();

    $id_empresa = $_REQUEST['id_empresa'];
    $nom = $_REQUEST['nom'];
    $cognom = $_REQUEST['cognom'];
    $dni = $_REQUEST['dni'];
    $address = $_REQUEST['address'];
    $nss = $_REQUEST['nss'];
    $nomina = $_REQUEST['nomina'];
    $description = $_REQUEST['description'];
    $imatge = guardarImatge('empleats');

    if ($imatge == null) {
        $imatge = "/wa4/Project/view/images/empleats/default-avatar.png";
    }

    $empleat = new Empleat($id_empresa, $nom, $cognom, $dni, $address, $nomina, $nss, $imatge, $description);
    $id_empleat = $empleat->addEmpleat();

    //Introduces empleado y devuelve id_empleat

    $usuari = $_REQUEST['usuari'];
    $contrasenya = password_hash($_REQUEST['contra'], PASSWORD_BCRYPT);

    $user = new Usuari($id_empleat, $usuari, $contrasenya);
    $id_usuari = $user->addUsuari();
    //Introduces usuario y devuelve id_usuario

    $i = 0;
    foreach ($dies as $dia) {

        $horari = new Horari($id_usuari, $dia->getId_dia());

        if (isset($_REQUEST["festa$i"])) {
            $horari->setHoraInici(null);
            $horari->setHoraFinal(null);
        } else {
            $horari->setHoraInici($_REQUEST["horaInici_$i"]);
            $horari->setHoraFinal($_REQUEST["horaFinal_$i"]);
        }


        $horari->insertHorari();
        $i++;
    }




    foreach ($llistatFuncionalitats as $funcionalitat) {

        $nom = $funcionalitat->getNom();
        $permis = new Permis($id_usuari, $funcionalitat->getId_funcionalitat());


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
        $permis->insertPermis();
    }

    var_dump($empleat);

//    $clientDAO->inserir($client);
//    $missatge = 'client afegit';
//    $redireccio = 'index.php?ctl=client&act=llista';
//    require_once 'view/confirmacio.php';
} else {
    $llistatFuncionalitats = $empresa->populateFuncionalitats();
    $dies = $empresa->populateDia();

    require_once 'view/afegirEmpleat.php';
}
require_once 'view/footer.php';
?>
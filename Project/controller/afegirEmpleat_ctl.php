<?php

$title = "afegir empleat";
$redireccio = 'index.php?ctl=empleat&act=llista';
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

    $usuari = $_REQUEST['usuari'];
    $contrasenya = password_hash($_REQUEST['contra'], PASSWORD_BCRYPT);

    $horariValid = true;

    if ($imatge == null) {
        $imatge = "/wa4/Project/view/images/empleats/default-avatar.png";
    }

    $empleat = new Empleat($id_empresa, $nom, $cognom, $dni, $address, $nomina, $nss, $imatge, $description);



    if ($empleat->validateEmpleat()->getOk()) {
        $id_empleat = $empleat->addEmpleat();
        $user = new Usuari($id_empleat, $usuari, $contrasenya);
        if ($user->validateNewUser()->getOk()) {
            $id_usuari = $user->getId_usuari();
            //seccio horari
            $i = 0;
            foreach ($dies as $dia) {

                $horari = new Horari($id_usuari, $dia->getId_dia());

                if (isset($_REQUEST["festa$i"])) {
                    $horari->setHoraInici(null);
                    $horari->setHoraFinal(null);
                } else {
                    $horaInici = $_REQUEST["horaInici_$i"];
                    $horaFinal = $_REQUEST["horaFinal_$i"];
                  
                    if ($horari->validarDataIniciFinal($horaInici, $horaFinal)) {
                        $horari->setHoraInici($horaInici);
                        $horari->setHoraFinal($horaFinal);
                    } else {
                        $horariValid = false;
                    }
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

            if ($horariValid) {
                try {
                    $clientDAO->inserir($client);
                    $id_usuari = $user->addUsuari();
                    $missatge = $empleat->validateEmpleat()->getMsg();
                    require_once 'view/confirmacio.php';
                } catch (Exception $e) {

                    $missatge = $e->getMessage();
                    require_once 'view/error.php';
                }
            }else{
                $missatge = "horari no valid";
            require_once 'view/error.php';
            }
        } else {
            $missatge = $usuari->validateNewUser()->getMsg();
            require_once 'view/error.php';
        }
    } else {
        $missatge = $empleat->validateEmpleat()->getMsg();
        require_once 'view/error.php';
    }
} else {
    $llistatFuncionalitats = $empresa->populateFuncionalitats();
    $dies = $empresa->populateDia();

    require_once 'view/afegirEmpleat.php';
}
require_once 'view/footer.php';
?>
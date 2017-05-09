<?php
$title= "llista Missatges";
if(isset($_SESSION['empresa'])){
	$empresa = unserialize($_SESSION['empresa']);
} else {
	$empresa = New Empresa();
	$empresa->recuperarEmpresa(); 

	$_SESSION['empresa'] = serialize($empresa);
}
$missatgesDAO = new MissatgeDAO();


 if (isset($_REQUEST['Submit'])) {

        if (isset($_REQUEST['dni'])) {
            $dni = $_REQUEST['dni'];
        }
        if (isset($_REQUEST['nom'])) {
            $nom = $_REQUEST['nom'];
        }
        if (isset($_REQUEST['cognom1'])) {
            $cognom1 = $_REQUEST['cognom1'];
        }
        if (isset($_REQUEST['cognom2'])) {
            $cognom2 = $_REQUEST['cognom2'];
        }
        if (isset($_REQUEST['categoria'])) {
            $sexe = $_REQUEST['categoria'];
        }
        if (isset($_REQUEST['foto'])) {
            $foto = $_REQUEST['foto'];
        }
        if (isset($_REQUEST['descripcio'])) {
            $descripcio = $_REQUEST['descripcio'];
        }
        $nouActor = new Actor($dni, $nom, $cognom1, $cognom2, $sexe, $foto, $descripcio);
        //verifiquem que el actor no estigui a la base de dades per el dni

        if (!$actordb->buscarPerDni($dni)) {
            //validem dades per metode de la clase
            if ($nouActor->validarActor()->getOk()) {
                try {
                    //afegim el actor a la base de dades
                    $nouActor->inserirActor();
                    $missatge = $nouActor->validarActor()->getMsg();
                    require_once 'view/confirmacio.php';
                } catch (Exception $e) {
                    $missatge = $e->getMessage();
                    require_once 'view/error.php';
                }
            } else {
                //missatege de la clase validar
                 
                $missatge = $nouActor->validarActor()->getMsg();
                require_once 'view/confirmacio.php';
            }
        } else {
            $missatge = "Actor ja existent";
            require_once 'view/error.php';
        }
    } else {
        require_once 'view/afegirActor.php';
    }



require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/crearMissatges.php';
require_once 'view/footer.php';

?>

<?php

$title = "afegir empleat";
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

if (isset($_REQUEST['Submit'])) {
    
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
    $imatge = $_REQUEST['imatge'];
    
    $empleat = new Empleat($id_empresa,$nom,$cognom,$dni,$address,$nomina,$nss,$imatge,$description);
    
    //Introduces empleado y devuelve id_empleat
    
    
    $usuari = $_REQUEST['usuari'];
    $contrasenya = $_REQUEST['contra'];

    $user = new Usuari($usuari,$contrasenya);
    
    //Introduces usuario y devuelve id_usuario
    
     $i = 0;
     foreach ($dies as $dia) {
     
         $horari = new Horari($id_usuari,$dia->getId_dia());
        
        if (isset($_REQUEST["festa$i"])) {
           $horari->setHoraInici(null);
           $horari->setHoraFinal(null);
        } else {
           $horari->setHoraInici($_REQUEST["horaInici_$i"]);
           $horari->setHoraFinal($_REQUEST["horaFinal_$i"]);
        }

        
//        $horari->updateHorari();
        $i++;
    }
    
    
    
    
       foreach ($llistatFuncionalitats as $funcionalitat) {
        
        $nom = $funcionalitat->getNom();
        $permis = new Permis($id_usuari);
        
        
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
//        
//        $permis->updatePermis();
        
    }
    
    
  
    
    
    
 
    $horari = new Horari();
    $permis = new Permis();
    
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
<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 9/05/17
 * Time: 16:20
 */

$title = "Modificar producte";
if(isset($_SESSION['empresa'])){
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$usuariId = $_SESSION['id_usuari'];


if(isset($_REQUEST['id'])){
    $producte = $empresa->searchProducteChilds($_REQUEST['id']);
}

if(!empty($_POST)){
    if($_REQUEST['modify']){
        //require_once 'view/header.php';
        //require_once 'view/sidebar.php';
        //require_once 'view/mainNav.php';

        $select = $_REQUEST['selector'];
        $nom = $_REQUEST['nom'];
        $marca = $_REQUEST['marca'];
        $preu = $_REQUEST['preu'];
        $referencia = $_REQUEST['referencia'];
        $model = $_REQUEST['model'];
        $descripcio = $_REQUEST['descripcio'];
        $conservar = $_REQUEST['conservar'];
        $imagte = $_REQUEST['imagte'];
        $capacitatMl = $_REQUEST['capacitatMlInput'];
        $capacitatMg = $_REQUEST['capacitatMgInput'];
        $unitats = $_REQUEST['unitatsInput'];
        $dades = true;

        if(!isset($select)){
            $dades = false;
        }
        if(!isset($nom) && !is_string($nom)){
            $dades = false;
        }
        if(!isset($marca) && !is_string($marca)){
            $dades = false;
        }
        if(!isset($preu) && !is_numeric($preu)){
            $dades = false;
        }
        if(!isset($referencia) && !is_numeric($referencia)){
            $dades = false;
        }
        if(!isset($model) && !is_string($model)){
            $dades = false;
        }
        if(!isset($descripcio) && !is_string($descripcio)){
            $dades = false;
        }
        // mirar que fer amb imatges
        if(!isset($imatge)){
            $dades = false;
        }
        if(!isset($conservar) && !is_bool($conservar)){
            $dades = false;
        }
        if(!is_numeric($capacitatMl)){
            $dades = false;
        }
        if(!is_numeric($capacitatMg)){
            $dades = false;
        }
        if(!is_numeric($unitats)){
            $dades = false;
        }


        if($dades == true) {
            switch (get_class($producte)) {
                case 'Solid':
                    if (isset($select) && isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imagte) && isset($capacitatMg) && isset($unitats)) {
                        $producte->setNom($nom);
                        $producte->setMarca($marca);
                        $producte->setPreuBase($preu);
                        $producte->setReferencia($referencia);
                        $producte->setModel($model);
                        $producte->setDescripcio($descripcio);
                        $producte->setConservarFred($conservar);
                        $producte->setImatge($imagte);
                        $producte->setCapacitatMg($capacitatMg);
                        $producte->setUnitats($unitats);


                        $empresa->UpdateProduct($producte, get_class($producte));
                        echo "S'ha modificar satisfactoriament.";
                        //require_once 'view/footer.php';
                    }
                    break;
                case 'Semisolid':
                    if (isset($select) && isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imagte) && isset($capacitatMg)) {
                        $producte->setNom($nom);
                        $producte->setMarca($marca);
                        $producte->setPreuBase($preu);
                        $producte->setReferencia($referencia);
                        $producte->setModel($model);
                        $producte->setDescripcio($descripcio);
                        $producte->setConservarFred($conservar);
                        $producte->setImatge($imagte);
                        $producte->setCapacitatMg($capacitatMg);


                        $empresa->UpdateProduct($producte, get_class($producte));
                        echo "S'ha modificar satisfactoriament.";
                        //require_once 'view/footer.php';
                    }
                    break;
                case 'Liquid':
                    if (isset($select) && isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imagte) && isset($capacitatMl)) {
                        $producte->setNom($nom);
                        $producte->setMarca($marca);
                        $producte->setPreuBase($preu);
                        $producte->setReferencia($referencia);
                        $producte->setModel($model);
                        $producte->setDescripcio($descripcio);
                        $producte->setConservarFred($conservar);
                        $producte->setImatge($imagte);
                        $producte->setCapacitatMl($capacitatMl);


                        $empresa->UpdateProduct($producte, get_class($producte));
                        echo "S'ha modificar satisfactoriament.";
                        //require_once 'view/footer.php';
                    }
                    break;
                case 'Gas':
                    if (isset($select) && isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imagte) && isset($capacitatMl)) {
                        $producte->setNom($nom);
                        $producte->setMarca($marca);
                        $producte->setPreuBase($preu);
                        $producte->setReferencia($referencia);
                        $producte->setModel($model);
                        $producte->setDescripcio($descripcio);
                        $producte->setConservarFred($conservar);
                        $producte->setImatge($imagte);
                        $producte->setCapacitatMl($capacitatMl);


                        $empresa->UpdateProduct($producte, get_class($producte));
                        echo "S'ha modificar satisfactoriament.";
                        //require_once 'view/footer.php';
                    }
                    break;
                case 'Altres':
                    if (isset($select) && isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imagte) && isset($unitats)) {
                        $producte->setNom($nom);
                        $producte->setMarca($marca);
                        $producte->setPreuBase($preu);
                        $producte->setReferencia($referencia);
                        $producte->setModel($model);
                        $producte->setDescripcio($descripcio);
                        $producte->setConservarFred($conservar);
                        $producte->setImatge($imagte);
                        $producte->setUnitats($unitats);


                        $empresa->UpdateProduct($producte, get_class($producte));
                        echo "S'ha modificar satisfactoriament.";
                        //require_once 'view/footer.php';
                    }
                    break;
            }
        }else{
            echo "Dades entrades incorrectament.";
            // dades entrades erroneament
        }

    }
}



require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/modificarProducte.php';
require_once 'view/footer.php';

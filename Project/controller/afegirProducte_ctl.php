<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 9/05/17
 * Time: 16:20
 */

$title = "Afegir producte";
if(isset($_SESSION['empresa'])){
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$usuariId = $_SESSION['id_usuari'];

require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/afegirProducte.php';
require_once 'view/footer.php';

if(!empty($_POST)){
    if(isset($_REQUEST['afegir'])){
        require_once 'view/header.php';
        require_once 'view/sidebar.php';
        require_once 'view/mainNav.php';

        $selector = $_REQUEST['selector'];
        $nom = $_REQUEST['nom'];
        $marca = $_REQUEST['marca'];
        $preu = $_REQUEST['preu'];
        $referencia = $_REQUEST['referencia'];
        $model = $_REQUEST['model'];
        $descripcio = $_REQUEST['descripcio'];
        $conservar = $_REQUEST['conservar'];
        $imatge = $_REQUEST['imagte'];
        $capacitatMl = $_REQUEST['capacitatMlInput'];
        $capacitatMg = $_REQUEST['capacitatMgInput'];
        $unitats = $_REQUEST['unitatsInput'];
        $dades = true;


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
        if(!is_string($imatge)){
            $dades = false;
        }
        if(!isset($conservar) && !is_bool($conservar)){
            $dades = false;
        }

        if($dades == true) {
            switch ($selector) {
                case 'solid':
                    if (isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imatge) && isset($capacitatMg) && isset($unitats)) {
                        $producte = new Solid();
                        $producte->setNom($nom);
                        $producte->setMarca($marca);
                        $producte->setPreuBase($preu);
                        $producte->setReferencia($referencia);
                        $producte->setModel($model);
                        $producte->setDescripcio($descripcio);
                        $producte->setConservarFred($conservar);
                        $producte->setImatge($imatge);
                        $producte->setCapacitatMg($capacitatMg);
                        $producte->setUnitats($unitats);


                        $empresa->afegirProducte($producte, get_class($producte));
                        echo "S'ha modificar satisfactoriament.";
                        require_once 'view/footer.php';
                    }
                    break;
                case 'semi-solid':
                    if (isset($select) && isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imatge) && isset($capacitatMg)) {
                        $producte = new Semisolid();
                        $producte->setNom($nom);
                        $producte->setMarca($marca);
                        $producte->setPreuBase($preu);
                        $producte->setReferencia($referencia);
                        $producte->setModel($model);
                        $producte->setDescripcio($descripcio);
                        $producte->setConservarFred($conservar);
                        $producte->setImatge($imatge);
                        $producte->setCapacitatMg($capacitatMg);


                        $empresa->afegirProducte($producte, get_class($producte));
                        echo "S'ha modificar satisfactoriament.";
                        require_once 'view/footer.php';
                    }
                    break;
                case 'liquid':
                    if (isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imatge) && isset($capacitatMl)) {
                        $producte = new Liquid();
                        $producte->setNom($nom);
                        $producte->setMarca($marca);
                        $producte->setPreuBase($preu);
                        $producte->setReferencia($referencia);
                        $producte->setModel($model);
                        $producte->setDescripcio($descripcio);
                        $producte->setConservarFred($conservar);
                        $producte->setImatge($imatge);
                        $producte->setCapacitatMl($capacitatMl);


                        $empresa->afegirProducte($producte, get_class($producte));
                        echo "S'ha modificar satisfactoriament.";
                        require_once 'view/footer.php';
                    }else{
                        echo "fuck";
                    }
                    break;
                case 'gas':
                    if ( isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imatge) && isset($capacitatMl)) {
                        $producte = new Gas();
                        $producte->setNom($nom);
                        $producte->setMarca($marca);
                        $producte->setPreuBase($preu);
                        $producte->setReferencia($referencia);
                        $producte->setModel($model);
                        $producte->setDescripcio($descripcio);
                        $producte->setConservarFred($conservar);
                        $producte->setImatge($imatge);
                        $producte->setCapacitatMl($capacitatMl);


                        $empresa->afegirProducte($producte, get_class($producte));
                        echo "S'ha modificar satisfactoriament.";
                        require_once 'view/footer.php';
                    }
                    break;
                case 'altres':
                    if (isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imatge) && isset($unitats)) {
                        $producte = new Altres();
                        $producte->setNom($nom);
                        $producte->setMarca($marca);
                        $producte->setPreuBase($preu);
                        $producte->setReferencia($referencia);
                        $producte->setModel($model);
                        $producte->setDescripcio($descripcio);
                        $producte->setConservarFred($conservar);
                        $producte->setImatge($imatge);
                        $producte->setUnitats($unitats);


                        $empresa->afegirProducte($producte, get_class($producte));
                        echo "S'ha modificar satisfactoriament.";
                        require_once 'view/footer.php';
                    }
                    break;
            }
        }else{
            echo "Dades entrades incorrectament.";
            // dades entrades erroneament
        }

    }
}


?>
<?php

/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 9/05/17
 * Time: 16:20
 */
include 'emmagatzemarFoto.php';

$title = "Modificar producte";
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$usuariId = $_SESSION['id_usuari'];

if (empty($_POST)) {
    if (isset($_REQUEST['id'])) {
        $producte = $empresa->searchProducteChilds($_REQUEST['id']);


        require_once 'view/header.php';
        require_once 'view/sidebar.php';
        require_once 'view/mainNav.php';
        require_once 'view/modificarProducte.php';
        require_once 'view/footer.php';
    }
}

if (!empty($_POST)) {
    if (isset($_REQUEST['modify'])) {
        require_once 'view/header.php';
        require_once 'view/sidebar.php';
        require_once 'view/mainNav.php';

        $nom = $_REQUEST['nom'];
        $marca = $_REQUEST['marca'];
        $preu = $_REQUEST['preu'];
        $referencia = $_REQUEST['referencia'];
        $model = $_REQUEST['model'];
        $descripcio = $_REQUEST['descripcio'];
        $conservar = $_REQUEST['conservar'];
        $imatge = guardarImatge('productes');
        $capacitatMl = $_REQUEST['capacitatMlInput'];
        $capacitatMg = $_REQUEST['capacitatMgInput'];
        $unitats = $_REQUEST['unitatsInput'];
        $dades = true;


        $producte = $empresa->searchProducteChilds($_REQUEST['id']);

        if (!isset($nom) && !is_string($nom)) {
            $dades = false;
        }
        if (!isset($marca) && !is_string($marca)) {
            $dades = false;
        }
        if (!isset($preu) && !is_numeric($preu)) {
            $dades = false;
        }
        if (!isset($referencia) && !is_numeric($referencia)) {
            $dades = false;
        }
        if (!isset($model) && !is_string($model)) {
            $dades = false;
        }
        if (!isset($descripcio) && !is_string($descripcio)) {
            $dades = false;
        }
        // mirar que fer amb imatges
        if (!is_string($imatge)) {
            $dades = false;
        }
        if (!isset($conservar) && !is_bool($conservar)) {
            $dades = false;
        }


        if ($dades == true) {
            switch (get_class($producte)) {
                case 'Solid':
                    if (isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imatge) && isset($capacitatMg) && isset($unitats)) {
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


                        $empresa->UpdateProducte($producte, get_class($producte));
                        $missatge = "Sha modificar satisfactoriament.";
                        $redireccio = 'index.php?ctl=producte&act=llista';
                        require_once 'view/confirmacio.php';
                        require_once 'view/footer.php';
                    }
                    break;
                case 'Semisolid':
                    if (isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imatge) && isset($capacitatMg)) {
                        $producte->setNom($nom);
                        $producte->setMarca($marca);
                        $producte->setPreuBase($preu);
                        $producte->setReferencia($referencia);
                        $producte->setModel($model);
                        $producte->setDescripcio($descripcio);
                        $producte->setConservarFred($conservar);
                        $producte->setImatge($imatge);
                        $producte->setCapacitatMg($capacitatMg);


                        $empresa->UpdateProducte($producte, get_class($producte));
                        $missatge = "Sha modificar satisfactoriament.";
                        $redireccio = 'index.php?ctl=producte&act=llista';
                        require_once 'view/confirmacio.php';
                        require_once 'view/footer.php';
                    }
                    break;
                case 'Liquid':
                    if (isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imatge) && isset($capacitatMl)) {
                        $producte->setNom($nom);
                        $producte->setMarca($marca);
                        $producte->setPreuBase($preu);
                        $producte->setReferencia($referencia);
                        $producte->setModel($model);
                        $producte->setDescripcio($descripcio);
                        $producte->setConservarFred($conservar);
                        $producte->setImatge($imatge);
                        $producte->setCapacitatMl($capacitatMl);


                        $empresa->UpdateProducte($producte, get_class($producte));
                        $missatge = "Sha modificar satisfactoriament.";
                        $redireccio = 'index.php?ctl=producte&act=llista';
                        require_once 'view/confirmacio.php';
                        require_once 'view/footer.php';
                    }
                    break;
                case 'Gas':
                    if (isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imatge) && isset($capacitatMl)) {
                        $producte->setNom($nom);
                        $producte->setMarca($marca);
                        $producte->setPreuBase($preu);
                        $producte->setReferencia($referencia);
                        $producte->setModel($model);
                        $producte->setDescripcio($descripcio);
                        $producte->setConservarFred($conservar);
                        $producte->setImatge($imatge);
                        $producte->setCapacitatMl($capacitatMl);


                        $empresa->UpdateProducte($producte, get_class($producte));
                        $missatge = "Sha modificar satisfactoriament.";
                        $redireccio = 'index.php?ctl=producte&act=llista';
                        require_once 'view/confirmacio.php';
                        require_once 'view/footer.php';
                    }
                    break;
                case 'Altres':
                    if (isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imatge) && isset($unitats)) {
                        $producte->setNom($nom);
                        $producte->setMarca($marca);
                        $producte->setPreuBase($preu);
                        $producte->setReferencia($referencia);
                        $producte->setModel($model);
                        $producte->setDescripcio($descripcio);
                        $producte->setConservarFred($conservar);
                        $producte->setImatge($imatge);
                        $producte->setUnitats($unitats);


                        $empresa->UpdateProducte($producte, get_class($producte));
                        $missatge = "Sha modificar satisfactoriament.";
                        $redireccio = 'index.php?ctl=producte&act=llista';
                        require_once 'view/confirmacio.php';
                        require_once 'view/footer.php';
                    }
                    break;
            }
        } else {
            echo "Dades entrades incorrectament.";
            // dades entrades erroneament
        }
    }
}


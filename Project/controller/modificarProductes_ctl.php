<?php

/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 9/05/17
 * Time: 16:20
 */
$title = "Modificar producte";
$redireccio = 'index.php?ctl=producte&act=llista';

include 'emmagatzemarFoto.php';

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


        if ($imatge == null) {

            $imatge = $producte->getImatge();
        }

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

        if ($imatge < 0) {

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


                        if ($producte->validateProduct()->getOk()) {
                            try {
                                $empresa->updateProducte($producte, get_class($producte));
                                $missatge = $producte->validateProduct()->getMsg();
                                require_once 'view/confirmacio.php';
                            } catch (Exception $e) {
                                $missatge = $e->getMessage();
                                require_once 'view/error.php';
                            }
                        } else {
                            $missatge = $producte->validateProduct()->getMsg();
                            require_once 'view/error.php';
                        }
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

                        if ($producte->validateProduct()->getOk()) {
                            try {
                                $empresa->updateProducte($producte, get_class($producte));
                                $missatge = $producte->validateProduct()->getMsg();
                                require_once 'view/confirmacio.php';
                            } catch (Exception $e) {
                                $missatge = $e->getMessage();
                                require_once 'view/error.php';
                            }
                        } else {
                            $missatge = $producte->validateProduct()->getMsg();
                            require_once 'view/error.php';
                        }
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


                        if ($producte->validateProduct()->getOk()) {
                            try {
                                $empresa->updateProducte($producte, get_class($producte));
                                $missatge = $producte->validateProduct()->getMsg();
                                require_once 'view/confirmacio.php';
                            } catch (Exception $e) {
                                $missatge = $e->getMessage();
                                require_once 'view/error.php';
                            }
                        } else {
                            $missatge = $producte->validateProduct()->getMsg();
                            require_once 'view/error.php';
                        }
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

                        if ($producte->validateProduct()->getOk()) {
                            try {
                                $empresa->updateProducte($producte, get_class($producte));
                                $missatge = $producte->validateProduct()->getMsg();
                                require_once 'view/confirmacio.php';
                            } catch (Exception $e) {
                                $missatge = $e->getMessage();
                                require_once 'view/error.php';
                            }
                        } else {
                            $missatge = $producte->validateProduct()->getMsg();
                            require_once 'view/error.php';
                        }
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

                        if ($producte->validateProduct()->getOk()) {
                            try {
                                $empresa->updateProducte($producte, get_class($producte));
                                $missatge = $producte->validateProduct()->getMsg();
                                require_once 'view/confirmacio.php';
                            } catch (Exception $e) {
                                $missatge = $e->getMessage();
                                require_once 'view/error.php';
                            }
                        } else {
                            $missatge = $producte->validateProduct()->getMsg();
                            require_once 'view/error.php';
                        }
                    }
                    break;
            }
        }
    }
}
require_once 'view/footer.php';
?>

<?php

include 'emmagatzemarFoto.php';
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 9/05/17
 * Time: 16:20
 */
$title = "Afegir producte";
if (isset($_SESSION['empresa'])) {
    $empresa = unserialize($_SESSION['empresa']);
} else {
    $empresa = New Empresa();
    $empresa->recuperarEmpresa();

    $_SESSION['empresa'] = serialize($empresa);
}
$usuariId = $_SESSION['id_usuari'];

if (empty($_POST)) {

    require_once 'view/header.php';
    require_once 'view/sidebar.php';
    require_once 'view/mainNav.php';
    require_once 'view/afegirProducte.php';
    require_once 'view/footer.php';
}
if (!empty($_POST)) {
    if (isset($_REQUEST['afegir'])) {
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
        $imatge = guardarImatge('productes');
        $capacitatMl = $_REQUEST['capacitatMlInput'];
        $capacitatMg = $_REQUEST['capacitatMgInput'];
        $unitats = $_REQUEST['unitatsInput'];
        $dades = true;
        $redireccio = 'index.php?ctl=producte&act=llista';

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

        if (($imatge) < 0) {
            $dades = false;
        }

        if (!isset($conservar) && !is_bool($conservar)) {
            $dades = false;
        }

        if ($dades == true) {
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

                        //                     $producte= new Solid($nom, $marca,$preu, $referencia,$model,$descripcio,$conservar,$imatge,$capacitatMg,$unitats);

                        if ($producte->validateProduct()->getOk()) {
                            try {
                                $empresa->afegirProducte($producte, get_class($producte));
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
                case 'semi-solid':
                    if (isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imatge) && isset($capacitatMg)) {
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


                        if ($producte->validateProduct()->getOk()) {
                            try {
                                $empresa->afegirProducte($producte, get_class($producte));
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

                        if ($producte->validateProduct()->getOk()) {
                            try {
                                $empresa->afegirProducte($producte, get_class($producte));
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
                case 'gas':
                    if (isset($nom) && isset($marca) && isset($preu) && isset($referencia) && isset($model) && isset($descripcio) && isset($conservar) && isset($imatge) && isset($capacitatMl)) {
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

                        if ($producte->validateProduct()->getOk()) {
                            try {
                                $empresa->afegirProducte($producte, get_class($producte));
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

                        if ($producte->validateProduct()->getOk()) {
                            try {
                                $empresa->afegirProducte($producte, get_class($producte));
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
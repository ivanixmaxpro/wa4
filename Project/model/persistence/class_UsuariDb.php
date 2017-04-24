<?php

class UsuariDb
{

    private $llista = [];

    function __construct()
    {

//        if (!isset($_SESSION['llistaUsuarisSes'])) {
//            $this->llista[] = new Usuari('admin', '123');
//            $this->llista[] = new Usuari('yaritza', '12345');
//            $_SESSION['llistaUsuarisSes'] = &$this->llista;
//        } else {
//            $this->llista = &$_SESSION['llistaUsuarisSes'];
//        }
    }

    function registrarUsuari($nom, $pas)
    {
        $this->llista[] = new Usuari($nom, $pas);
    }

    public function consultarUsuaris()
    {
        $usuaridb = new usuaridb();
        $arrayUsuaris = $usuaridb->consultarUsuarisdb();
        return $arrayUsuaris;
    }

    public function validateUser($name, $pass)
    {
        $usuari = new UsuariDAO;
        $arrayUsuaris = $usuari->consultarUsuaris();
        $ok = false;

        foreach ($arrayUsuaris as $usuari) {

            if ($usuari->getName() == $name && $usuari->getPassword() == $pass) {
                $ok = true;
            }
        }
        return $ok;
    }

}

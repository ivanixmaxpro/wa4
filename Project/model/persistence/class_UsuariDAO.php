<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class UsuariDAO {
  
    public function searchUsuari ($nom_usuari){

        $con = new db();
        $query = $con->prepare("SELECT * FROM usuari WHERE usuari = :usuari;");
        $query->bindValue(":usuari", $nom_usuari);
        $result = $con->consultar($query);

        foreach ($result as $row) {
            $id_usuari = $row["id_usuari"];
            $id_empleat = $row["id_empleat"];
            $usuari = $row["usuari"];
            $contrasenya = $row["contrasenya"];
            $usuari = new Usuari($id_usuari, $id_empleat, $usuari, $contrasenya);
        }

        $con = null;
        return $usuari;
    }

    public function inserir($usuari) {

        $pass = password_hash($usuari->getUsuari(), PASSWORD_BCRYPT);

        $query = "insert into usuari values('','" . $usuari->getId_empleat() . "','" . $pass . "','" . $usuari->getConstrasenya() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function validateUser($usuari, $pass) {

        $con = new db();
        $query = $con->prepare("SELECT contrasenya FROM usuari WHERE usuari = :usuari");
        $query->bindValue(":usuari", $usuari);
        $contra = $con->consultar($query);

        foreach ($contra as $row){
            $contra = $row['contrasenya'];
        }
         
        if(password_verify($pass, $contra)){
            return true;
        }else{
            return false;
        }
    }

}

?>
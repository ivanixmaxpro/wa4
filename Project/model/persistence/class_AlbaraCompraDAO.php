<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class AlbaraCompraDAO {

        public function insertAlbara($campProveidor, $campEmpresa, $campCodi, $campObservacions, $campPreu, $campData, $campLocalitat, $arrProductesDelAlbara) {

        try {
            $con = new db();
            $query = $con->prepare("INSERT INTO albara_compra (id_proveidor,id_empresa,codi,observacions,preu,data,localitat) 
                VALUES (:id_proveidor,:id_empresa,:codi,:observacions,:preu,:data,:localitat)");
            $query->bindValue(":id_proveidor", $campProveidor);
            $query->bindValue(":id_empresa", $campEmpresa);
            $query->bindValue(":codi", $campCodi);
            $query->bindValue(":observacions", $campObservacions);
            $query->bindValue(":preu", $campPreu);
            $query->bindValue(":data", $campData);
            $query->bindValue(":localitat", $campLocalitat);
            $con->consulta($query);
            $id = ($con->lastInsertId());


            foreach ($arrProductesDelAlbara as $producte) {

                $query = $con->prepare("INSERT INTO detalls_albara_compra (id_albara,id_producte,quantitat,preu) 
                VALUES (:id_albara,:id_producte,:quantitat,:preu)");
                $query->bindValue(":id_albara", $id);
                $query->bindValue(":id_producte", $producte[0]);
                $query->bindValue(":quantitat", $producte[2]);
                $query->bindValue(":preu", $producte[1]);
                $con->consulta($query);


                $query = $con->prepare("UPDATE ubicacio SET quantitatStock  = quantitatStock + (:quantitat) WHERE id_ubicacio = :id_ubicacio");
                $query->bindValue(":id_ubicacio", $producte[3]);
                $query->bindValue(":quantitat", $producte[2]);


                $con->consulta($query);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
        $con = null;
    }

}

?>
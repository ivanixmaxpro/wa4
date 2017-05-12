<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function mostrarSelectProductes($productes) {

    echo "<select id='campProductes'>";

    $id = null;
    $ubi = null;
    $preuProducte = null;
    $nomProducte = null;
    $str = "{\"id_producte\":\"$id\",\"id_ubicacio\":\"$ubi\",\"preuBase\":\"$preuProducte\",\"nom\":\"$nomProducte\"}";
    echo "<option value='" . $str . "' selected> - </option>";

    foreach ($productes as $producte) {

        $id = $producte->getId_producte();
        $ubi = $producte->getId_ubicacio();
        $preuProducte = $producte->getPreuBase();
        $nomProducte = $producte->getNom();

        $str = "{\"id_producte\":\"$id\",\"id_ubicacio\":\"$ubi\",\"preuBase\":\"$preuProducte\",\"nom\":\"$nomProducte\"}";
        echo "<option value='" . $str . "'>" . $producte->getNom() . "</option>";
    }
    echo "</select>";
}

function mostrarSelectClients($clients) {

    echo "<select id='campClient'>";


    echo "<option value='-' selected> - </option>";

    foreach ($clients as $client) {

        $id = $client->getId_client();
        $nom = $client->getNom();

        echo "<option value='" . $id . "'>" . $nom . "</option>";
    }
    echo "</select>";
}





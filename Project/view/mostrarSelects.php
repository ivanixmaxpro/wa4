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
        $str =  "{\"id_producte\":\"$id\",\"id_ubicacio\":\"$ubi\"}";
        echo "<option value='" . $str . "'> - </option>";
    
    foreach ($productes as $producte) {
        
        $id = $producte->getId_producte();
        $ubi = $producte->getId_ubicacio();
        
        $str =  "{\"id_producte\":\"$id\",\"id_ubicacio\":\"$ubi\"}";
        echo "<option value='" . $str . "'>" . $producte->getNom() . "</option>";
    }
    echo "</select>";
}

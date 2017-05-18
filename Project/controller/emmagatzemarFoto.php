<?php

function guardarImatge($subcarpeta) {
    $fotoAGuardar = $_FILES["imatge"]["name"];

    //Metoda de netejar
    $imgSenseBlancs = str_replace(" ", "_", $fotoAGuardar);


    $validextensions = array("jpeg", "jpg", "png");

    $temporary = explode(".", $_FILES["imatge"]["name"]);
    $file_extension = end($temporary);

    $imgNeta = limpiarStringDeCaracters($imgSenseBlancs);

    $imgDefinitivamentNet = $imgNeta;

    $rutaDesti = $_SERVER['DOCUMENT_ROOT'] . "/wa4/Project/view/images/" . $subcarpeta . "/" . $imgDefinitivamentNet;

    if ((($_FILES["imatge"]["type"] == "image/png") || ($_FILES["imatge"]["type"] == "image/jpg") || ($_FILES["imatge"]["type"] == "image/jpeg")
            ) && ($_FILES["imatge"]["size"] < 20000000)//Approx. 20MB files can be uploaded.
            && in_array($file_extension, $validextensions)) {

        if (!file_exists($rutaDesti)) {
            move_uploaded_file($_FILES["imatge"]["tmp_name"], $rutaDesti);

            $rutaDesti = "/wa4/Project/view/images/" . $subcarpeta . "/" . $imgDefinitivamentNet;
        }
        return $rutaDesti;
    }
}

function limpiarStringDeCaracters($texto) {
    $stringSenseHTML = htmlentities($texto);
    $string = preg_replace('/\&(.)[^;]*;/', '\\1', $stringSenseHTML);
    return $string;
}

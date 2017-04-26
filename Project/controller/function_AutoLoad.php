<?php

function __autoload($class_name) {
    $root = $_SERVER['DOCUMENT_ROOT'];
    $curdir = getcwd();

    chdir("$root/wa4/Project/");

    $nomFile = "class_" . $class_name . ".php";
    $arxiuPersistence = "model/persistence/" . $nomFile;
    $arxiuBusiness = "model/business/" . $nomFile;

    if (file_exists($arxiuPersistence)) {
        require_once $arxiuPersistence;
    } else {
        if (file_exists($arxiuBusiness)) {
            require_once $arxiuBusiness;
        }
    }
    chdir($curdir);
}

?>
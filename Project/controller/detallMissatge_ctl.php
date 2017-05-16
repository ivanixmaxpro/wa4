<?php

$missatgesDAO = new MissatgeDAO();
$id = $_REQUEST['id'];
$title = "Detall missatge";
$missatge = $missatgesDAO->buscarPerId($id);


require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/detallMissatge.php';
require_once 'view/footer.php';
?>

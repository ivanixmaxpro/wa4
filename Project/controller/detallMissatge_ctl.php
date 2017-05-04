<?php

$missatgesDAO = new MissatgeDAO();
$id = $_REQUEST['id'];
$missatge = $missatgesDAO->buscarPerId($id);


require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/veureMissatge.php';
require_once 'view/footer.php';
?>

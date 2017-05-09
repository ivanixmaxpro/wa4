<?php

$clientDAO = new ClientDAO;
$id = $_REQUEST['id'];
$title = "detall client, id = ".$id;
$client = $clientDAO->searchById($id);


require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/detallClient.php';
require_once 'view/footer.php';
?>

<?php

$clientDAO = new ClientDAO;
$id = $_REQUEST['id'];
$client = $clientDAO->searchById($id);
$title = "Client, " . $client->getNom();


require_once 'view/header.php';
require_once 'view/sidebar.php';
require_once 'view/mainNav.php';
require_once 'view/detallClient.php';
require_once 'view/footer.php';
?>

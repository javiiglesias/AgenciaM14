<?php
$titlePage = "Fitxa actor";
$actordb = new Actordb();
$id = $_REQUEST['id'];
$actor=$actordb->buscarPerId($id);

require_once 'view/header.php';
require_once 'view/fitxa.php';
require_once 'view/footer.php';
?>

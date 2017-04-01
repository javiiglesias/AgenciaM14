<?php

$titlePage = "Fitxa actor";

$actordb = new Actordb();
$obra_actor = new obra_actor();

$id = $_REQUEST['id'];
$actor = $actordb->buscarPerId($id);

$obres = $obra_actor->cercarObresPerActor($id);

require_once 'view/header.php';
require_once 'view/fitxa.php';
require_once 'view/footer.php';
?>

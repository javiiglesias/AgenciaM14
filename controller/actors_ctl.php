<?php

$titlePage = "Actors";
$actordb = new Actordb();


$categoria = null;
$quantitat = 0;

if (isset($_REQUEST["Submit"])) {
    if (isset($_REQUEST['categoria'])) {
        $categoria = $_REQUEST['categoria'];
    }
    if (isset($_REQUEST['quantitat'])) {
        $quantitat = $_REQUEST['quantitat'];
       
    }
    $arrayActors = $actordb->cercar($categoria, $quantitat);
}else{
    $arrayActors = $actordb->populateActordb();
}




if ($categoria != null) {
    $llistaTitle = "Resultats de " . $categoria;
}



require_once 'view/header.php';
require_once 'view/actors.php';
require_once 'view/footer.php';

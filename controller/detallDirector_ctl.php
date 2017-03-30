<?php
require_once('model/Persistence/class_Directordb.php');
$titlePage = "Detalls director";

$director = new DirectorDb();

if (isset($_REQUEST['dni'])) {
    $dni = $_REQUEST['dni'];
}
$directorTrobat = $director->retornarDirectorsConcret($dni);


require_once 'view/header.php';
require_once 'view/detallsDirector.php';
require_once 'view/footer.php';

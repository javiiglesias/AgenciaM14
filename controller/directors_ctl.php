<?php
require_once("model/Persistence/class_Directordb.php");

$titlePage = "Directors";


$director = new DirectorDb();

$categoria = null;
$quantitat = 0;

if (isset($_REQUEST['categoria'])) {
    $categoria = $_REQUEST['categoria'];
}
if (isset($_REQUEST['quantitat'])) {
    $quantitat = $_REQUEST['quantitat'];
}


$directors = $director->retornarDirectors();

if ($categoria != null) {
    $llistaTitle = "Resultats de " . $categoria;
}






require_once 'view/header.php';
require_once 'view/directors.php';
require_once 'view/footer.php';
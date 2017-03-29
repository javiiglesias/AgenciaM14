<?php
require_once("model/Persistence/class_Directordb.php");

$titlePage = "Directors";

$director = new DirectorDb();
$directors = $director->retornarDirectors();

require_once 'view/header.php';
require_once 'view/directors.php';
require_once 'view/footer.php';
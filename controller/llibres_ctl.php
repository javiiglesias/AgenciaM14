<?php

$titlePage = "Llibres";

$llibres = new LlibresDAO();

$categoria = null;
$quantitat = 0;

if (isset($_REQUEST['categoria'])) {
    $categoria = $_REQUEST['categoria'];
}
if (isset($_REQUEST['quantitat'])) {
    $quantitat = $_REQUEST['quantitat'];
}


$llibresArray = $llibres->cercar($categoria, $quantitat);

if ($categoria != null) {
    $llistaTitle = "Resultats de " . $categoria;
}
require_once 'view/header.php';
require_once 'view/llibres.php';
require_once 'view/footer.php';
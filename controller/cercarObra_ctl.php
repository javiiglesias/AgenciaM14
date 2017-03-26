<?php

$titlePage = "Cercar Llibres";

$obra = new Obra();

$tipus = null;

if (isset($_REQUEST['tipusobra'])) {
    $tipus = $_REQUEST['tipusobra'];
}

if ($tipus != null) {
    $obraArray = $obra->cercarObraPerTipus($tipus);
    $llistaTitle = "Resultats de " . $categoria;
}
require_once 'view/header.php';
require_once 'view/cercarLlibre.php';
require_once 'view/footer.php';
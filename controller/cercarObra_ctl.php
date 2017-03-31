<?php

$titlePage = "Cercar Obra";

$obra = new Obra();

$tipus = 0;

if (isset($_REQUEST['tipusobra'])) {
    $tipus = $_REQUEST['tipusobra'];
}

if (isset($_REQUEST['quantitat'])) {
    $quantitat = $_REQUEST['quantitat'];
}

$selectTipusObra = $obra->createSelectTipusObra();

if ($tipus != null ) {
    $obraArray = $obra->cercarTipus($tipus,$quantitat);
    $tipusObra = $obra->cercarObraPerTipus($tipus);
    $llistaTitle = "Resultats de " . $tipusObra->getDescripcio();
}else{
    $llistaTitle = null;
    $obraArray = $obra->mostrarObra();
}
require_once 'view/header.php';
require_once 'view/obres.php';
require_once 'view/footer.php';
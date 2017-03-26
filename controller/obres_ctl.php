<?php

$titlePage = "Obres";

$obra = new Obra();

$llistaTitle = null;
$obraArray = $obra->mostrarObra();
$selectTipusObra = $obra->createSelectTipusObra();

require_once 'view/header.php';
require_once 'view/obres.php';
require_once 'view/footer.php';
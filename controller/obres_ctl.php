<?php

$titlePage = "Obres";

$obra = new Obra("asda", "sadsad", "sadasd", "sdsad", "adasd","sad");

$obraArray = $obra->mostrarObra();

require_once 'view/header.php';
require_once 'view/obres.php';
require_once 'view/footer.php';
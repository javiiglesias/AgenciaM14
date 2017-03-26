<?php

$titlePage = "Obres";

$obra = new Obra();

$obraArray = $obra->mostrarObra();

require_once 'view/header.php';
require_once 'view/obres.php';
require_once 'view/footer.php';
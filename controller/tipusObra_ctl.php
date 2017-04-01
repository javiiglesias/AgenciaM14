<?php

$titlePage = "Tipus Obra";

$tipusObra = new tipus_obra();


$tipusObraArray = $tipusObra->mostrarTipusObra();

require_once 'view/header.php';
require_once 'view/tipusObra.php';
require_once 'view/footer.php';

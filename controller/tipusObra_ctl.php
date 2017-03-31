<?php

$titlePage = "Tipus Obra";

$tipusObra = new tipus_obra();

$id = null;
$descripcio = 0;

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}
if (isset($_REQUEST['descripcio'])) {
    $descripcio = $_REQUEST['descripcio'];
}


$tipusObraArray = $tipusObra->mostrarTipusObra();

require_once 'view/header.php';
require_once 'view/tipusObra.php';
require_once 'view/footer.php';

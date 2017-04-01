<?php

$titlePage = "Tipus Paper";

$tipusPaper = new tipus_paper();

$id = null;
$tipus = "";


if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}
if (isset($_REQUEST['tipus'])) {
    $tipus = $_REQUEST['tipus'];
}


$tipusPaperArray = $tipusPaper->mostrarTipusPaper();

require_once 'view/header.php';
require_once 'view/tipusPaper.php';
require_once 'view/footer.php';

<?php

$titlePage = "Tipus Paper";

$tipusPaper = new tipus_paper();

$id = null;
$nom = 0;
$primari = 0;
$secundari = 0;
$extra = 0;
$especialista = 0;
$repartiment = 0;

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}
if (isset($_REQUEST['nom'])) {
    $nom = $_REQUEST['nom'];
}
if (isset($_REQUEST['primari'])) {
    $primari = $_REQUEST['primari'];
}
if (isset($_REQUEST['secundari'])) {
    $secundari = $_REQUEST['secundari'];
}
if (isset($_REQUEST['extra'])) {
    $extra = $_REQUEST['extra'];
}
if (isset($_REQUEST['especialista'])) {
    $especialista = $_REQUEST['especialista'];
}
if (isset($_REQUEST['repartiment'])) {
    $repartiment = $_REQUEST['repartiment'];
}

$tipusPaperArray = $tipusPaper->mostrarTipusPaper();

require_once 'view/header.php';
require_once 'view/tipusPaper.php';
require_once 'view/footer.php';

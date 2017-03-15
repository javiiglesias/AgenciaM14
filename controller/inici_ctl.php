<?php
$titlePage = "Inici";

$llibres = new LlibresDAO();

$categoria = '3';
$quantitat = 4;

$llibresArray = $llibres->cercar($categoria, $quantitat);

require_once 'view/header.php';
require_once 'view/inici.php';
require_once 'view/footer.php';
<?php

$titlePage = "Tipus Paper";

$tipusPaper = new tipus_paper();

$tipusPaperArray = $tipusPaper->mostrarTipusPaper();

require_once 'view/header.php';
require_once 'view/tipusPaper.php';
require_once 'view/footer.php';

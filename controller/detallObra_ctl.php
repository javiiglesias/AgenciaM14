<?php

$titlePage = "Detalls Obra";

$obra = new Obra();

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}
$obraTrobada = $obra->cercarIdObra($id);
//var_dump($obraTrobada); exit();
$tipusTrobat = $obra->cercartipusObra( $obraTrobada->getTipusObra());
$directorTrobat = $obra->cercarDirectorObra( $obraTrobada->getDirectorObra());

require_once 'view/header.php';
require_once 'view/detallsObra.php';
require_once 'view/footer.php';

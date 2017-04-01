<?php

$titlePage = "Detalls Obra";

$obra = new Obra();
$obra_actor = new obra_actor();

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}
$obraTrobada = $obra->cercarIdObra($id);
$tipusTrobat = $obra->cercartipusObra( $obraTrobada->getTipusObra());
$directorTrobat = $obra->cercarDirectorObra( $obraTrobada->getDirectorObra());
$ArrayObraActors = $obra_actor->cercarIdObraActor($id);

require_once 'view/header.php';
require_once 'view/detallsObra.php';
require_once 'view/footer.php';

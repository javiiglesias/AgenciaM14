<?php

$titlePage = "Eliminar Obra";

$id = null;

require_once 'view/header.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {

    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    }
    $obra = new Obra();
    $obra_actor = new obra_actor();

    $obraTrobada = $obra->cercarIdObra($id);
    $ActorsObra = $obra_actor->cercarIdObraActor($id);

    foreach ($ActorsObra as $keyActor => $dataObraActor) {
        $obra_actor->eliminarObraActor($dataObraActor);
    }
    $obra->eliminarObra($obraTrobada);

    $missatge = "S'ha eliminat l'obra correctament!";
    $redireccio = "?ctl=obres";
    require_once 'view/confirmacio.php';
} else {
    $missatge = "No tens permisos per entrar en aquesta pagina! sis plau inicia sessio. Gracies";
    require_once 'view/error.php';
}

require_once 'view/footer.php';


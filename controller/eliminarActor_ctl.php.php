<?php

$titlePage = "Eliminar Actor";
$actordb = new Actordb();

$actor = null;

require_once 'view/header.php';
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}
$actor= $actordb->buscarPerId($id);
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    $actor= $actordb->buscarPerId($id);
    if ($llibresDAO->eliminarLlibre($llibre)) {

        $missatge = "S'ha esborrat el llibre correctament!";
        require_once 'view/confirmacio.php';
    }
} else {
    $missatge = "No tens permisos per entrar en aquesta pagina! sis plau inicia sessio. Gracies";
    require_once 'view/error.php';
}
require_once 'view/footer.php';
?>

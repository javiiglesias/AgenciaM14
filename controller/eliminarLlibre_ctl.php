<?php

$titlePage = "Eliminar Llibre";

$llibresDAO = new LlibresDAO();
$llibre = null;
if (isset($_REQUEST['isbn'])) {
    $isbn = $_REQUEST['isbn'];
}
require_once 'view/header.php';
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    $llibre = $llibresDAO->getLlibre($isbn);
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

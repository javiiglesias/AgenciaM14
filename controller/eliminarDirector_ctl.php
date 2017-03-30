<?php

require_once('model/Persistence/class_Directordb.php');
$titlePage = "Eliminar Director";

$directorDAO = new DirectorDb();
$director = null;
if (isset($_REQUEST['dni'])) {
    $dni = $_REQUEST['dni'];
}
require_once 'view/header.php';
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    $director = $directorDAO->retornarDirectorsConcret($dni);
    $redireccio = "?ctl=directors";
    if (isset($director)) {
        // mirar porque no entra aquí
        $directorDAO->eliminarDirector($director[0]->getDni());
        $missatge = "S'ha esborrat el director correctament!";
        require_once 'view/confirmacio.php';
    }
} else {
    $missatge = "No tens permisos per entrar en aquesta pagina! sis plau inicia sessio. Gracies";
    require_once 'view/error.php';
}
require_once 'view/footer.php';
?>

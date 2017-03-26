<?php

$titlePage = "Eliminar Tipus Obra";
$descripcio = null;
require_once 'view/header.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    }

    $tipusObra = new tipus_obra();
    $arrayTipusObra = $tipusObra->cercarId($id);
    $tipusObra->eliminarTipusObra($id);
    $missatge = "S'ha eliminat el tipus d'obra correctament!";
    require_once 'view/confirmacio.php';

} else {
    $missatge = "No tens permisos per entrar en aquesta pàgina! Si us plau, inicia sessió. Gràcies";
    require_once 'view/error.php';
}
    require_once 'view/footer.php';
?>
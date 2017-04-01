<?php

$titlePage = "Modificar Tipus Obra";


$descripcio = null;

require_once 'view/header.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {


    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    }
    if (isset($_REQUEST['descripcio'])) {
        $descripcio = $_REQUEST['descripcio'];
    }
    $tipusObra = new tipus_obra($descripcio);
    $arrayTipusObra = $tipusObra->cercarId($id);
    if (isset($_REQUEST['Submit'])) {
        if ($descripcio != null) {
            $tipusObra->modificarTipusObra($id, $descripcio);
            $missatge = "S'ha modificat el tipus d'obra correctament!";
            $redireccio = "?ctl=tipusObra&act=mostrar";
            require_once 'view/confirmacio.php';
        } else {
            $missatge = "No s'ha pogut modificar el tipus d'obra, camps sense informació!";
            $redireccio = "?ctl=tipusObra&act=mostrar";
            require_once 'view/error.php';
        }
    } else {
        require_once 'view/modificarTipusObra.php';
    }
} else {
    $missatge = "No tens permisos per entrar en aquesta pàgina! Si us plau, inicia sessió. Gràcies";
    require_once 'view/error.php';
}

require_once 'view/footer.php';



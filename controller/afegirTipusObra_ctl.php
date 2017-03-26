<?php

$titlePage = "Afegir Tipus Obra";

$descripcio = null;

require_once 'view/header.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    if (isset($_REQUEST['Submit'])) {

        if (isset($_REQUEST['descripcio'])) {
            $descripcio = $_REQUEST['descripcio'];
        }
        $tipusObra = new tipus_obra();
        if ($descripcio != null) {
            $tipusObra->afegirTipusObra($descripcio);
            $missatge = "S'ha afegit el llibre correctament!";
            require_once 'view/confirmacio.php';
        } else {
            $missatge = "No s'ha pogut afegir el tipus d'obra, camps sense informació!";
            require_once 'view/error.php';
        }
    } else {
        require_once 'view/afegirTipusObra.php';
    }
} else {
    $missatge = "No tens permisos per entrar en aquesta pàgina! Si us plau, inicia sessió. Gràcies";
    require_once 'view/error.php';
}

require_once 'view/footer.php';



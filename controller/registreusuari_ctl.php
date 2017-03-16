<?php

$titlePage = "Registrar-se";
$UsuarisDA0 = new UsuarisDAO();
$usuari = null;
$clau = null;

require_once 'view/header.php';

if (isset($_REQUEST['Submit'])) {

    if (isset($_REQUEST['nou_usuari'])) {
        $usuari = $_REQUEST['nou_usuari'];
    }
    if (isset($_REQUEST['pass'])) {
        $clau = $_REQUEST['pass'];
    }

    if ($usuari != null && $clau != null) {
        $UsuarisDA0->registrarUsuari($usuari, $clau);
        require_once 'view/header.php';
        $missatge = "T'has registrat Correctament! Ja pots iniciar Sessió";
        require_once 'view/confirmacio.php';
        require_once 'view/footer.php';
    } else {
        $missatge = "No s'ha pogut realitzar el registre! ";
        require_once 'view/error.php';
    }
} else {
    require_once 'view/registre.php';
}



<?php

$titlePage = "Modificar Tipus Paper";

$descripcio = null;

require_once 'view/header.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {


    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    }

    $tipusPaper = new tipus_paper();

    $tipusPaperTrobat = $tipusPaper->cercarId($id);

    if (isset($_REQUEST['Submit'])) {

        if (isset($_REQUEST['nom'])) {
            $nom = $_REQUEST['nom'];
        }

        if ($nom != null) {
            $tipusPaper->modificarTipusPaper($id, $nom);
            $missatge = "S'ha modificat el tipus de paper correctament!";
            $redireccio = "?ctl=tipusPaper&act=mostrar";
            require_once 'view/confirmacio.php';
        } else {
            $missatge = "No s'ha pogut modificar el tipus de paper, camps sense informació!";
            $redireccio = "?ctl=tipusPaper&act=mostrar";
            require_once 'view/error.php';
        }
    } else {
        require_once 'view/modificarTipusPaper.php';
    }
} else {
    $missatge = "No tens permisos per entrar en aquesta pàgina! Si us plau, inicia sessió. Gràcies";
    require_once 'view/error.php';
}

require_once 'view/footer.php';



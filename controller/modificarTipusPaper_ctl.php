<?php

$titlePage = "Modificar Tipus Paper";

$descripcio = null;

require_once 'view/header.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {


    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    }
    if (isset($_REQUEST['nom'])) {
        $nom = $_REQUEST['nom'];
    }
    if (isset($_REQUEST['primari'])) {
        $primari = $_REQUEST['primari'];
    }
    if (isset($_REQUEST['secundari'])) {
        $secundari = $_REQUEST['secundari'];
    }
    if (isset($_REQUEST['extra'])) {
        $extra = $_REQUEST['extra'];
    }
    if (isset($_REQUEST['especialista'])) {
        $especialista = $_REQUEST['especialista'];
    }
    if (isset($_REQUEST['repartiment'])) {
        $repartiment = $_REQUEST['repartiment'];
    }
    $tipusPaper = new tipus_obra($nom, $primari, $secundari, $extra, $especialista, $repartiment);
    $arrayTipusPaper = $tipusPaper->cercarId($id);
    if (isset($_REQUEST['Submit'])) {
        if ($nom != null && $primari != 0 && $secundari != 0 && $extra != 0 && $especialista != 0 && $repartiment != 0) {
            $tipusPaper->modificarTipusObra($id, $nom, $primari, $secundari, $extra, $especialista, $repartiment);
            $missatge = "S'ha modificat el tipus de paper correctament!";
            require_once 'view/confirmacio.php';
        } else {
            $missatge = "No s'ha pogut modificar el tipus de paper, camps sense informació!";
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



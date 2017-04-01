<?php

$titlePage = "Afegir Tipus Paper";

$nom = null;

require_once 'view/header.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    if (isset($_REQUEST['Submit'])) {

        if (isset($_REQUEST['nomPaper'])) {
            $nom = $_REQUEST['nomPaper'];
        }
        $tipusPaper = new tipus_paper();
        if ($nom != null) {            
            $tipusPaper->afegirTipusPaper($nom);
            $missatge = "S'ha afegit el tipus de paper correctament!";
            $redireccio = "?ctl=tipusPaper&act=mostrar";
            require_once 'view/confirmacio.php';
        } else {
            $missatge = "No s'ha pogut afegir el tipus de paper, camps sense informació!";
            $redireccio = "?ctl=tipusPaper&act=afegir";
            require_once 'view/error.php';
        }
    } else {
        require_once 'view/afegirTipusPaper.php';
    }
} else {
    $missatge = "No tens permisos per entrar en aquesta pàgina! Si us plau, inicia sessió. Gràcies";
    require_once 'view/error.php';
}

require_once 'view/footer.php';




<?php

$titlePage = "Afegir Obra";


$nom = null;
$descripcio = null;
$datainici = null;
$datafi = null;
$tipusObra = null;
$director = null;

require_once 'view/header.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    
    $obra = new Obra();
    $selectTipusObra = $obra->createSelectTipusObra();
    $selectDirector = $obra->createSelectDirectorObra();
    
    if (isset($_REQUEST['Submit'])) {

        if (isset($_REQUEST['nom'])) {
            $nom = $_REQUEST['nom'];
        }
        if (isset($_REQUEST['descripcio'])) {
            $descripcio = $_REQUEST['descripcio'];
        }
        if (isset($_REQUEST['datainici'])) {
            $datainici = $_REQUEST['datainici'];          
        }

        if (isset($_REQUEST['datafi'])) {
            $datafi = $_REQUEST['datafi'];

        }
        if (isset($_REQUEST['tipusobra'])) {
            $tipusObra = $_REQUEST['tipusobra'];
        }

        if (isset($_REQUEST['director'])) {
            $director = $_REQUEST['director'];
        }
        
        
        if ($nom != null && $descripcio != null && $datainici != null && $datafi != null && $tipusObra != null && $director != null) {
            $obra->inserirObra(addslashes($nom), addslashes($descripcio), addslashes($datainici), addslashes($datafi), addslashes($tipusObra), addslashes($director));
            $missatge = "S'ha afegit l'obra correctament!";
            require_once 'view/confirmacio.php';
        } else {
            $missatge = "No s'ha pogut afegit l'obra, camps sense informació!";
            require_once 'view/error.php';
        }
    } else {
        require_once 'view/afegirObra.php';
    }
} else {
    $missatge = "No tens permisos per entrar en aquesta pàgina! Si us plau, inicia sessió. Gràcies";
    require_once 'view/error.php';
}

require_once 'view/footer.php';


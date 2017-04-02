<?php

$titlePage = "Modificar Obra";

$id = null;
$nom = null;
$descripcio = null;
$datainici = null;
$datafi = null;
$tipusObra = null;
$director = null;

require_once 'view/header.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {

    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    }

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
    $obra = new Obra();
    $obra_actor = new obra_actor();

    $obraTrobada = $obra->cercarIdObra($id);

    $ActorsObra = $obra_actor->cercarIdObraActor($id);
    
    var_dump($ActorsObra);

    $tipusObraSeleccionat = $obra->tipusObraSeleccionat($obraTrobada->getTipusObra());
    $directorSeleccionat = $obra->directorObraSeleccionat($obraTrobada->getDirectorObra());

    $redireccio = "?ctl=obres";
    if (isset($_REQUEST['Submit'])) {
        if ($nom != null && $descripcio != null && $datainici != null && $datafi != null && $tipusObra != null && $director != null) {
            $obra->modificarObra($obraTrobada, addslashes($nom), addslashes($descripcio), addslashes($datainici), addslashes($datafi), addslashes($tipusObra), addslashes($director));

            foreach ($ActorsObra as $keyActor => $dateObraActor) {
                //var_dump($dateObraActor);
                foreach ($_REQUEST['actors'] as $keyActor => $actor) {
                    foreach ($_REQUEST['paper'] as $keyPaper => $tipus_paper) {
                        foreach ($_REQUEST['personatge'] as $keyPersonatge => $personatge) {
                            if ($keyActor == $keyPaper && $keyPaper == $keyPersonatge) {
                                $obra_actor->modificarObraActor($dateObraActor, $actor, $tipus_paper, $personatge);
                            }
                        }
                    }
                }
            }
            $missatge = "S'ha modificat l'obra correctament!";
            require_once 'view/confirmacio.php';
        } else {
            $missatge = "No s'ha pogut modificar l'obra, camps sense informació!";
            require_once 'view/error.php';
        }
    } else {
        require_once 'view/modificarObra.php';
    }
} else {
    $missatge = "No tens permisos per entrar en aquesta pàgina! Si us plau, inicia sessió. Gràcies";
    require_once 'view/error.php';
}

require_once 'view/footer.php';


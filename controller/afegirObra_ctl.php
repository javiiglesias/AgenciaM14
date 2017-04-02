<?php

$titlePage = "Afegir Obra";

$nom = null;
$descripcio = null;
$datainici = null;
$datafi = null;
$tipusObra = null;
$director = null;
$actors = array();

require_once 'view/header.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {

    $obra = new Obra();
    $selectTipusObra = $obra->createSelectTipusObra();
    $selectDirector = $obra->createSelectDirectorObra();
    $selectActor = $obra->createSelectActorObra();
    $selectTipusPaper = $obra->createSelectTipusPaper();

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
            $ultimaObra = $obra->cercarUltimaObra();
            $idObra = $ultimaObra->getIdObra();

            foreach ($_REQUEST['actors'] as $keyActor => $actor) {
                //var_dump($_REQUEST['actors']);
                foreach ($_REQUEST['paper'] as $keyPaper => $tipus_paper) {
                    foreach ($_REQUEST['personatge'] as $keyPersonatge => $personatge) {
                        if ($keyActor == $keyPaper && $keyPaper == $keyPersonatge) {
                            $obra_actor = new obra_actor();
                            $obra_actor->setActor($actor);
                            $obra_actor->setObra($idObra);
                            $obra_actor->setActor($actor);
                            $obra_actor->setTipusPaper($tipus_paper);
                            $obra_actor->setPersonatge($personatge);
                            $obra_actor->inserirObraActor($obra_actor);
                        }
                    }
                }
            }

            $missatge = "S'ha afegit l'obra correctament!";
            $redireccio = "?ctl=obres";
            require_once 'view/confirmacio.php';
        } else {
            $missatge = "No s'ha pogut afegit l'obra, camps sense informació!";
            $redireccio = "?ctl=obra&act=afegir";
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


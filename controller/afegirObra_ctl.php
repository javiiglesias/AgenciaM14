<?php

$titlePage = "Afegir Obra";


$nom = null;
$descripcio = null;
$datainici = null;
$datafi = null;
$tipusObra = null;
$director = null;
$agencia = null;

require_once 'view/header.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    if (isset($_REQUEST['Submit'])) {

        if (isset($_REQUEST['nom'])) {
            $nom = $_REQUEST['nom'];
        }
        if (isset($_REQUEST['descripcio'])) {
            $descripcio = $_REQUEST['descripcio'];
        }
        if (isset($_REQUEST['datainici'])) {
            $datainici = $_REQUEST['datainici'];
            $datainici = DateTime::createFromFormat('d/m/Y', $datainici);
            $datainici = $datainici->format('d/m/Y');
        }

        if (isset($_REQUEST['datafi'])) {
            $datafi = $_REQUEST['datafi'];
            $datafi =  new DateTime($datafi);
        }
        if (isset($_REQUEST['tipusobra'])) {
            $tipusObra = $_REQUEST['tipusobra'];
        }
        
        if (isset($_REQUEST['director'])) {
            $director= $_REQUEST['director'];
        }
        
        if (isset($_REQUEST['agencia'])) {
            $agencia= $_REQUEST['agencia'];
        }
        
        $obra = new Obra($nom, $descripcio, $datainici, $datafi, $tipusobra,$agencia, $directors);
        if ($nom != null && $descripcio != null && $datainici != null && $datafi != null && $tipusObra != null && $director != null && $agencia != null) {
            $obra->inserirObra(addslashes($nom), addslashes($descripcio), $datainici, $datafi, addslashes($tipusObra),  addslashes($agencia), addslashes($director));
            $missatge = "S'ha afegit l'obra correctament!";
//                $quantitat = 200;
//                $llibresArray = $llibres->cercar($categoria, $quantitat);
//                if ($categoria != null) {
//                    $llistaTitle = "Resultats de " . $categoria;
//                }
            require_once 'view/confirmacio.php';
        } else {
            $missatge = "No s'ha pogut afegit l'obra, camps sense informació!";
            require_once 'view/error.php';
        }
    } else {
        require_once 'view/afegirObra.php';
    }
} else {
    $missatge = "No tens permisos per entrar en aquesta pagina! sis plau inicia sessio. Gracies";
    require_once 'view/error.php';
}

require_once 'view/footer.php';


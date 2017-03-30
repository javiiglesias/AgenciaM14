<?php
require_once('model/Persistence/class_Directordb.php');
require_once('controller/validarDni.php');

$titlePage = "Afegir Director";

$director = new DirectorDb();
$isbn = null;
$nom = null;
$numPag = null;
$autor = null;
$genere = null;
$cubieta = null;
$editorial = null;
$llengua = null;
$resumen = null;
$preu = null;

require_once 'view/header.php';


if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    if (isset($_REQUEST['Submit'])) {

        if (isset($_REQUEST['dni'])) {
            if(validarDni($_REQUEST['dni'])){
                $dni = $_REQUEST['dni'];
            }else{
                $dni = null;
                $missatge = "Dni no";
            }
        }
        if (isset($_REQUEST['nom'])) {
            $nom = $_REQUEST['nom'];
        }
        if (isset($_REQUEST['cognom1'])) {
            $cognom1 = $_REQUEST['cognom1'];
        }
        if (isset($_REQUEST['cognom2'])) {
            $cognom2 = $_REQUEST['cognom2'];
        }
        if (isset($_REQUEST['descripcio'])) {
            $descripcio = $_REQUEST['descripcio'];
        }
        $redireccio = "?ctl=directors";
            if ($dni != null && $nom != null && $cognom1 != null && $cognom2 != null && $descripcio != null) {
                $director->inserir($dni, $nom, $cognom1, $cognom2, $descripcio);
                $missatge = "S'ha afegit el director correctament!";
                $quantitat = 200;
                require_once 'view/confirmacio.php';
            } else {
                if($missatge == "Dni no"){
                    $missatge = "El DNI introduit no es vàlid!";
                    require_once 'view/error.php';
            }
                $missatge = "No s'ha pogut afegit el director, camps sense informació!";
                require_once 'view/error.php';
            }

    } else {
        require_once 'view/afegirDirector.php';
    }
} else {
    $missatge = "No tens permisos per entrar en aquesta pagina! sis plau inicia sessio. Gracies";
    require_once 'view/error.php';
}

require_once 'view/footer.php';


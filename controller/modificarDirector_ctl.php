<?php
require_once('model/Persistence/class_Directordb.php');
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 21/03/17
 * Time: 16:58
 */
$titlePage = "Modificar Llibres";

$director = new DirectorDb();

$dni = null;
$nom = null;
$cognom1 = null;
$cognom2 = null;


require_once 'view/header.php';
if (isset($_REQUEST['dni'])) {
    $dni = $_REQUEST['dni'];
}
$dir = $director->retornarDirectorsConcret($dni);

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    if (isset($_REQUEST['Submit'])) {
        if (isset($_REQUEST['dni'])) {
            $dni = $_REQUEST['dni'];
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
        $redireccio = "?ctl=directors";
        if ($dni != null && $nom != null && $cognom1 != null && $cognom1 != null ) {
            $director->modificarDirector($dni, $nom, $cognom1, $cognom2);
            $missatge = "S'ha modificat el director correctament!";
            require_once 'view/confirmacio.php';
        } else {
            $missatge = "El llibre no s'ha modificat. S'ha d'omplir tots els camps";
            require_once 'view/error.php';
        }
    } else {
        require_once 'view/modificarDirector.php';
    }
} else {
    $missatge = "No tens permisos per entrar en aquesta pagina! sis plau inicia sessio. Gracies";
    require_once 'view/error.php';
}

require_once 'view/footer.php';

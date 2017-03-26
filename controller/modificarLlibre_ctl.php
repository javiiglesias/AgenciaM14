<?php

$titlePage = "Modificar Llibres";

$llibres = new LlibresDAO();
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
if (isset($_REQUEST['isbn'])) {
    $isbn = $_REQUEST['isbn'];
}
$llibre = $llibres->getLlibre($isbn);

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    if (isset($_REQUEST['Submit'])) {
        if (isset($_REQUEST['isbn'])) {
            $isbn = $_REQUEST['isbn'];
        }
        if (isset($_REQUEST['nom'])) {
            $nom = $_REQUEST['nom'];
        }
        if (isset($_REQUEST['numPag'])) {
            $numPag = $_REQUEST['numPag'];
        }
        if (isset($_REQUEST['autor'])) {
            $autor = $_REQUEST['autor'];
        }
        if (isset($_REQUEST['categoria'])) {
            $categoria = $_REQUEST['categoria'];
        }
        if (isset($_REQUEST['cubierta'])) {
            $cubierta = $_REQUEST['cubierta'];
        }
        if (isset($_REQUEST['editorial'])) {
            $editorial = $_REQUEST['editorial'];
        }
        if (isset($_REQUEST['llengua'])) {
            $llengua = $_REQUEST['llengua'];
        }
        if (isset($_REQUEST['resumen'])) {
            $resumen = $_REQUEST['resumen'];
        }
        if (isset($_REQUEST['preu'])) {
            $preu = $_REQUEST['preu'];
        }
        if ($isbn != null && $nom != null && $numPag != null && $autor != null && $categoria != null && $cubierta != null && $editorial != null && $llengua != null && $resumen != null && $preu != null) {
            $llibres->modificarLlibre($llibre, $isbn, $nom, $numPag, $autor, $categoria, $cubierta, $editorial, $llengua, $resumen, $preu);
            $missatge = "S'ha modificat el llibre correctament!";
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

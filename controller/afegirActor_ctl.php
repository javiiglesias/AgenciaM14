<?php

$titlePage = "Afegir Actors";
$actordb = new Actordb();

$dni = null;
$nom = null;
$cognom1 = null;
$cognom2 = null;
$sexe = null;
$foto = null;
$descripcio = null;

require_once 'view/header.php';

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
        if (isset($_REQUEST['sexe'])) {
            $sexe = $_REQUEST['sexe'];
        }
        if (isset($_REQUEST['foto'])) {
            $foto = $_REQUEST['foto'];
        }
        if (isset($_REQUEST['descripcio'])) {
            $descripcio = $_REQUEST['descripcio'];
        }
        $nouActor = new Actor($dni, $nom, $cognom1, $cognom2, $sexe, $foto,$descripcio);
        //verifiquem que el actor no estigui a la base de dades per el dni

        if (!$actordb->buscarPerDni($dni)) {
            //validem dades per metode de la clase
            if ($nom->validateProduct()->getOk()) {
                try {
                    //afegim el actor a la base de dades
                    $nouActor->inserirActor();
                    $missatge = $nouActor->validarActor()->getMsg();
                } catch (Exception $e) {
                    $missatge = $e->getMessage();
                    require_once 'view/error.php';
                }
            } else {
                //missatege de la clase validar
                $missatge = $nouActor->validarActor()->getMsg();
                require_once 'view/confirmacio.php';
            }
        } else {
            $missatge = "Actor ja existent";
            require_once 'view/error.php';
        }
    } else {
        require_once 'view/afegirActor.php';
    }
    //control sessio
} else {
    $missatge = "No tens permisos per entrar en aquesta pagina! sis plau inicia sessio. Gracies";
    require_once 'view/error.php';
}

require_once 'view/footer.php';


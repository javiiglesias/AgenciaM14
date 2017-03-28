<?php

$titlePage = "Modificar Actor";

$actordb = new Actordb();
$dni = null;
$nom = null;
$cognom1 = null;
$cognom2 = null;
$sexe = null;
$foto = null;
$descripcio = null;
$id = null;

require_once 'view/header.php';
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}
$actor = $actordb->buscarPerId($id);

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
        if (isset($_REQUEST['categoria'])) {
            $sexe = $_REQUEST['categoria'];
        }
        if (isset($_REQUEST['foto'])) {
            $foto = $_REQUEST['foto'];
        }
        if (isset($_REQUEST['descripcio'])) {
            $descripcio = $_REQUEST['descripcio'];
        }
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
        }
        
        $modActor = new Actor($dni, $nom, $cognom1, $cognom2, $sexe, $foto,$descripcio);
        

        if ($modActor->validarActor()->getOk()) {
            try {
                //afegim el actor a la base de dades
                $modActor->modificarActor($id);
                $missatge = $modActor->validarActor()->getMsg();
            } catch (Exception $e) {
                $missatge = $e->getMessage();
                require_once 'view/error.php';
            }
        } else {
            //missatege de la clase validar
            $missatge = $modActor->validarActor()->getMsg();
            require_once 'view/confirmacio.php';
        }
    } else {
        require_once 'view/modificarActor.php';
    }
} else {
    $missatge = "No tens permisos per entrar en aquesta pagina! sis plau inicia sessio. Gracies";
    require_once 'view/error.php';
}
require_once 'view/footer.php';

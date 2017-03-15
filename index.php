<?php

require_once 'model/llibres.class.php';
require_once 'model/usuaris.class.php';
session_start();

$ctl = "inici";

if (isset($_REQUEST['ctl'])) {
    $ctl = $_REQUEST['ctl'];
    $act = null;
    if (isset($_REQUEST['act'])) {
        $act = $_REQUEST['act'];
    }
}

switch ($ctl) {
    case"usuari":
        switch ($act) {
            case "login":
                include "controller/login_ctl.php";
                break;
            case "registre":
                include "controller/registreusuari_ctl.php";
                break;
            case"sortir";
                include "controller/logout.php";
                break;
        }
        break;

    case "llibre":        
        switch ($act){
            case "afegir":
                include "controller/afegirLlibre_ctl.php";
                break;
            case "cercar":
                include "controller/cercarLlibre_ctl.php";
                break;
            case "modificar":
                include "controller/modificarLlibre_ctl.php";
                break;
            case "eliminar":
                include "controller/eliminarLlibre_ctl.php";
                break;
        }
        break;
    
    case"categoria":
        switch ($act){
            case "afegir":
                include "controller/afegirCategoria_ctl.php";
                break;
        }
        break;
    default:
        include "controller/" . $ctl . "_ctl.php";
        break;
}
?>


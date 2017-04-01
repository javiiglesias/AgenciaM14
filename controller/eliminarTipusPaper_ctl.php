<?php

$titlePage = "Eliminar Tipus Paper";
$descripcio = null;
require_once 'view/header.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    }

    $tipusPaper = new tipus_paper();
    $arrayTipusPaper = $tipusPaper->cercarId($id);
    $tipusPaper->eliminarTipusPaper($id);
    $missatge = "S'ha eliminat el tipus de paper correctament!";
    $redireccio = "?ctl=tipusPaper&act=mostrar";
    require_once 'view/confirmacio.php';

} else {
    $missatge = "No tens permisos per entrar en aquesta pàgina! Si us plau, inicia sessió. Gràcies";
    require_once 'view/error.php';
}
    require_once 'view/footer.php';
?>
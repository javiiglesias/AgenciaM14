<?php

$categoriaDAO = new CategoriaDAO();

$id = null;
$categoria = null;

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    if (isset($_REQUEST['Submit'])) {

        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
        }

        if (isset($_REQUEST['categoria'])) {
            $categoria = $_REQUEST['categoria'];
        }
        if ($id != null && $categoria != null) {
            $categoriaDAO->afegirCategoria($id, $nom);
        } else {
            $missatge = "No s'ha pogut afegit la categoria, camps sense informació!";
            require_once 'view/error.php';
        }
    }
} else {
    $missatge = "No tens permisos per entrar en aquesta pagina! sis plau inicia sessio. Gracies";
    require_once 'view/error.php';
}
?>


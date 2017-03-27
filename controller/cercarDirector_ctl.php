<?php
/**
 * Created by PhpStorm.
 * User: javi
 * Date: 23/03/17
 * Time: 16:01
 */

$titlePage = "Cercar Directors";

$director = new DirectorDb();


$nom = null;

if (isset($_REQUEST['nom'])) {
    $nom = $_REQUEST['nom'];
}

$directors = $director->retornarDirectorsConcret($nom);

if ($nom != null) {
    $llistaTitle = "Resultats de " . $nom;
}
require_once 'view/header.php';
require_once 'view/directors.php';
require_once 'view/footer.php';

?>
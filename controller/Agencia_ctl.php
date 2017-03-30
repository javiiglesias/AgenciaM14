<?php
/**
 * Created by PhpStorm.
 * User: javi
 * Date: 27/03/17
 * Time: 15:58
 */
require_once("model/Persistence/class_Agenciadb.php");

$titlePage = "Agencia";

$agenciadb = new Agenciadb();

$ArrayAgencia = $agenciadb->retornarAgencia();
$ArrayDirectores= $agenciadb->retornarDirectors();
$ArrayOBRAS = $agenciadb->mostrarObra();
$ArrayActores = $agenciadb->populateActordb();


$agencia=$ArrayAgencia;
$directores=$ArrayDirectores;
$obras=$ArrayOBRAS;
$actores=$ArrayActores;

require_once 'view/header.php';
require_once 'view/Agencia.php';
require_once 'view/footer.php';
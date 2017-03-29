<?php
/**
 * Created by PhpStorm.
 * User: javi
 * Date: 27/03/17
 * Time: 15:58
 */
require_once("model/Persistence/class_Agenciadb.php");

$titlePage = "Agencia";

$agencia = new Agenciadb();

$ArrayAgencia = $agencia->retornarAgencia();
//$ArrayDirectores= $agencia->retornarDirectors();
//$ArrayOBRAS = $agencia->mostrarObra();

require_once 'view/header.php';
require_once 'view/Agencia.php';
require_once 'view/footer.php';
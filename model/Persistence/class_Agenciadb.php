<?php

/**
 * Created by PhpStorm.
 * User: javi
 * Date: 27/03/17
 * Time: 15:52
 */

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");


class Agenciadb{

    public function retornarAgencia() {
        $query="SELECT * FROM agencia;";
        $con = new db();
        $arrayDeAgencia = $con->consultarAgencia($query);
        $con->close();
        return $arrayDeAgencia;
    }


    public function retornarDirectors() {
        $query="SELECT * FROM director;";
        $con = new db();
        $arrayDeDirectors = $con->consultarDirector($query);
        $con->close();
        return $arrayDeDirectors;
    }

    public function mostrarObra() {
        $obradb = new obradb();
        $arrayTipusObra = $obradb->populateObraDb();
        return $arrayTipusObra;
    }
    public function populateActordb() {
        $query = "SELECT * FROM actor;";
        $con = new db();
        $arrayDeActors = $con->consultarActors($query);
        $con->close();
        return $arrayDeActors;
    }


}
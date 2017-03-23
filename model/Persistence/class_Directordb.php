<?php

/* function __autoload($class_name) {
  require_once($class_name . ".php");
  } */
include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class DirectorDb {


    // modificar
    public function inserir($dni, $nom, $cognom1, $cognom2) {

        $query = "insert into director values('', '" . $dni . "', '" . $nom . "', '" . $cognom1 . "', '" . $cognom2 . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }
    public function retornarDirectors() {
        $query="SELECT * FROM director;";
		$con = new db();
		$arrayDeDirectors = $con->consultarDirector($query);
		$con->close();
		return $arrayDeDirectors;	  
    }
    public function retornarDirectorsConcret($dni) {
        $query="SELECT * FROM director WHERE nif = '".$dni."'";
        $con = new db();
        $director = $con->consultarDirector($query);
        $con->close();
        return $director;
    }

    public function modificarDirector($dni, $nom, $cognom1, $cognom2) {
        $query = "UPDATE director SET nif='".$dni."', nom='".$nom."', cognom1='".$cognom1."', cognom2='".$cognom2."'  WHERE nif='".$dni."'";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }
    public function eliminarDirector($dni) {
        $query = "DELETE FROM director WHERE nif='".$dni."'";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>

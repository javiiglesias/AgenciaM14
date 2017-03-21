<?php

/* function __autoload($class_name) {
  require_once($class_name . ".php");
  } */
include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class DirectorDb {


    // modificar
    public function inserir($director) {

        $query = "insert into directors values('', '" . $director->getDni() . "', '" . $director->getNom() . "', '" . $director->getCognom1() . "', '" . $director->getCognom2() . "');";
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

}

?>

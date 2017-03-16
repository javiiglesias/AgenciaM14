<?php

/* function __autoload($class_name) {
  require_once($class_name . ".php");
  } */
include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class DirectorDb {

    public function inserir($director) {

        $query = "insert into directors values('', '" . $director->getDni() . "', '" . $llibre->getNom() . "', '" . $llibre->getCognom1() . "', '" . $llibre->getCognom2() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }
    public function populateDirectordb() {
        $query="SELECT * FROM llibres;";				
		$con = new db();
		$arrayDeDirectors = $con->consultarDirectors($query);
		$con->close();
		return $arrayDeDirectors;	  
    }

}

?>

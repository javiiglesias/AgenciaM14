<?php

/* function __autoload($class_name) {
  require_once($class_name . ".php");
  } */
include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class llibreDb {

    public function inserir($llibre) {

        $query = "insert into llibres values('', '" . $llibre->getTitol() . "', '" . $llibre->getAutor() . "', '" . $llibre->getEditorial() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>

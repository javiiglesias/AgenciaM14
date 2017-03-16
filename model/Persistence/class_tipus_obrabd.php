<?php

/* function __autoload($class_name) {
  require_once($class_name . ".php");
  } */
include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class tipus_obraDb {

    public function inserir($tipus_obra) {

        $query = "insert into tipus_obra values('', '" . $tipus_obra->getId() . "', '" . $tipus_obra->getDescripcio() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>

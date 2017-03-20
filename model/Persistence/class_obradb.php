<?php

/* function __autoload($class_name) {
  require_once($class_name . ".php");
  } */
include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class obraDb {

    public function inserir($obra) {

        $query = "insert into obra values('', '" . $obra->getNomObra() . "', '" . $obra->getDescripcioObra() . "', '" . $obra->getDateIniciObra() . "', '" . $obra->getDateFiObra() . "', '" . $obra->getTipusObra(). "', '" . $obra->getDirectorObra(). "', '" . $obra->getAgenciaObra(). "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

}

?>

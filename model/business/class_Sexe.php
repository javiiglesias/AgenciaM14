<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");
class Sexe {

    public $id;
    public $sexe;

    function __construct($_id, $_descripcion) {
        $this->id = $_id;
        $this->sexe = $_descripcion;
    }

}

?>
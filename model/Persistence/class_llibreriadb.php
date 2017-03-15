<?php
require_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class llibreriadb {

    private $llibres;

    public function __construct() {
        $llibres = array();
    }

    public function populateLlibreriadb() {
        $query="SELECT * FROM llibres;";				
		$con = new db();
		$arrayDeLlibres = $con->consultarLlibres($query);
		$con->close();
		return $arrayDeLlibres;	  
    }
}
?>
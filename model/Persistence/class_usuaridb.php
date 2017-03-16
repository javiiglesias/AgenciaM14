<?php
require_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class usuaridb {

    private $usuaris;

    public function __construct() {
        $usuaris = array();
    }

    public function consultarUsuarisdb() {
        $query="SELECT id, username, password, rol FROM usuari;";				
		$con = new db();
		$arrayDeUsuaris = $con->consultarUsuari($query);
		$con->close();
		return $arrayDeUsuaris;
                
    }
}
?>
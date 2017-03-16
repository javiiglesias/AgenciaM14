<?php
require_once("controller/function_AutoLoad.php"); 	

class llibreria {
    private $nameLib;
	private $arraydeLlibres;

    public function __construct($nameLib) {
		$this->setNameLib($nameLib);
        $arraydeLlibres = array();
    }

	public function getNameLib(){
		return $this->nameLib;
	}

	public function setNameLib($value){
		$this->nameLib = $value;
	}
	
    public function populateLlibreria() {
        $llibreriadb = new llibreriadb();
        $arraydeLlibres = $llibreriadb->populateLlibreriadb();    
		return $arraydeLlibres;
    }	
	
	public function afegirLlibre($titol, $autor, $editorial) {
		$llibre = new llibre($titol, $autor, $editorial);
		$llibre->inserirLlibre();
		
	}
}
?>
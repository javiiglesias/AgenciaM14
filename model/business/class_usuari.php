<?php
require_once("controller/function_AutoLoad.php"); 	

class Usuari {
    private $name;
    private $password;

    public function __construct($name,$password) {
        $this->setName($name);
        $this->setPassword($password);
        $arrayUsuaris = array();
    }

	public function getName(){
		return $this->name;
	}

	public function setName($value){
		$this->name = $value;
	}
        public function getPassword(){
		return $this->password;
	}

	public function setPassword($value){
		$this->password = $value;
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
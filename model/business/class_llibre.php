<?php
require_once("controller/function_AutoLoad.php"); 	

class llibre{
    private $id;
    private $titol;
    private $autor;
    private $editorial;
    
    public function __construct($titol_llibre, $autor_llibre, $editorial_llibre){
		$this->setId(null);
		$this->setTitol($titol_llibre);
		$this->setAutor($autor_llibre);
		$this->setEditorial($editorial_llibre);
	}
	
	public function getId(){
		return $this->id;
	}

	public function setId($value){
		$this->id = $value;
	}
	
	public function getTitol(){
		return $this->titol;
	}

	public function setTitol($value){
		$this->titol = $value;
	}
	
	public function getAutor(){
		return $this->autor;
	}

	public function setAutor($value){
		$this->autor = $value;
	}
	
	public function getEditorial(){
		return $this->editorial;
	}

	public function setEditorial($value){
		$this->editorial = $value;
	}
	
	public function inserirLlibre(){		
		$llibreDb = new llibredb();
		$llibreDb->inserir($this);		
	}	
}    
 ?>
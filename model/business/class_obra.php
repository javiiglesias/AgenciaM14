<?php

require_once("controller/function_AutoLoad.php");

class Obra {

    private $id;
    private $nom;
    private $descripcio;
    private $datainici;
    private $datafi;
    private $tipusObra;

    public function __construct($nom,$descripcio,$datainici,$datafi,$tipusobra) {
        $this->setId(null);
        $this->setNom($nom);
        $this->setDescripcio($descripcio);
        $this->setEditorial($editorial_llibre);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($value) {
        $this->nom = $value;
    }

    public function getDescripcio() {
        return $this->descripcio;
    }

    public function setDescripcio($value) {
        $this->descripcio = $value;
    }

    public function getDateInici() {
        return $this->dateinici;
    }

    public function setDateInici($value) {
        $this->dateinici = $value;
    }

    public function inserirObra() {
        $obraDb = new obradb();
        $obraDb->inserir($this);
    }

}

?>
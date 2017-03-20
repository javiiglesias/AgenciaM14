<?php

require_once("controller/function_AutoLoad.php");

class Obra {

    private $id = null;
    private $nom = null;
    private $descripcio = null;
    private $datainici = null;
    private $datafi = null;
    private $tipusobra = null;
    private $agencia = null;
    private $director = null;

    public function __construct($nom, $descripcio, $datainici, $datafi, $tipusobra,$agencia, $directors) {
        $this->setIdObra(null);
        $this->setNomObra($nom);
        $this->setDescripcioObra($descripcio);
        $this->setDateIniciObra($datainici);
        $this->setDateFiObra($datafi);
        $this->setTipusObra($tipusobra);
        $this->setAgenciaObra($agencia);
        $this->setDirectorObra($directors);
    }

    public function getIdObra() {
        return $this->id;
    }

    public function setIdObra($value) {
        $this->id = $value;
    }

    public function getNomObra() {
        return $this->nom;
    }

    public function setNomObra($value) {
        $this->nom = $value;
    }

    public function getDescripcioObra() {
        return $this->descripcio;
    }

    public function setDescripcioObra($value) {
        $this->descripcio = $value;
    }

    public function getDateIniciObra() {
        return $this->datainici;
    }

    public function setDateIniciObra($value) {
        $this->datainici = $value;
    }

    public function getDateFiObra() {
        return $this->datafi;
    }

    public function setDateFiObra($value) {
        $this->datefi = $value;
    }

    public function getTipusObra() {
        return $this->tipusobra;
    }

    public function setTipusObra($value) {
        $this->tipusobra = $value;
    }

    public function getDirectorObra() {
        return $this->director;
    }

    public function setDirectorObra($value) {
        $this->director = $value;
    }

    public function getAgenciaObra() {
        return $this->agencia;
    }

    public function setAgenciaObra($value) {
        $this->agencia = $value;
    }

    public function inserirObra($nom, $descripcio, $datainici, $datafi, $tipusobra,$agencia, $directors) {
        $obra = new obra($nom, $descripcio, $datainici, $datafi, $tipusobra,$agencia, $directors);
        $obraDb = new obradb();
        $obraDb->inserir($obra);
    }

}

?>
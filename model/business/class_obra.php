<?php

require_once("controller/function_AutoLoad.php");

class Obra {

    private $id = null;
    private $nom = null;
    private $descripcio = null;
    private $datainici = null;
    private $datafi = null;
    private $tipusobra = null;
    private $director = null;

    public function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 6:
                $this->setIdObra(null);
                $this->setNomObra(func_get_args()[0]);
                $this->setDescripcioObra(func_get_args()[1]);
                $this->setDataIniciObra(func_get_args()[2]);
                $this->setDataFiObra(func_get_args()[3]);
                $this->setTipusObra(func_get_args()[4]);
                $this->setDirectorObra(func_get_args()[5]);
                break;
        }
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

    public function getDataIniciObra() {
        return $this->datainici;
    }

    public function setDataIniciObra($value) {
        $this->datainici = $value;
    }

    public function getDataFiObra() {
        return $this->datafi;
    }

    public function setDataFiObra($value) {
        $this->datafi = $value;
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

    public function inserirObra($nom, $descripcio, $datainici, $datafi, $tipusobra, $directors) {
        $obra = new obra($nom, $descripcio, $datainici, $datafi, $tipusobra, $directors);
        $obraDb = new obradb();
        $obraDb->inserir($obra);
    }

    public function modificarObra($obra, $nom, $descripcio, $datainici, $datafi, $tipusobra, $directors) {
        $obraDb = new obradb();
        $obraDb->modificar($obra, $nom, $descripcio, $datainici, $datafi, $tipusobra, $directors);
    }

    public function eliminarObra($obra) {
        $obraDb = new obradb();
        $obraDb->eliminar($obra);
    }

    public function mostrarObra() {
        $obradb = new obradb();
        $arrayTipusObra = $obradb->populateObraDb();
        return $arrayTipusObra;
    }

    public function cercarIdObra($id) {
        $arrayTipusObra = $this->mostrarObra();
        $found = null;
        foreach ($arrayTipusObra as $typeselect) {
            if ($typeselect->getIdObra() == $id) {
                $found = $typeselect;
            }
        }
        return $found;
    }

}

?>
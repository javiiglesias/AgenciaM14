<?php

require_once("controller/function_AutoLoad.php");

class Obra_Actor {

    private $id = null;
    private $personatge = null;
    private $obra = null;
    private $actor = null;
    private $tipus_paper = null;

    public function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 4:
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

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getPersonatge() {
        return $this->personatge;
    }

    public function setPersonatge($value) {
        $this->personatge = $value;
    }

    public function getObra() {
        return $this->obra;
    }

    public function setObra($value) {
        $this->obra = $value;
    }

    public function getActor() {
        return $this->actor;
    }

    public function setActor($value) {
        $this->actor = $value;
    }

    public function getTipusPaper() {
        return $this->tipus_paper;
    }

    public function setTipusPaper($value) {
        $this->tipus_paper = $value;
    }  

    public function inserirObraActor($personatge, $obra, $actor, $tipusPaper) {
        $ObraActor = new obra_actor($personatge, $obra, $actor, $tipusPaper);
        $obraActorDb = new obraactorDb();
        $obraActorDb->inserir($ObraActor);
    }

    public function modificarObraActor($obraid, $personatge, $obra, $actor, $tipusPaper) {
        $obraActorDb = new obraactorDb();
        $obraActorDb->modificar($obraid, $personatge, $obra, $actor, $tipusPaper);
    }

    public function eliminarObraActor($obra) {
        $obraDb = new obradb();
        $obraDb->eliminar($obra);
    }

    public function mostrarObraActors() {
        $obradb = new obradb();
        $arrayTipusObra = $obradb->populateObraDb();
        return $arrayTipusObra;
    }

    public function cercarIdObraActor($id) {
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
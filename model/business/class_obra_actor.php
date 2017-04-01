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
                $this->setId(null);
                $this->setObra(func_get_args()[0]);
                $this->setActor(func_get_args()[1]);
                $this->setTipusPaper(func_get_args()[2]);
                $this->setPersonatge(func_get_args()[3]);
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

    public function inserirObraActor($obra_actor) {
        $obraActorDb = new obra_actordb();
        $obraActorDb->inserir($obra_actor);
    }

    public function modificarObraActor($obraid, $obra, $actor, $tipusPaper, $personatge) {
        $obraActorDb = new obra_actordb();
        $obraActorDb->modificar($obraid, $obra, $actor, $tipusPaper, $personatge);
    }

    public function eliminarObraActor($obra) {
        $obraActorDb = new obra_actordb();
        $obraActorDb->eliminar($obra);
    }

    public function mostrarObraActors() {
        $obraActorDb = new obra_actordb();
        $arrayTipusObraActor = $obraActorDb->populateObraActorDb();
        return $arrayTipusObraActor;
    }

    public function cercarIdObraActor($idObra) {
        $arrayTipusObraActor = $this->mostrarObraActors();
        $found = [];
        foreach ($arrayTipusObraActor as $key => $obraActor) {
            if ($obraActor->getObra() == $idObra) {
                $found[$key] = $obraActor;
            }
        }
        return $found;
    }

    public function cercarIdOActor($idActor) {
        $actor = new Actordb();
        return $arrayTipusObraActor = $actor->buscarPerId($idActor);
    }

    public function cercarPersonatge($idActor) {
        $arrayTipusObraActor = $this->mostrarObraActors();
        $found = null;
        foreach ($arrayTipusObraActor as $obraActor) {
            if ($obraActor->getActor() == $idActor) {
                $found = $obraActor->getPersonatge();
            }
        }
        return $found;
    }

}

?>
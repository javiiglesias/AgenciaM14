<?php

/* function __autoload($class_name) {
  require_once($class_name . ".php");
  } */
include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ActorDb {

    public function inserir($actor) {

        $query = "insert into actor values( '" . $actor->getDni() . "', '" . $actor->getNom() . "', '" . $actor->getCognom1() . "', '" . $actor->getCognom2() . "','" . $actor->getDescripcio() . "','" . $actor->getSexe() . "','" . $actor->getFoto() . "','');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function populateActordb() {
        $query = "SELECT * FROM actor;";
        $con = new db();
        $arrayDeActors = $con->consultarActors($query);
        $con->close();
        return $arrayDeActors;
    }

    function cercar($categoria, $limit) {
        $actors = new ActorDb();
        $llistaactors = $actors->populateActordb();
        if ($categoria != " ") {
            $res = [];
            for ($i = 0; $i < count($llistaactors); $i++) {
                if ($llistaactors[$i]->getSexe() == $categoria) {
                    array_push($res, $llistaactors[$i]);
                }
            }
        } else {
            $res = $actors->populateActordb();
        }
        if ($limit != " ") {
            $arrayActors = [];
            for ($i = 0; $i < count($res) && $i < $limit; $i++) {
                array_push($arrayActors, $res[$i]);
            }
        } else {
            $arrayActors = [];
            $limit = 3;
            for ($i = 0; $i < count($res) && $i < $limit; $i++) {
                array_push($arrayActors, $res[$i]);
            }
        }

        return $arrayActors;
    }

    function buscarPerId($id) {

        $actors = new ActorDb();
        $llistaactors = $actors->populateActordb();
        $trobat = false;
        for ($i = 0; $i < count($llistaactors) || $trobat = false; $i++) {
            if ($llistaactors[$i]->getId() == $id) {
                $actorTrobat = new Actor($llistaactors[$i]->getDni(), $llistaactors[$i]->getNom(), $llistaactors[$i]->getCognom1(), $llistaactors[$i]->getCognom2(), $llistaactors[$i]->getSexe(), $llistaactors[$i]->getFoto(), $llistaactors[$i]->getDescripcio());
                return $actorTrobat;
            }
        }
    }
    function buscarPerDni($dni){
        $actors = new ActorDb();
        $llistaactors = $actors->populateActordb();
        $trobat = false;
        for ($i = 0; $i < count($llistaactors) || $trobat = false; $i++) {
            if ($llistaactors[$i]->getDni() == $dni) {
                $actorTrobat = new Actor($llistaactors[$i]->getDni(), $llistaactors[$i]->getNom(), $llistaactors[$i]->getCognom1(), $llistaactors[$i]->getCognom2(), $llistaactors[$i]->getSexe(), $llistaactors[$i]->getFoto(), $llistaactors[$i]->getDescripcio());
                return $trobat;
            }
        }
    }

}

?>

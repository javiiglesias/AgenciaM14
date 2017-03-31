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

    public function createSelectTipusObra() {
        $type = new tipus_obra();
        $ArraydeTipusObra = $type->mostrarTipusObra();

        $select = '<select name="tipusobra"  class="form-control">';
        $select = $select . '<option value=""></option>';
        foreach ($ArraydeTipusObra as $key => $tipus) {

            $select = $select . '<option value="' . $tipus->getId() . '">' . $tipus->getDescripcio() . '</option>';
        }
        $select = $select . '</select>';
        return $select;
    }

    public function tipusObraSeleccionat($tipusSelect) {
        $type = new tipus_obra();
        $ArraydeTipusObra = $type->mostrarTipusObra();
        $select = '<select name="tipusobra" class="form-control">';
        foreach ($ArraydeTipusObra as $key => $sec) {
            if ($sec->getId() == $tipusSelect) {
                $select = $select . '<option value="' . $sec->getId() . '"selected>' . $sec->getDescripcio() . '</option>';
            } else {
                $select = $select . '<option value="' . $sec->getId() . '">' . $sec->getDescripcio() . '</option>';
            }
        }
        $select = $select . '</select>';
        return $select;
    }

    public function createSelectDirectorObra() {
        $director = new Directordb();
        $ArraydeDirectors = $director->retornarDirectors();

        $select = '<select name="director"  class="form-control">';
        $select = $select . '<option value=""></option>';
        foreach ($ArraydeDirectors as $direct) {
            $select = $select . '<option value="' . $direct->getId() . '">' . $direct->getNom() . " " . $direct->getCognom1() . " " . $direct->getCognom2() . '</option>';
        }
        $select = $select . '</select>';
        return $select;
    }
    
    public function createSelectActorObra() {
        $actor = new Actordb();
        $ArraydeActor = $actor->populateActordb();

        $select = '<select name="actor"  class="form-control">';
        $select = $select . '<option value=""></option>';
        foreach ($ArraydeActor as $act) {
            $select = $select . '<option value="' . $act->getId() . '">' . $act->getNom() . " " . $act->getCognom1() . " " . $act->getCognom2() . '</option>';
        }
        $select = $select . '</select>';
        return $select;
    }
    
    

    public function directorObraSeleccionat($directorSelect) {
        $director = new Directordb();
        $ArraydeDirectors = $director->retornarDirectors();
        $select = '<select name="director" class="form-control">';
        foreach ($ArraydeDirectors as $sec) {
            if ($sec->getId() == $directorSelect) {
                $select = $select . '<option value="' . $sec->getId() . '"selected>' . $sec->getNom() . " " . $sec->getCognom1() . " " . $sec->getCognom2() . '</option>';
            } else {
                $select = $select . '<option value="' . $sec->getId() . '">' . $sec->getNom() . " " . $sec->getCognom1() . " " . $sec->getCognom2() . '</option>';
            }
        }
        $select = $select . '</select>';
        return $select;
    }

    public function cercartipusObra($id) {
        $type = new tipus_obra();
        $TipusObra = $type->cercarId($id);
        return $TipusObra;
    }

    public function cercarDirectorObra($id) {


        $director = new Directordb();
        $ArraydeDirectors = $director->retornarDirectors();
        $directorTrobat = null;
        foreach ($ArraydeDirectors as $direc) {
            if ($direc->getId() == $id) {
                $directorTrobat = $direc;
            }
        }
        return $directorTrobat;
    }

    public function cercarObraPerTipus($tipusid) {
        $tipus = new tipus_obra();
        $arrayTipusObra = $tipus->mostrarTipusObra();
        $found = null;
        foreach ($arrayTipusObra as $typeselect) {
            if ($typeselect->getId() == $tipusid) {
                $found = $typeselect;
            }
        }
        return $found;
    }

    public function cercarTipus($tipus, $limit) {
        $obra = new obradb();
        $llistaobra = $obra->populateObraDb();
        if ($tipus != " ") {
            $res = [];
            for ($i = 0; $i < count($llistaobra); $i++) {
                if ($llistaobra[$i]->getTipusObra() == $tipus) {
                    array_push($res, $llistaobra[$i]);
                }
            }
        } else {
            $res = $obra->populateActordb();
        }
        if ($limit != " ") {
            $arrayObra = [];
            for ($i = 0; $i < count($res) && $i < $limit; $i++) {
                array_push($arrayObra, $res[$i]);
            }
        } else {
            $arrayObra = [];
            $limit = 3;
            for ($i = 0; $i < count($res) && $i < $limit; $i++) {
                array_push($arrayObra, $res[$i]);
            }
        }

        return $arrayObra;
    }

    public function cercarUltimaObra() {
        $arrayObra = $this->mostrarObra();

        $found = end($arrayObra);
          
        return $found;
    }

}

?>
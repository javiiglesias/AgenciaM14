<?php

require_once("controller/function_AutoLoad.php");

class Actor {

    private $id;
    private $dni;
    private $nom;
    private $cognom1;
    private $cognom2;
    private $sexe;
    private $foto;
    private $descripcio;

    public function __construct($_dni, $_nom, $_cognom1, $_cognom2, $_sexe, $_foto, $_descripcio) {
        $this->setId(null);
        $this->setDni($_dni);
        $this->setNom($_nom);
        $this->setCognom1($_cognom1);
        $this->setCognom2($_cognom2);
        $this->setSexe($_sexe);
        $this->setFoto($_foto);
        $this->setDescripcio($_descripcio);
    }

    public function getDescripcio() {
        return $this->descripcio;
    }

    public function setDescripcio($descripcio) {
        $this->descripcio = $descripcio;
    }

    public function getId() {
        return $this->id;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getCognom1() {
        return $this->cognom1;
    }

    public function getCognom2() {
        return $this->cognom2;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setCognom1($cognom1) {
        $this->cognom1 = $cognom1;
    }

    public function setCognom2($cognom2) {
        $this->cognom2 = $cognom2;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function inserirActor() {
        $actorDb = new Actordb();
        $actorDb->inserir($this);
    
    }
    public function modificarActor($id){
        $actorDb = new ActorDb();
        $actorDb->modificar($this,  $id);
    }

    public function validarActor() {
        $validation = new Validation(true, '');
        $validation->setMsg("all ok");
        if (trim($this->getNom()) == '') {
            $validation->setOk(false);
            $validation->setMsg("Camp nom buit");
        }
        if ($validation->getOk() && trim($this->getCognom1()) == '') {
            $validation->setOk(false);
            $validation->setMsg("Camp cognom buit");
        }
        if ($validation->getOk() && trim($this->getCognom2()) == '') {
            $validation->setOk(false);
            $validation->setMsg("Camp cognom buit");
        }
        if ($validation->getOk() && trim($this->getSexe()) == '') {
            $validation->setOk(false);
            $validation->setMsg("Has d'escollir sexe");
        }
        if ($validation->getOk() && trim($this->getFoto()) == '') {
            $validation->setOk(false);
            $validation->setMsg("Has de posar ruta foto");
        }
        if ($validation->getOk() && trim($this->getDescripcio()) == '') {
            $validation->setOk(false);
            $validation->setMsg("Has d'afegir una descripcio");
        }
//        if ($validation->getOk()) {
//            if (trim($this->getDni()) == "" || !$this->validateDNI($this->getDni())) {
//                $validation->setOk(false);
//                $validation->setMsg("DNI invalid");
//            }
//        }
        return $validation;
    }

    public function validateDNI($dni) {
        $letra = substr($dni, -1);
    $numeros = substr($dni, 0, -1);
    if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letra && strlen($letra) == 1 && strlen($numeros) == 8) {
        echo 'Dni valido';
    } else {
        echo 'Dni no valido';
    }
//        $letra = substr($dni, -1);
//        $numeros = substr($dni, 0, -1);
//        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letra && strlen($letra) == 1 && strlen($numeros) == 8) {
//            return true;
//        } else {
//            return false;
//        }
    }

}

?>
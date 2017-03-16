<?php

require_once("controller/function_AutoLoad.php");

class Director {

    private $id;
    private $dni;
    private $nom;
    private $cognom1;
    private $cognom2;

    public function __construct($_dni, $_nom, $_cognom1, $_cognom2) {
        $this->setId(null);
        $this->setDni($_dni);
        $this->setNom($_nom);
        $this->setCognom1($_cognom1);
        $this->setCognom2($_cognom2);
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

    public function inserirDirector() {
        $directorDb = new Directordb();
        $directorDb->inserir($this);
    }

}
?>


<?php

require_once("controller/function_AutoLoad.php");

/**
 * Created by PhpStorm.
 * User: javi
 * Date: 27/03/17
 * Time: 15:48
 */
class Agencia{

    private $id;
    private $cif;
    private $nom;

    public function __construct($_cif, $_nom) {
        $this->setId(null);
        $this->setCif($_cif);
        $this->setNom($_nom);

    }

    public function getId() {
        return $this->id;
    }

    public function getCif() {
        return $this->cif;
    }

    public function getNom() {
        return $this->nom;
    }


    public function setId($id) {
        $this->id = $id;
    }

    public function setCif($cif) {
        $this->cif = $cif;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }


}
?>




<?php

require_once("controller/function_AutoLoad.php");

class tipus_paper {

    private $id = null;
    private $nom = null;
    private $primari = null;
    private $secundari = null;
    private $extra = null;
    private $especialista = null;
    private $repartiment = null;

    public function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 6:
                $this->setId(null);
                $this->setNom(func_get_args()[0]);
                $this->setPrimari(func_get_args()[1]);
                $this->setSecundari(func_get_args()[2]);
                $this->setExtra(func_get_args()[3]);
                $this->setEspecialista(func_get_args()[4]);
                $this->setRepartiment(func_get_args()[5]);
                break;
        }
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

    public function getPrimari() {
        return $this->primari;
    }

    public function setPrimari($value) {
        $this->primari = $value;
    }

    public function getSecundari() {
        return $this->secundari;
    }

    public function setSecundari($value) {
        $this->secundari = $value;
    }

    public function getExtra() {
        return $this->extra;
    }

    public function setExtra($value) {
        $this->extra = $value;
    }

    public function getEspecialista() {
        return $this->especialista;
    }

    public function setEspecialista($value) {
        $this->especialista = $value;
    }

    public function getRepartiment() {
        return $this->repartiment;
    }

    public function setRepartiment($value) {
        $this->repartiment = $value;
    }

    public function afegirTipusPaper($nom, $primari, $secundari, $extra, $especialista, $repartiment) {
        $tipusPaper = new tipus_paper($nom, $primari, $secundari, $extra, $especialista, $repartiment);
        $tipus_paperDb = new tipus_paperdb();
        $tipus_paperDb->inserir($tipusPaper);
    }

    public function mostrarTipusPaper() {
        $tipusPaper = new tipus_paperdb();
        $arrayTipusPaper = $tipusPaper->populateTipusPaperDb();
        return $arrayTipusPaper;
    }

    public function cercarId($id) {
        $arrayTipusPaper = $this->mostrarTipusPaper();
        $found = null;
        foreach ($arrayTipusPaper as $typeselect) {
            if ($typeselect->getId() == $id) {
                $found = $typeselect;
            }
        }
        return $found;
    }

    public function modificarTipusPaper($id, $nom, $primari, $secundari, $extra, $especialista, $repartiment) {
        $tipusPaper = $this->cercarId($id);
        $tipus_paperDb = new tipus_paperdb();
        $tipus_paperDb->modificar($tipusPaper, $nom, $primari, $secundari, $extra, $especialista, $repartiment);
    }

    public function eliminarTipusPaper($id) {
        $tipusPaper = $this->cercarId($id);
        $tipus_paperDb = new tipus_paperdb();
        $tipus_paperDb->eliminar($tipusPaper);
    }

}

?>

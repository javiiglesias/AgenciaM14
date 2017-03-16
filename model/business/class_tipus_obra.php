<?php

require_once("controller/function_AutoLoad.php");

class tipus_obra {

    private $id;
    private $descripcio;

    public function __construct($id, $descripcio) {
        $this->setId(null);
        $this->setDescripcio($descripcio);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getDescripcio() {
        return $this->descripcio;
    }

    public function setDescripcio($value) {
        $this->descripcio = $value;
    }

    public function inserirTipus_obra() {
        $tipus_obraDb = new tipus_obraDb();
        $tipus_obraDb->inserir($this);
    }

}

?>

<?php

require_once("controller/function_AutoLoad.php");

class tipus_obra {

    private $id = null;
    private $descripcio = null;

    public function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 1:
                $this->setId(null);
                $this->setDescripcio(func_get_args()[0]);
                break;
        }
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

    public function afegirTipusObra($descripcio) {
        $tipusObra = new tipus_obra($descripcio);
        $tipus_obraDb = new tipus_obradb();
        $tipus_obraDb->inserir($tipusObra);
    }

    public function mostrarTipusObra() {
        $tipusObra = new tipus_obradb();
        $arrayTipusObra = $tipusObra->populateTipusObraDb();
        return $arrayTipusObra;
    }

    public function cercarId($id) {
        $arrayTipusObra = $this->mostrarTipusObra();
        $found = null;
        foreach ($arrayTipusObra as $typeselect) {
            if ($typeselect->getId() == $id) {
                $found = $typeselect;
            }
        }
        return $found;
    }

    public function modificarTipusObra($id, $descripcio) {
        $tipusObra = $this->cercarId($id);
        $tipus_obraDb = new tipus_obradb();
        $tipus_obraDb->modificar($tipusObra, $descripcio);
    }

    public function eliminarTipusObra($id) {
        $tipusObra = $this->cercarId($id);
        $tipus_obraDb = new tipus_obradb();
        $tipus_obraDb->eliminar($tipusObra);
    }

}

?>

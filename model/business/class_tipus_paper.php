<?php

require_once("controller/function_AutoLoad.php");
require_once 'model/Persistence/class_tipus_paperdb.php';

class tipus_paper {

    private $id = null;
    private $tipus = null;

    public function __construct() {
        switch (func_num_args()) {
            case 0:
                break;
            case 2:
                $this->setId(null);
                $this->setTipus(func_get_args()[0]);
                break;
        }
    }

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getTipus() {
        return $this->tipus;
    }

    public function setTipus($value) {
        $this->tipus = $value;
    }

    public function afegirTipusPaper($tipus) {
        $tipusPaper = new tipus_paper($tipus);
        $tipus_paperDb = new tipus_paperdb();
        $tipus_paperDb->inserir($tipusPaper);
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

    public function modificarTipusPaper($id, $tipus) {
        $tipusPaper = $this->cercarId($id);
        $tipus_paperDb = new tipus_paperdb();
        $tipus_paperDb->modificar($tipusPaper, $tipus);
    }

    public function eliminarTipusPaper($id) {
        $tipusPaper = $this->cercarId($id);
        $tipus_paperDb = new tipus_paperdb();
        $tipus_paperDb->eliminar($tipusPaper);
    }

    public function mostrarTipusPaper() {
        $tipusPaper = new tipus_paperDb();
        $arrayTipusPaper = $tipusPaper->populateTipusPaperDb();
        return $arrayTipusPaper;
    }

    public function createSelectTipusPaper() {
        $type = new tipus_paper();
        $ArraydeTipusPaper = $type->mostrarTipusPaper();

        $select = '<select name="tipuspaper"  class="form-control">';
        foreach ($ArraydeTipusPaper as $key => $tipus) {

            $select = $select . '<option value="' . $tipus->getId() . '">' . $tipus->getTipus() . '</option>';
        }
        $select = $select . '</select>';
        return $select;
    }

}

?>

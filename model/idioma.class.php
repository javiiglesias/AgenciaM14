<?php

class Idioma {

    public $id;
    public $nomIdioma;

    function __construct($_id, $_nomIdioma) {
        $this->id = $_id;
        $this->nomIdioma = $_nomIdioma;
    }

}

class IdiomaDAO {

    private $llistaIdioma = [];

    function __construct() {
        $this->llistaIdioma [] = new Idioma(' ', ' ');
        $this->llistaIdioma [] = new Idioma('1', 'Catala');
        $this->llistaIdioma [] = new Idioma('2', 'Castellano');
        $this->llistaIdioma [] = new Idioma('3', 'English');
        $this->llistaIdioma [] = new Idioma('4', 'Frances');
    }

    function createSelectIdiomes() {

        $select = '<select name="llengua">';
        foreach ($this->llistaIdioma as $idioma) {
            $select = $select . '<option value="' . $idioma->id . '">' . $idioma->nomIdioma . '</option>';
        }
        $select = $select . '</select>';
        return $select;
    }

    function IdiomaSeleccionat($idioSelect) {
        $select = '<select name="llengua">';
        foreach ($this->llistaIdioma as $key => $idioma) {
            if ($idioma->id == $idioSelect->id) {
                $select = $select . '<option value="' . $idioSelect->id . '"selected>' . $idioSelect->nomIdioma . '</option>';
            } else {
                $select = $select . '<option value="' . $idioma->id . '">' . $idioma->nomIdioma . '</option>';
            }
        }
        $select = $select . '</select>';
        return $select;
    }

    function llistaIdiomes() {
        $llista = '<ul>';
        foreach ($this->llistaIdioma as $key => $idioma) {
            if ($idioma->nomIdioma != " ") {
                $llista = $llista . '<li>' . $idioma->nomIdioma . '</li>';
            }
        }
        $llista = $llista . '</ul>';
        return $llista;
    }

    function getIdioma($id) {
        $getIdioma = null;
        foreach ($this->llistaIdioma as $data) {
            if ($data->id == $id) {
                $getIdioma = $data;
            }
        }
        return $getIdioma;
    }

}

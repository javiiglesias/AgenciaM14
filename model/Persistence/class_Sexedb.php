<?php
include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");


class Sexedb {

    private $llistaSexe = [];

    function __construct() {
        $this->llistaSexe[] = new Sexe(' ', ' ');
        $this->llistaSexe[] = new Sexe('Dona', 'Dona');
        $this->llistaSexe[] = new Sexe('Home', 'Home');
        
    }
    
    function afegirCategoria($id,$nom){
        $this->llistaSexe[] = new Sexe($id, $nom);
    }

    function createSelectCategories() {

        $select = '<select name="categoria" id="sexe"  class="form-control">>';
        foreach ($this->llistaSexe as $key => $cat) {

            $select = $select . '<option value="' . $cat->id . '">' . $cat->sexe . '</option>';
        }
        $select = $select . '</select>';
        return $select;
    }

    function categoriaSeleccionat($catSelect) {
        $select = '<select name="categoria">';
        foreach ($this->llistaSexe as $key => $cat) {
            if ($cat->id == $catSelect->id) {
                $select = $select . '<option value="' . $catSelect->id . '"selected>' . $catSelect->sexe . '</option>';
            } else {
                $select = $select . '<option value="' . $cat->id . '">' . $cat->descripcion . '</option>';
            }
        }
        $select = $select . '</select>';
        return $select;
    }

    function llistaCategoria() {
        $llista = '<ul>';
        foreach ($this->llistaSexe as $key => $cat) {
            if ($cat->descripcion != " ") {
                $llista = $llista . '<li><a href="?ctl=llibre&act=cercar"> ' . $cat->descripcion . '</a></li>';
            }
        }
        $llista = $llista . '</ul>';
        return $llista;
    }

    function getCategoria($id) {
        $getCat = null;
        foreach ($this->llistaSexe as $data) {
            if ($data->id == $id) {
                $getCat = $data;
            }
        }
        return $getCat;
    }

}

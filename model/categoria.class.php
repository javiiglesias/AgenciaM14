<?php

class Categoria {

    public $id;
    public $descripcion;

    function __construct($_id, $_descripcion) {
        $this->id = $_id;
        $this->descripcion = $_descripcion;
    }

}

class CategoriaDAO {

    private $llistaCategoria = [];

    function __construct() {
        $this->llistaCategoria[] = new Categoria(' ', ' ');
        $this->llistaCategoria[] = new Categoria('1', 'Poesia');
        $this->llistaCategoria[] = new Categoria('2', 'Historia');
        $this->llistaCategoria[] = new Categoria('3', 'Fantasia');
        $this->llistaCategoria[] = new Categoria('4', 'Narratiu');
        $this->llistaCategoria[] = new Categoria('5', 'Idiomes');
        $this->llistaCategoria[] = new Categoria('6', 'Art');
        $this->llistaCategoria[] = new Categoria('7', 'Noveles');
    }
    
    function afegirCategoria($id,$nom){
        $this->llistaCategoria[] = new Categoria($id, $nom);
    }

    function createSelectCategories() {

        $select = '<select name="categoria">';
        foreach ($this->llistaCategoria as $key => $cat) {

            $select = $select . '<option value="' . $cat->id . '">' . $cat->descripcion . '</option>';
        }
        $select = $select . '</select>';
        return $select;
    }

    function categoriaSeleccionat($catSelect) {
        $select = '<select name="categoria">';
        foreach ($this->llistaCategoria as $key => $cat) {
            if ($cat->id == $catSelect->id) {
                $select = $select . '<option value="' . $catSelect->id . '"selected>' . $catSelect->descripcion . '</option>';
            } else {
                $select = $select . '<option value="' . $cat->id . '">' . $cat->descripcion . '</option>';
            }
        }
        $select = $select . '</select>';
        return $select;
    }

    function llistaCategoria() {
        $llista = '<ul>';
        foreach ($this->llistaCategoria as $key => $cat) {
            if ($cat->descripcion != " ") {
                $llista = $llista . '<li><a href="?ctl=llibre&act=cercar"> ' . $cat->descripcion . '</a></li>';
            }
        }
        $llista = $llista . '</ul>';
        return $llista;
    }

    function getCategoria($id) {
        $getCat = null;
        foreach ($this->llistaCategoria as $data) {
            if ($data->id == $id) {
                $getCat = $data;
            }
        }
        return $getCat;
    }

}

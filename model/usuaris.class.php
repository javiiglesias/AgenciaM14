<?php

/*
  Classe per a la gestió d'Usuaris
 */

class Usuari {

    public $nom;
    public $contrasenya;

    function __construct($_nom, $_contrasenya) {
        $this->nom = $_nom;
        $this->contrasenya = $_contrasenya;
    }

}

class UsuarisDAO {

    private $llista = [];

    function __construct() {
        if (!isset($_SESSION['llistaUsuarisSes'])) {
            $this->llista[] = new Usuari('admin', '123');
            $this->llista[] = new Usuari('yaritza', '12345');
            $_SESSION['llistaUsuarisSes'] = &$this->llista;
        } else {
            $this->llista = &$_SESSION['llistaUsuarisSes'];
        }
    }

    function registrarUsuari($nom, $pas) {
        $this->llista[] = new Usuari($nom, $pas);
    }

    function validateUser($usuari, $clau) {
        $usuariValidat = false;
        $passValidat = false;
        $validat = false;

        foreach ($this->llista as $key => $data):
            if ($data->nom == $usuari && $data->contrasenya == $clau) {
                $usuariValidat = true;
                $passValidat = true;
            }
        endforeach;

        if ($usuariValidat && $passValidat) {
            $validat = true;
        } else {
            $validat = false;
        }
        return $validat;
    }

}

<?php

require_once("controller/function_AutoLoad.php");

class Usuari {
    private $id;
    private $name;
    private $password;
    private $rol;

    public function __construct($id, $name, $password, $rol) {
        $this->setId($id);
        $this->setName($name);
        $this->setPassword($password);
        $this->setRol($rol);
        $arrayUsuaris = array();
    }
    public function getId() {
        return $this->id;
    }

    public function getRol() {
        return $this->rol;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($value) {
        $this->name = $value;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($value) {
        $this->password = $value;
    }
}

class UsuariDAO {

    private $llista = [];

    function __construct() {
        
//        if (!isset($_SESSION['llistaUsuarisSes'])) {
//            $this->llista[] = new Usuari('admin', '123');
//            $this->llista[] = new Usuari('yaritza', '12345');
//            $_SESSION['llistaUsuarisSes'] = &$this->llista;
//        } else {
//            $this->llista = &$_SESSION['llistaUsuarisSes'];
//        }
    }

    function registrarUsuari($nom, $pas) {
        $this->llista[] = new Usuari($nom, $pas);
    }

    public function consultarUsuaris() {
        $usuaridb = new usuaridb();
        $arrayUsuaris = $usuaridb->consultarUsuarisdb();
        return $arrayUsuaris;
    }
    
     public function validateUser($name, $pass) {
        $usuari = new UsuariDAO;
        $arrayUsuaris= $usuari->consultarUsuaris();
        $ok = false;

        foreach ($arrayUsuaris as $usuari) {
           
            if($usuari->getName() == $name && $usuari->getPassword() == $pass){
                $ok = true;
            }
        }
        return $ok;
    }

}

?>
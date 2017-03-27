<?php

require_once("interface_db.php");

class db implements interface_db {

    private $server;
    private $username;
    private $password;
    private $dbname;
    private $link;

    public function __construct() {
        $this->setServer($GLOBALS['server']);
        $this->setUsername($GLOBALS['USER']);
        $this->setPassword($GLOBALS['PASS']);
        $this->setDbname($GLOBALS['bd']);
    }

    public function getServer() {
        return $this->server;
    }

    public function setServer($value) {
        $this->server = $value;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($value) {
        $this->username = $value;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($value) {
        $this->password = $value;
    }

    public function getDbname() {
        return $this->dbname;
    }

    public function setDbname($value) {
        $this->dbname = $value;
    }

    public function connect() {

        $this->link = mysqli_connect($this->getServer(), $this->getUsername(), $this->getPassword(), $this->getDbname());
        if (!$this->link) {
            die('Error, could not connect: ' . $this->error());
        }
        return $this->link;
    }

    /* public function bd($database){
      $this->dbname = mysqli_select_db($database, $this->link);
      if (!$this->dbname) {
      die ('Error, can\'t use database: ' .$this->error());
      }
      } */

    public function close() {
        return mysqli_close($this->link);
    }

    public function error() {
        return mysqli_error($this->link);
    }

    public function consulta($query) {
        $con = $this->connect();
        $resultat = mysqli_query($con, $query) or die('Error, query failed: ' . $this->error());

        return $resultat;
    }

    public function consultarLlibres($query) {
        $con = $this->connect();
        $consulta = mysqli_query($con, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $llibre = new llibre($row["titol"], $row["autor"], $row["editorial"]);
            $llibre->setId($row["id"]);
            $arrayLlibres[$cont] = $llibre;
            $cont++;

            /*
              $arrayLlibres[$cont][0] = $row["id"];
              $arrayLlibres[$cont][1] = $row["titol"];
              $arrayLlibres[$cont][2] = $row["autor"];
              $arrayLlibres[$cont][3] = $row["editorial"];

             */
        }
        //print_r($arrayLlibres);
        return $arrayLlibres;
    }
     public function consultarUsuari($query) {
        $con = $this->connect();
        $consulta = mysqli_query($con, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $usuari = new Usuari($row["id"], $row["username"], $row["password"], $row["rol"]);
            $arrayUsuaris[$cont] = $usuari;
            $cont++;
        }
        return $arrayUsuaris;
    }
    public function consultarDirector($query) {
        $con = $this->connect();
        $consulta = mysqli_query($con, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $director = new Director($row["nif"], $row["nom"], $row["cognom1"], $row["cognom2"]);
            $director->setId($row["id"]);
            $arrayDeDirectors[$cont] = $director;
            $cont++;
        }
        return $arrayDeDirectors;
    }

    public function consultarAgencia($query) {
        $con = $this->connect();
        $consulta = mysqli_query($con, $query) or die('Error, query failed: ' . $this->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $agencia = new Agencia($row["cif"], $row["nom"]);
            $agencia->setId($row["id"]);
            $arrayDeAgencia[$cont] = $agencia;
            $cont++;
        }
        return $arrayDeAgencia;
    }


}

?>
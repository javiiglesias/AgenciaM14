<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class obraDb {

    public function inserir($obra) {

        $query = "insert into obra values('', '" . $obra->getNomObra() . "', '" . $obra->getDescripcioObra() . "', '" . $obra->getDataIniciObra() . "', '" . $obra->getDataFiObra() . "', '" . $obra->getTipusObra() . "', '" . $obra->getDirectorObra() .  "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function modificar($obra, $nom, $descripcio, $datainici, $datafi, $tipusobra, $directors) {
        $query = "update obra set nom='" . $nom . "', descripcio='" . $descripcio. "', datainici='" .$datainici .  "', datafi='" . $datafi .  "', tipus_obra='". $tipusobra .  "', director='". $directors ."' WHERE id='" . $obra->getIdObra() . "'";
        
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function eliminar($obra) {
        $query = "delete from obra WHERE id='" . $obra->getIdObra() . "'";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }
    
    public function cercarObraPerTipusDb($tipus) {
        $query="SELECT * FROM obra WHERE tipus_obra =''".$tipus."''";
        $obra = $this->consultarObra($query);  
        return $obra;
    }

    public function populateObraDb() {
        $query = "SELECT * FROM obra";
        $arrayTipusObra = $this->consultarObra($query);        
        return $arrayTipusObra;
    }
    
    public function consultarObra($query) {
        $con = new db();
        $db = $con->connect();
        $consulta = mysqli_query($db, $query) or die('Error, query failed: ' . $con->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $obra = new obra($row["nom"],$row["descripcio"],$row["datainici"],$row["datafi"],$row["tipus_obra"],$row["director"]);
            $obra->setIdObra($row["id"]);
            $arrayTipusObra[$cont] = $obra;
            $cont++;
        }
        $con->close();
        return $arrayTipusObra;
    }
    
     

}

?>

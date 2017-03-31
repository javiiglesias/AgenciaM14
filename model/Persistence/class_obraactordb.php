<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class obraactorDb {

    public function inserir($obra_actor) {

        $query = "insert into obra_actor values('', '" . $obra_actor->getObra() . "', '" . $obra_actor->getActor() . "', '" . $obra_actor->getTipusPaper() . "', '" . $obra_actor->getPersonatge() .  "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function modificar($obra_actor, $obra, $actor, $tipus_paper, $personatge) {
        $query = "update obra_actor set id_obra='" . $obra . "', id_actor='" . $actor. "', tipus_paper='" .$tipus_paper .  "', personatge='" . $personatge ."' WHERE id='" . $obra_actor->getId() . "'";
        
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function eliminar($obra) {
        $query = "delete from obra_actor WHERE id='" . $obra->getId() . "'";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function populateObraActorDb() {
        $query = "SELECT * FROM obra_actor";
        $arrayObraActor = $this->consultarObraActor($query);        
        return $arrayObraActor;
    }
    
    public function consultarObraActor($query) {
        $con = new db();
        $db = $con->connect();
        $consulta = mysqli_query($db, $query) or die('Error, query failed: ' . $con->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $obra_actor = new obraactor($row["id_obra"],$row["id_actor"],$row["tipus_paper"],$row["personatge"]);
            $obra_actor->setId($row["id"]);
            $arrayTipusObraActor[$cont] = $obra_actor;
            $cont++;
        }
        $con->close();
        return $arrayTipusObraActor;
    }
    
     

}

?>

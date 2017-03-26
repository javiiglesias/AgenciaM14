<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class tipus_obraDb {

    public function inserir($tipus_obra) {
        $query = "insert into tipus_obra values('', '" . $tipus_obra->getDescripcio() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function modificar($tipus_obra, $descripcio) {
        $query = "update tipus_obra set descripcio='" . $descripcio . "' WHERE id='" . $tipus_obra->getId() . "'";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function eliminar($tipus_obra) {
        $query = "delete from tipus_obra WHERE id='" . $tipus_obra->getId() . "'";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function populateTipusObraDb() {
        $query = "SELECT * FROM tipus_obra";
        $arrayTipusObra = $this->consultarTipusObra($query);        
        return $arrayTipusObra;
    }
    
    public function consultarTipusObra($query) {
        $con = new db();
        $db = $con->connect();
        $consulta = mysqli_query($db, $query) or die('Error, query failed: ' . $con->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $tipusObra = new tipus_obra($row["descripcio"]);
            $tipusObra->setId($row["id"]);
            $arrayTipusObra[$cont] = $tipusObra;
            $cont++;
        }
        $con->close();
        return $arrayTipusObra;
    }
}
?>
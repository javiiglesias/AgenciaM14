<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class tipus_paperDb {

    public function inserir($tipus_paper) {
        $query = "insert into tipus_paper values('', '" . $tipus_paper->getTipus()  . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function modificar($tipus_paper, $tipus) {
        $query = "update tipus_paper set tipus='" . $tipus. "' WHERE id='" . $tipus_paper->getId() . "'";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function eliminar($tipus_paper) {
        $query = "delete from tipus_paper WHERE id='" . $tipus_paper->getId() . "'";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function populateTipusPaperDb() {
        $query = "SELECT * FROM tipus_paper";
        $arrayTipusPaper = $this->consultarTipusPaper($query);
        return $arrayTipusPaper;
    }

    public function consultarTipusPaper($query) {
        $con = new db();
        $db = $con->connect();
        $consulta = mysqli_query($db, $query) or die('Error, query failed: ' . $con->error());
        $cont = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $tipusPaper = new tipus_paper($row["tipus"],$row["tipus"]);
            $tipusPaper->setId($row["id"]);
            $arrayTipusPaper[$cont] = $tipusPaper;
            $cont++;
        }
        $con->close();
        return $arrayTipusPaper;
    }

}

?>
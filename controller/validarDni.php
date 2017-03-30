<?php

function validarDni($dni) {
    $letra = substr($dni, -1);
    $letraMayus= strtoupper($letra);
    $numeros = substr($dni, 0, -1);
    if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letraMayus && strlen($letraMayus) == 1 && strlen($numeros) == 8) {
        return true;
    } else {
        return false;
    }
}
?>
/**
 * Created by ivan on 29/03/17.
 */

$( document ).ready(function() {
    $('#dni').change(validateDni);
    $('#email').change(notEmpty);
    $('#missatge').change(notEmpty);
    $('#nom').change(notEmpty);
    $('#cognom1').change(notEmpty);
    $('#cognom2').change(notEmpty);
    $('#descripcio').change(notEmpty);
    $('#foto').change(notEmpty);
    $('#sexe').change(notEmptyDesplegable);
});

function notEmptyDesplegable(){
    var select = this.selectedIndex;
    var opcio = this.id;
    if(select == 0 || select == ""){
        $('#error'+opcio).show();
        $('#correct'+opcio).hide();
    }else{
        $('#error'+opcio).hide();
        $('#correct'+opcio).show();
    }
}


function notEmpty(){
    var select = this.value;
    var opcio = this.id;
    if(select == null || select == ""){
        $('#error'+opcio).show();
        $('#correct'+opcio).hide();
    }else{
        $('#error'+opcio).hide();
        $('#correct'+opcio).show();
    }
}

function validateDni() {
    var dni = this.value;
    var numero;
    var letr;
    var letra;
    var expresion_regular_dni;

    expresion_regular_dni = /^\d{8}[a-zA-Z]$/;

    if (expresion_regular_dni.test(dni) == true) {
        numero = dni.substr(0, dni.length - 1);
        letr = dni.substr(dni.length - 1, 1);
        numero = numero % 23;
        letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
        letra = letra.substring(numero, numero + 1);
        if (letra != letr.toUpperCase()) {

            $('#errorDni').show();
            $('#correctDni').hide();
        } else {
            $('#errorDni').hide();
            $('#correctDni').show();
        }
    } else {
        $('#correctDni').hide();
        $('#errorDni').show();
    }
}
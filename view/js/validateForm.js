/**
 * Created by ivan on 29/03/17.
 */
$(document).ready(function() {
    $('#dni').change(validateDni);

    //$('#nom').change(notEmpty("nom"));
   // $('#cognom1').change(notEmpty("cognom1"));
   // $('#cognom2').change(notEmpty("cognom2"));
   // $('#description').change(notEmpty("description"));

});
function notEmpty(opcio){
    var select = $('#'+opcio).val();
    if(select == null || select == ""){
        $('#error'+opcio).show();
        $('#correct'+opcio).hide();
    }else{
        $('#error'+opcio).hide();
        $('#correct'+opcio).show();
    }
}
function validateDni() {
    var dni  = $('#dni').val();
    var numero
    var letr
    var letra
    var expresion_regular_dni

    expresion_regular_dni = /^\d{8}[a-zA-Z]$/;

    if(expresion_regular_dni.test (dni) == true){
        numero = dni.substr(0,dni.length-1);
        letr = dni.substr(dni.length-1,1);
        numero = numero % 23;
        letra='TRWAGMYFPDXBNJZSQVHLCKET';
        letra=letra.substring(numero,numero+1);
        if (letra!=letr.toUpperCase()) {

            $('#errorDni').show();
            $('#correctDni').hide();
        }else{
            $('#errorDni').hide();
            $('#correctDni').show();
        }
    }else{
        $('#correctDni').hide();
        $('#errorDni').show();
    }
}
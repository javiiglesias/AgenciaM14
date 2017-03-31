/**
 * Created by ivan on 29/03/17.
 */

$(document).ready(function () {
    $('#dni').change(validateDni);
    $('#email').change(validacioEmail);
    $('#missatge').change(notEmpty);
    $('#nom').change(notEmpty);
    $('#cognom1').change(notEmpty);
    $('#cognom2').change(notEmpty);
    $('#descripcio').change(notEmpty);
    $('#foto').change(notEmpty);
    $('#sexe').change(notEmptyDesplegable);
});

function notEmptyDesplegable() {
    var select = this.selectedIndex;
    var div = $(this).parent();
    var span = $(this).next();
    if (select == 0 || select == "") {
        div.addClass("has-error").removeClass("has-success");
        span.addClass("glyphicon-remove").removeClass("glyphicon-ok");

    } else {
        div.addClass("has-success").removeClass("has-error");
        span.addClass("glyphicon-ok").removeClass("glyphicon-remove");
    }
}


function notEmpty() {
    var select = this.value;
    var div = $(this).parent();
    var span = $(this).next();
    var missatge = $("#missatge_error");
    if (select == null || select == "") {
        div.addClass("has-error").removeClass("has-success");
        span.addClass("glyphicon-remove").removeClass("glyphicon-ok");
        missatge.html('El camp ha de estar ple!');
    } else {
        div.addClass("has-success").removeClass("has-error");
        span.addClass("glyphicon-ok").removeClass("glyphicon-remove");
        missatge.hide();
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

function validacioEmail() {

    var email = this.value;
    var div = $(this).parent();
    var span = $(this).next();
    var missatge = $("#error_email");
    if (email.indexOf("@") == -1) {
        div.addClass("has-error").removeClass("has-success");
        span.addClass("glyphicon-remove").removeClass("glyphicon-ok");
        missatge.html('*Email no vàlid');
    } else {
        div.addClass("has-success").removeClass("has-error");
        span.addClass("glyphicon-ok").removeClass("glyphicon-remove");
        missatge.hide();
    }
}
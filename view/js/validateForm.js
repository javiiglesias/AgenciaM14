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
    $('.data').change(notEmpty);
    $('#foto').change(notEmpty);
    $('#sexe').change(notEmptyDesplegable);
        
   
});

function notEmptyDesplegable() {
    var select = this.selectedIndex;
    var div = $(this).parent();
    var span = $(this).next();
    var validacio = false;
    if (select == 0 || select == "") {
        div.addClass("has-error").removeClass("has-success");
        span.addClass("glyphicon-remove").removeClass("glyphicon-ok");
        validacio = false;
    } else {
        div.addClass("has-success").removeClass("has-error");
        span.addClass("glyphicon-ok").removeClass("glyphicon-remove");
        validacio = true;
    }
    return validacio;
}


function notEmpty() {
    var select = this.value;
    var div = $(this).parent();
    var span = $(this).next();
    var validacio = false;
    if (select == null || select == "") {
        div.addClass("has-error").removeClass("has-success");
        span.addClass("glyphicon-remove").removeClass("glyphicon-ok");
        validacio = false;
    } else {
        div.addClass("has-success").removeClass("has-error");
        span.addClass("glyphicon-ok").removeClass("glyphicon-remove");
        validacio = true;
    }
    return validacio;
}

function validateDni() {
    var dni = this.value;
    var div = $(this).parent();
    var span = $(this).next();
    var missatge = $("#error_dni");
    var numero;
    var letr;
    var letra;
    var expresion_regular_dni;
    var validacio = false;

    expresion_regular_dni = /^\d{8}[a-zA-Z]$/;

    if (expresion_regular_dni.test(dni) == true) {
        numero = dni.substr(0, dni.length - 1);
        letr = dni.substr(dni.length - 1, 1);
        numero = numero % 23;
        letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
        letra = letra.substring(numero, numero + 1);
        if (letra != letr.toUpperCase()) {

            div.addClass("has-error").removeClass("has-success");
            span.addClass("glyphicon-remove").removeClass("glyphicon-ok");
            missatge.show();
            missatge.html('*El dni no es valid');
            validacio = false;
        } else {
            div.addClass("has-success").removeClass("has-error");
            span.addClass("glyphicon-ok").removeClass("glyphicon-remove");
            missatge.hide();
            validacio = true;
        }
    } else {
        div.addClass("has-error").removeClass("has-success");
        span.addClass("glyphicon-remove").removeClass("glyphicon-ok");
        missatge.show();
        missatge.html('*El dni no es valid');
        validacio = false;
    }
    return validacio;
}

function validacioEmail() {

    var email = this.value;
    var div = $(this).parent();
    var span = $(this).next();
    var missatge = $("#error_email");
    var validacio = false;
    if (email.indexOf("@") == -1) {
        div.addClass("has-error").removeClass("has-success");
        span.addClass("glyphicon-remove").removeClass("glyphicon-ok");
        missatge.html('*Email no vàlid');
        validacio = false;
    } else {
        div.addClass("has-success").removeClass("has-error");
        span.addClass("glyphicon-ok").removeClass("glyphicon-remove");
        missatge.hide();
        validacio = true;
    }
    return validacio;
}
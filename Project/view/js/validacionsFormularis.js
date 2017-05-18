$(document).ready(function () {
    $('#nom').focusout(validarNoBuitIAlfaNum);
    $('#marca').focusout(validarNoBuitIAlfaNum);
    $('#imatge').change(validarImatge);
    $('#preu').focusout(validarAmb2Decimals);
    $('#referencia').focusout(validarNum4Digits);
    $('#model').focusout(validarNoBuitIAlfaNum);
    $('#descripcio').focusout(validarNoBuit);
    $('#capacitatMlInput').focusout(validarAmb2Decimals);
    $('#capacitatMgInput').focusout(validarAmb2Decimals);
    $('#unitatsInput').focusout(validarNum);
    $("#botoGuardar").click(validarFormulariAmbImatge);
});

var totOkFormulari = true;

function validarNoBuitIAlfa() {
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var val = $('#' + idCamp).val();
    var valor = val.trim();

    if (valor == '' || !Alfabetic(valor)) {
        $('#' + idCamp).focus();
        $('#error' + errorCamp).html("El camp ha de ser alfabètic i no pot estar buit.");
        totOkFormulari = false;
    } else {
        if (valor.length < 2) {
            $('#' + idCamp).focus();
            $('#error' + errorCamp).html("Ha de tenir un mínim de 2 lletres.");
            totOkFormulari = false;
        } else {
            $('#error' + errorCamp).html("");
            totOkFormulari = true;
        }
    }

}

function validarNoBuitIAlfaNum() {
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var val = $('#' + idCamp).val();
    var valor = val.trim();

    if (valor == '' || !AlfaNumeric(valor)) {
        $('#' + idCamp).focus();
        $('#error' + errorCamp).html("El camp ha de ser alfanumèric i no pot estar buit.");
        totOkFormulari = false;
    } else {
        if (valor.length < 2) {
            $('#' + idCamp).focus();
            $('#error' + errorCamp).html("Ha de tenir un mínim de 2 lletres.");
            totOkFormulari = false;
        } else {
            $('#error' + errorCamp).html("");
            totOkFormulari = true;
        }
    }

}


function validarNum() {
    var reg = /^[1-9]+$/;
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var val = $('#' + idCamp).val();
    var valor = val.trim();


    if (!valor.match(reg)) {
        $('#' + idCamp).focus();
        $('#error' + errorCamp).html("Han de ser nombres numèrics.");
        if (valor == 0) {
            $('#error' + errorCamp).html("Has de introduir mínim 1 unitat.");
        }
        totOkFormulari = false;
    } else {
        $('#error' + errorCamp).html("");
        totOkFormulari = true;
    }

}


function validarNum4Digits() {
    var reg = /^\d{4}$/;
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var val = $('#' + idCamp).val();
    var valor = val.trim();


    if (!valor.match(reg)) {
        $('#' + idCamp).focus();
        $('#error' + errorCamp).html("El camp ha de ser de 4 dígits numèrics.");
        totOkFormulari = false;
    } else {
        $('#error' + errorCamp).html("");
        totOkFormulari = true;
    }

}

function validarNoBuit() {
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var val = $('#' + idCamp).val();
    var valor = val.trim();

    if (valor == '') {
        $('#' + idCamp).focus();
        $('#error' + errorCamp).html("El camp no pot estar buit.");
        totOkFormulari = false;
    } else {
        $('#error' + errorCamp).html("");
        totOkFormulari = true;
    }

}

function validarAmb2Decimals() {

    var reg = /^\d+([\.|\,]{1}\d{1,2}){0,1}$/;
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var val = $('#' + idCamp).val();
    var valor = val.trim();

    if (!valor.match(reg)) {
        $('#' + idCamp).focus();
        $('#error' + errorCamp).html("El camp ha de ser un nombre positiu o amb 2 decimal.");
        totOkFormulari = false;
    } else {
        $('#error' + errorCamp).html("");
        totOkFormulari = true;
    }
}

function Alfabetic(elemValor) {
    var alphaExp = /^[a-zA-ZáéíóúÁÉÍÓÚÑñÇçàèìòùÀÈÌÒÙäëïöüÄËÏÖÜ\s]+$/;
    if (elemValor.match(alphaExp)) {
        return true;
    } else {
        return false;
    }
}

function AlfaNumeric(elemValor) {

    var alphaExp = /^[a-zA-Z0-9\,\.\s]+$/;
    if (elemValor.match(alphaExp)) {
        return true;
    } else {
        return false;
    }

}

function primeraLletraMayus(idCamp) {

    return idCamp.substr(0, 1).toUpperCase() + idCamp.substr(1);
}

function validarImatge() {
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var val = $('#' + idCamp).val();
    var valor = val.trim();

    var extensiones_permitidas = new Array(".png", ".jpg", ".jpeg");
    var mierror = "";

    if (!valor) {

        mierror = "No has seleccionat cap imatge encara.";
        $('#error' + errorCamp).html(mierror);
        totOkFormulari = false;
    } else {

        var extension = (valor.substring(valor.lastIndexOf("."))).toLowerCase();

        var permitida = false;

        for (var i = 0; i < extensiones_permitidas.length; i++) {
            if (extensiones_permitidas[i] == extension) {
                permitida = true;
                break;
            }
        }
        if (!permitida) {
            mierror = "Comprova la extensió dels fitxers a pujar. \nNomés és pot pujar els fitxers amb extensió: " + extensiones_permitidas.join();
            $('#error' + errorCamp).html(mierror);
            totOkFormulari = false;
        } else {
            $('#error' + errorCamp).html("Imatge correcte!");
            totOkFormulari = true;
        }
    }
}

function validarFormulariAmbImatge() {
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var valorAct = $("form").attr('action');
    var n = valorAct.search("modificar");

    if (n == -1) {

        if (!$('#imatge').val()) {
            var mierror = "No has seleccionat cap imatge encara.";
            $('#errorImatge').html(mierror);
            totOkFormulari = false;
        }
    }

    if (!$('input:radio[name=conservar]:checked').val()) {
        var mierror = "No has seleccionat cap opció.";
        $('#errorConservar').html(mierror);
        totOkFormulari = false;
    } else {
        $('#errorConservar').html("");
    }

    if (totOkFormulari == true) {
        return true;
    } else {
        $('#error' + errorCamp).html("Revisa els camps del formulari, falten camps per omplir!");
        return false;
    }

}

function validarFormulari() {
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);

    if (totOkFormulari == true) {
        return true;
    } else {
        $('#error' + errorCamp).html("Revisa els camps del formulari, falten camps per omplir!");
        return false;
    }
}
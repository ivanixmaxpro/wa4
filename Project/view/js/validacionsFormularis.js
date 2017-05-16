$(document).ready(function () {
    $('#nom').focusout(validarNoBuitIAlfa);
    $('#marca').focusout(validarNoBuitIAlfa);
    $('#imatge').focusout(validarImatge);
    $('#preu').focusout(validarAmb2Decimals);
    $('#referencia').focusout(validarNum4Digits);
    $('#model').focusout(validarNoBuitIAlfa);
    $('#descripcio').focusout(validarNoBuit);
    $('#capacitatMlInput').focusout(validarAmb2Decimals);
    $('#capacitatMgInput').focusout(validarAmb2Decimals);
    $('#unitatsInput').focusout(validarNum);
    //$("#botoGuardar").click(validarFormulari);
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
        if (valor.length < 5) {
            $('#error' + errorCamp).html("Ha de tenir un mínim de 5 lletres.");
            totOkFormulari = false;
        }
        $('#error' + errorCamp).html("");
        totOkFormulari = true;
    }

}


function validarNum() {
    var reg = /^\d+$/;
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var val = $('#' + idCamp).val();
    var valor = val.trim();


    if (!valor.match(reg)) {
        $('#' + idCamp).focus();
        $('#error' + errorCamp).html("Ha de ser nombres numèrics.");
        totOkFormulari = false;
    } else {
        $('#error' + errorCamp).html("");
        totOkFormulari = true;
    }

}


function validarNum4Digits() {
    var reg = /^\d{4}/;
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

    var reg = /^\d+([\.|\,]{1}\d{1,2})$/;
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var val = $('#' + idCamp).val();
    var valor = val.trim();

    if (!valor.match(reg)) {
        $('#' + idCamp).focus();
        $('#error' + errorCamp).html("El camp ha de ser un nombre amb 2 decimal.");
        totOkFormulari = false;
    } else {
        $('#errorPreu').html("");
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

function primeraLletraMayus(idCamp) {

    return idCamp.substr(0, 1).toUpperCase() + idCamp.substr(1);
}

function validarImatge() {
    var archivo = $('#imatge').val();
    var extensiones_permitidas = new Array(".png", ".jpg", ".jpeg");
    var mierror = "";
    if (!archivo) {

//        mierror = "No has seleccionat cap imatge encara.";
//        $('#errorImg').html(mierror);
        totOkFormulari = false;
    } else {

        var extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();

        var permitida = false;

        for (var i = 0; i < extensiones_permitidas.length; i++) {
            if (extensiones_permitidas[i] == extension) {
                permitida = true;
                break;
            }
        }
        if (!permitida) {
            mierror = "Comprova la extensió dels fitxers a pujar. \nNomés és pot pujar els fitxers amb extensió: " + extensiones_permitidas.join();
            $('#errorImg').html(mierror);
            totOkFormulari = false;
        } else {
            $('#errorImg').html("Imatge correcte!");
            totOkFormulari = true;
        }
    }
}
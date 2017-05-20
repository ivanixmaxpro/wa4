$(document).ready(function () {
    /* VALIDACIONS FORMULARI PRODUCTE */
    $('#nom').focusout(validarNoBuitIAlfaNum);
    $('#marca').focusout(validarNoBuitIAlfaNum);
    $('#preu').focusout(validarAmb2Decimals);
    $('#referencia').focusout(validarNum4Digits);
    $('#model').focusout(validarNoBuitIAlfaNum);
    $('#descripcio').focusout(validarNoBuit);
    $('#capacitatMlInput').focusout(validarAmb2Decimals);
    $('#capacitatMgInput').focusout(validarAmb2Decimals);
    $('#unitatsInput').focusout(validarNum);

    /* VALIDACIONS FORMULARI EMPLEAT */
    $('#nomempleat').focusout(validarNoBuitIAlfa);
    $('#cognom').focusout(validarNoBuitIAlfa);
    $("#dni").focusout(validarDNIEmpleat);
    $("#nss").focusout(validarNSSEmpleat);
    $('#localitat').focusout(validarNoBuitIAlfa);
    $('#nomina').focusout(validarNum);
    $('#contrasenya').focusout(validarContrasenya);
    $('#usuari').focusout(validarUsuariEmpleat);
    $('input[type=time]').change(validarHores);
    $("#botoguardarempleat").focusout(validarFormulari);

    /* CAMPS COMUNS A TOTS ELS FORMULARIS */
    $('#imatge').change(validarImatge);
    $("#botoGuardar").click(validarFormulariAmbImatgeProducte);
});

var horaInici;
var horaFinal;
var totOkFormulari = true;

function validarNoBuitIAlfa() {
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var val = $('#' + idCamp).val();
    var valor = val.trim();

    if (valor == '' || !Alfabetic(valor)) {
        $('#error' + errorCamp).html("El camp ha de ser alfabètic i no pot estar buit.");
        totOkFormulari = false;
    } else {
        if (valor.length < 2) {
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
        $('#error' + errorCamp).html("El camp ha de ser alfanumèric i no pot estar buit.");
        totOkFormulari = false;
    } else {
        if (valor.length < 2) {
            $('#error' + errorCamp).html("Ha de tenir un mínim de 2 lletres.");
            totOkFormulari = false;
        } else {
            $('#error' + errorCamp).html("");
            totOkFormulari = true;
        }
    }

}


function validarNum() {
    var reg = /^[0-9]+$/;
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var val = $('#' + idCamp).val();
    var valor = val.trim();


    if (!valor.match(reg)) {
        $('#error' + errorCamp).html("Han de ser nombres numèrics.");
        if (valor == 0) {
            $('#error' + errorCamp).html("Has de introduir mínim 1.");
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
        $('#error' + errorCamp).html("El camp ha de ser un nombre positiu o amb 2 decimal.");
        totOkFormulari = false;
    } else {
        $('#error' + errorCamp).html("");
        totOkFormulari = true;
    }
}

function nssValid(nss) {

    var re = /^\d{12}$/,
            valid = nss.match(re);

    var correcte = false;

    var x = parseInt(nss) % 97;

    if (valid) {
        var nums = nss.slice(0, 10);
        var numsControl = nss.slice(10, 12);

        if (nums.substr(2, 1) == 0) {
            nums = nums.substr(0, 2) + nums.substr(3, nums.length - 3);
        }

        var residu = parseInt(nums) % 97;

        if (residu < 10) {
            var residu = "0" + residu;
        }

        if (residu == numsControl) {
            correcte = true;
        }

    }

    return correcte;

}


function validarNSSEmpleat() {
    var idCamp = this.id;
    var nssValor = $('#' + idCamp).val();
    var errorCamp = primeraLletraMayus(idCamp);
    var nss = nssValor.replace(/\D+/g, "");

    if (nssValid(nss)) {
        $.ajax({
            type: "POST",
            url: "./controller/comprovarDNI_NSS_Usuari.php",
            data: {nss: nss},
            success: function (resposta) {
                $('#error' + errorCamp).html(resposta);
                totOkFormulari = false;
            }
        });
        $('#error' + errorCamp).html("");
    } else {
        if (nssValor == "") {
            $('#error' + errorCamp).html("El camp no pot estar buit.");
        } else {
            $('#error' + errorCamp).html("El númuero de la Seguretat Social no és correcte.");
        }
        totOkFormulari = false;
    }
}

function validarDNIEmpleat() {
    var idCamp = this.id;
    var dni = $('#' + idCamp).val();
    var errorCamp = primeraLletraMayus(idCamp);

    if (dni != "") {

        $.ajax({
            type: "POST",
            url: "./controller/comprovarDNI_NSS_Usuari.php",
            data: {dni: dni},
            success: function (resposta) {
                $('#error' + errorCamp).html(resposta);
                totOkFormulari = false;
            }
        });

    } else {
        $('#error' + errorCamp).html("No pot està buit.");
        totOkFormulari = false;
    }

}

function validarUsuariEmpleat() {
    var idCamp = this.id;
    var nomUsuari = $('#' + idCamp).val();
    var errorCamp = primeraLletraMayus(idCamp);

    if (nomUsuari != '' && Alfabetic(nomUsuari)) {
        $.ajax({
            type: "POST",
            url: "./controller/comprovarDNI_NSS_Usuari.php",
            data: {usuari: nomUsuari},
            success: function (resposta) {
                $('#error' + errorCamp).html(resposta);
                totOkFormulari = false;
            }
        });
        $('#error' + errorCamp).html("");
    } else {
        $('#error' + errorCamp).html("El camp ha de ser alfabètic.");
        totOkFormulari = false;
    }


}

function validarContrasenya() {
    var idCamp = this.id;
    var pass = $('#' + idCamp).val();
    var errorCamp = primeraLletraMayus(idCamp);
    var reg = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;

    if (!pass.match(reg)) {
        $('#error' + errorCamp).html("Contrasenya no vàlida. Ha de contenir:<ul><li>Mínim 6 caràcters.</li><li>Mínim 1 digit.</li><li>Mínim 1 majúscula.</li><li>Mínim 1 minúscula.</li></ul>.");
    } else {
        $('#error' + errorCamp).html("");
    }


}


function validarHores() {
    var idCamp = this.id;
    var arrInici = ["horaInici_0", "horaInici_1", "horaInici_2", "horaInici_3", "horaInici_4", "horaInici_5", "horaInici_6"];
    var arrInici = ["horaFinal_0", "horaFinal_1", "horaFinal_2", "horaFinal_3", "horaFinal_4", "horaFinal_5", "horaFinal_6"];
    var tipusHora = idCamp.search("horaInici_");
    var primeraIdHora = idCamp;
    var segonaIdHora;
    var alphaExp = /^\d{2}:\d{2}$/;

    if (tipusHora == -1) {
        horaFinal = $('#' + idCamp).val();
        segonaIdHora = idCamp;
        for (var i = 0; i < arrInici.length; i++) {
            if (arrInici[i] == segonaIdHora) {

            }
        }
    } else {
        horaInici = $('#' + idCamp).val();
        primeraIdHora = idCamp;
        for (var i = 0; i < arrInici.length; i++) {
            if (arrInici[i] == primeraIdHora) {

            }
        }
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


function validarFormulariAmbImatgeProducte() {
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
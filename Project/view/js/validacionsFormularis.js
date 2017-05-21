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
    $('#cognomempleat').focusout(validarNoBuitIAlfa);
    $("#dni").focusout(validarDNIEmpleat);
    $("#nss").focusout(validarNSSEmpleat);
    $('#localitat').focusout(validarNoBuitIAlfa);
    $('#nomina').focusout(validarNum);
    $('#contrasenya').focusout(validarContrasenya);
    $('#usuari').focusout(validarUsuariEmpleat);
    $("#botoguardarempleat").focusout(validarFormulari);

    /* VALIDACIONS FORMULARI CLIENT */
    $('#nomclient').focusout(validarNoBuitIAlfa);
    $('#codiclient').focusout(validarNoBuitIAlfa);
    $('#info').focusout(validarNoBuitIAlfa);
    $("#botoguardarclient").focusout(validarFormulari);

    /* VALIDACIONS FORMULARI PROVEIDOR */
    $('#nomproveidor').focusout(validarNoBuitIAlfa);
    $('#codiproveidor').focusout(validarNoBuitIAlfa);
    $("#botoguardarproveidor").focusout(validarFormulari);

    /* VALIDACIONS FORMULARI ALBARANS */
    $('#campClient').change(comprovarIndexSelect);
    $('#campProveidor').change(comprovarIndexSelect);
    $('#campCodi').focusout(validarNoBuit);
    $("#campObservacions").focusout(validarNoBuitIAlfa);
    $("#campLocalitat").focusout(validarNoBuitIAlfa);
    $("#botoCrearAlbaraCompra").click(validarFormulariAlbara);
    $("#botoCrearAlbaraVenta").click(validarFormulariAlbara);

    /* VALIDACIONS FORMULARI MISSATGE */
    $('#titol').focusout(validarNoBuit);
    $('#missatge').focusout(validarNoBuit);
    $("#botoGuardar").click(validarFormulari);

    /* VALIDACIONS ACTUALITZAR CONTRASENYES */
    $('#contra_actual').focusout(validarContrasenya);
    $('#contra_nova_1').focusout(validarContrasenya);
    $("#contra_nova_2").focusout(validarContrasenya);
    $("#botoGuardar").click(validarFormulariIgualContrasenya);

    /* CAMPS COMUNS A TOTS ELS FORMULARIS */
    $('#imatge').change(validarImatge);
    $("#botoGuardarProducte").click(validarFormulariAmbImatgeProducte);
    $("#botoGuardarEmpleat").click(validarFormulariAmbImatgeEmpleat);

});
var totOkFormulari = true;

function validarFormulariIgualContrasenya() {
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var contra1 = $('#contra_nova_1').val();
    var contra2 = $('#contra_nova_2').val();

    if (contra1 === contra2 && contra1 != "" && contra2 != "") {
        $('#error' + errorCamp).html("Contrasenyes coincidents.");
        totOkFormulari = true;
    } else {
        $('#error' + errorCamp).html("Les contrasenyes no són iguals.").addClass("msgIncorrecte");
        totOkFormulari = false;
    }

    if (totOkFormulari == true) {
        return true;
    } else {
        return false;
    }
}

function comprovarIndexSelect() {
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var posSelected = document.getElementById(idCamp).selectedIndex;

    if (posSelected == null || posSelected == 0) {
        $('#error' + errorCamp).html("Selecciona una opció correcte.").addClass("msgIncorrecte");
        totOkFormulari = false;
    } else {
        totOkFormulari = true;
    }
}

function validarNoBuitIAlfa() {
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var val = $('#' + idCamp).val();
    var valor = val.trim();

    if (valor == '' || !Alfabetic(valor)) {
        $('#error' + errorCamp).html("El camp ha de ser alfabètic i no pot estar buit.").addClass("msgIncorrecte");
        totOkFormulari = false;
    } else {
        if (valor.length < 2) {
            $('#error' + errorCamp).html("Ha de tenir un mínim de 2 lletres.").addClass("msgIncorrecte");
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
        $('#error' + errorCamp).html("El camp ha de ser alfanumèric i no pot estar buit.").addClass("msgIncorrecte");
        totOkFormulari = false;
    } else {
        if (valor.length < 2) {
            $('#error' + errorCamp).html("Ha de tenir un mínim de 2 lletres.").addClass("msgIncorrecte");
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
        $('#error' + errorCamp).html("Han de ser nombres numèrics.").addClass("msgIncorrecte");
        if (valor == 0) {
            $('#error' + errorCamp).html("Has de introduir mínim 1.").addClass("msgIncorrecte");
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
        $('#error' + errorCamp).html("El camp ha de ser de 4 dígits numèrics.").addClass("msgIncorrecte");
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
        $('#error' + errorCamp).html("El camp no pot estar buit.").addClass("msgIncorrecte");
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
        $('#error' + errorCamp).html("El camp ha de ser un nombre positiu o amb 2 decimal.").addClass("msgIncorrecte");
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
                $('#error' + errorCamp).html(resposta).addClass("msgIncorrecte");
                totOkFormulari = false;
            }
        });
        $('#error' + errorCamp).html("");
    } else {
        if (nssValor == "") {
            $('#error' + errorCamp).html("El camp no pot estar buit.").addClass("msgIncorrecte");
        } else {
            $('#error' + errorCamp).html("El númuero de la Seguretat Social no és correcte.").addClass("msgIncorrecte");
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
                if (resposta == "El DNI és vàlid") {
                    $('#error' + errorCamp).html(resposta).addClass("msgCorrecte");
                    totOkFormulari = true;
                } else {
                    $('#error' + errorCamp).html(resposta).addClass("msgIncorrecte");
                    totOkFormulari = false;
                }
            }
        });

    } else {
        $('#error' + errorCamp).html("No pot està buit.").addClass("msgIncorrecte");
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
                $('#error' + errorCamp).html(resposta).addClass("msgIncorrecte");
                totOkFormulari = false;
            }
        });
        if (nomUsuari.length < 2) {
            $('#error' + errorCamp).html("Ha de tenir un mínim de 2 lletres.").addClass("msgIncorrecte");
            totOkFormulari = false;
        }
    } else {
        if (nomUsuari == "") {
            $('#error' + errorCamp).html("El camp no pot està buit.").addClass("msgIncorrecte");
            totOkFormulari = false;
        } else {
            $('#error' + errorCamp).html("El camp ha de ser alfabètic.").addClass("msgIncorrecte");
            totOkFormulari = false;
        }
    }


}

function validarContrasenya() {
    var idCamp = this.id;
    var pass = $('#' + idCamp).val();
    var errorCamp = primeraLletraMayus(idCamp);
    var reg = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;

    if (!pass.match(reg) && pass != "") {
        $('#error' + errorCamp).html("Contrasenya no vàlida. Ha de contenir:<ul><li>Mínim 6 caràcters.</li><li>Mínim 1 digit.</li><li>Mínim 1 majúscula.</li><li>Mínim 1 minúscula.</li></ul>.").addClass("msgIncorrecte");
        totOkFormulari = false;
    } else {
        $('#error' + errorCamp).html("");
    }


}

function Alfabetic(elemValor) {
    var alphaExp = /^[a-zA-ZáéíóúÁÉÍÓÚÑñÇçàèìòùÀÈÌÒÙäëïöüÄËÏÖÜ-_\s]+$/;
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

        mierror = "No has seleccionat cap imatge encara.".addClass("msgIncorrecte");
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
            $('#error' + errorCamp).html(mierror).addClass("msgIncorrecte");
            totOkFormulari = false;
        } else {
            $('#error' + errorCamp).html("Imatge correcte!").addClass("msgCorrecte");
            totOkFormulari = true;
        }
    }
}


function validarFormulariAlbara() {
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var valorAct = $("form").attr('action');
    var n = valorAct.search("albaraCompra");

    if (n == -1) {

        var posSelectedClient = document.getElementById("campClient").selectedIndex;

        if (posSelectedClient == null || posSelectedClient == 0) {
            $('#errorCampClient').html("Selecciona una opció correcte.").addClass("msgIncorrecte");
            totOkFormulari = false;
        } else {
            $('#errorCampClient').html("");
            totOkFormulari = true;
        }
    } else {
        var posSelectedProveidor = document.getElementById("campProveidor").selectedIndex;

        if (posSelectedProveidor == null || posSelectedProveidor == 0) {
            $('#errorCampProveidor').html("Selecciona una opció correcte.").addClass("msgIncorrecte");
            totOkFormulari = false;
        } else {
            $('#errorCampProveidor').html("");
            totOkFormulari = true;
        }
    }

    var vlrCodi = $('#campCodi').val();
    var vlrObservacions = $('#campObservacions').val();
    var vlrLocalitat = $('#campLocalitat').val();

    if (vlrCodi == '' || !Alfabetic(vlrCodi)) {
        $('#errorCampCodi').html("El camp ha de ser alfabètic i no pot estar buit.").addClass("msgIncorrecte");
        totOkFormulari = false;
    } else {
        $('#errorCampCodi').html("");
        totOkFormulari = true;
    }

    if (vlrObservacions == '' || !Alfabetic(vlrObservacions)) {
        $('#errorCampObservacions').html("El camp ha de ser alfabètic i no pot estar buit.").addClass("msgIncorrecte");
        totOkFormulari = false;
    } else {
        $('#errorCampObservacions').html("");
        totOkFormulari = true;
    }

    if (vlrLocalitat == '' || !Alfabetic(vlrLocalitat)) {
        $('#errorCampLocalitat').html("El camp ha de ser alfabètic i no pot estar buit.").addClass("msgIncorrecte");
        totOkFormulari = false;
    } else {
        $('#errorCampLocalitat').html("");
        totOkFormulari = true;
    }


    if (totOkFormulari == true) {
        return true;
    } else {
        $('#error' + errorCamp).html("Revisa els camps del formulari, falten camps per omplir!").addClass("msgIncorrecte");
        return false;
    }

}


function validarFormulariAmbImatgeProducte() {
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var valorAct = $("form").attr('action');
    var n = valorAct.search("modificar");

    if (n == -1) {

        if (!$('#imatge').val()) {
            var mierror = "No has seleccionat cap imatge encara.".addClass("msgIncorrecte");
            $('#errorImatge').html(mierror);
            totOkFormulari = false;
        }
    }

    if (!$('input:radio[name=conservar]:checked').val()) {
        var mierror = "No has seleccionat cap opció.".addClass("msgIncorrecte");
        $('#errorConservar').html(mierror);
        totOkFormulari = false;
    } else {
        $('#errorConservar').html("");
    }

    if (totOkFormulari == true) {
        return true;
    } else {
        $('#error' + errorCamp).html("Revisa els camps del formulari, falten camps per omplir!").addClass("msgIncorrecte");
        return false;
    }

}

function validarFormulariAmbImatgeEmpleat() {
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);
    var valorAct = $("form").attr('action');
    var n = valorAct.search("modificar");

    if (n == -1) {

        if (!$('#imatge').val()) {
            var mierror = "No has seleccionat cap imatge encara.".addClass("msgIncorrecte");
            $('#errorImatge').html(mierror);
            totOkFormulari = false;
        }
    }

    if (totOkFormulari == true) {
        return true;
    } else {
        $('#error' + errorCamp).html("Revisa els camps del formulari, falten camps per omplir!").addClass("msgIncorrecte");
        return false;
    }

}

function validarFormulari() {
    var idCamp = this.id;
    var errorCamp = primeraLletraMayus(idCamp);

    if (totOkFormulari == true) {
        return true;
    } else {
        $('#error' + errorCamp).html("Revisa els camps del formulari, falten camps per omplir!").addClass("msgIncorrecte");
        return false;
    }
}
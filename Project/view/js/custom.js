/**
 * Created by ivan on 2/05/17.
 */

// Metodes per fitxar
$(document).ready(function (){


    var select = $('#selector>option:selected').val();
    switch(select) {
        case 'solid':
            $("#capacitatMg").show();
            $("#capacitatMg").prop('required',true);
            $("#unitats").show();
            $("#unitats").prop('required',true);
            $("#capacitatMl").hide();
            break;
        case 'altres':
            $("#capacitatMg").hide();
            $("#unitats").show();
            $("#unitats").prop('required',true);
            $("#capacitatMl").hide();
            break;
        case 'semi-solid':
            $("#capacitatMg").show();
            $("#capacitatMg").prop('required',true);
            $("#unitats").hide();
            $("#capacitatMl").hide();
            break;
        case 'liquid':
            $("#capacitatMl").show();
            $("#capacitatMl").prop('required',true);
            $("#unitats").hide();
            $("#capacitatMg").hide();
            break;
        case 'gas':
            $("#capacitatMl").show();
            $("#capacitatMl").prop('required',true);
            $("#capacitatMg").hide();
            $("#unitats").hide();
            break;
    }

    // seleccionar producte
    $("#selector").change(function(){
        var select = $('#selector>option:selected').val();
        switch(select) {
            case 'solid':
                $("#capacitatMg").show();
                $("#capacitatMg").prop('required', true);
                $("#unitats").show();
                $("#unitats").prop('required', true);
                $("#capacitatMl").hide();
                break;
            case 'altres':
                $("#capacitatMg").hide();
                $("#unitats").show();
                $("#unitats").prop('required', true);
                $("#capacitatMl").hide();
                break;
            case 'semi-solid':
                $("#capacitatMg").show();
                $("#capacitatMg").prop('required', true);
                $("#unitats").hide();
                $("#capacitatMl").hide();
                break;
            case 'liquid':
                $("#capacitatMl").show();
                $("#capacitatMl").prop('required', true);
                $("#unitats").hide();
                $("#capacitatMg").hide();
                break;
            case 'gas':
                $("#capacitatMl").show();
                $("#capacitatMl").prop('required', true);
                $("#capacitatMg").hide();
                $("#unitats").hide();
                break;
        }
    });

    //seleccionar producte
    // fitxar
    var fix = $('#fixat').html();

    if (fix == 0 || fix == null) {
        $("#fitxarOn").show();
        $("#fitxarOff").hide();
    } else {
        $("#fitxarOff").show();
        $("#fitxarOn").hide();
    }

    $("#fitxarOn").click(function(){
        $.ajax({ url: './controller/fitxarEmpleat_ctl.php',
            data: {action: 'fitxarOn'},
            type: 'post',
            success: function() {
                $.notify({
                    icon: "pe-7s-smile",
                    message: "Has fitxat correctament."
                });
                $('#fitxarOff').show();
                $('#fitxarOn').hide();
            }
        });
    });

    $("#fitxarOff").click(function(){
        $.ajax({ url: './controller/fitxarEmpleat_ctl.php',
            data: {action: 'fitxarOff'},
            type: 'post',
            success: function() {
                $.notify({
                    icon: "pe-7s-smile",
                    message: "Ja no estás fitxat."
                });
                $('#fitxarOn').show();
                $('#fitxarOff').hide();
            }
        });
    });
});

// fi metodes per fitxar
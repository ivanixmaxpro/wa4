/**
 * Created by ivan on 2/05/17.
 */

// Metodes per fitxar
$(document).ready(function (){
    var fix = $('#fixat').html();

    if (fix == 0 || fix == null) {
        $("#fitxarOn").show();
        $("#fitxarOff").hide();
    } else {
        $("#fitxarOff").show();
        $("#fitxarOn").hide();
    }


    $("#fitxarOn").click(function(){
        $.ajax({ url: 'http://localhost/wa4/Project/index.php?ctl=empleat&act=fitxar',
            data: {action: 'fitxarOn'},
            type: 'post',
            success: function(output) {
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
        $.ajax({ url: 'http://localhost/wa4/Project/index.php?ctl=empleat&act=fitxar',
            data: {action: 'fitxarOff'},
            type: 'post',
            success: function(output) {
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
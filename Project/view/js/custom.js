/**
 * Created by ivan on 2/05/17.
 */

// Metodes per fitxar
$(document).ready(function (){
    $("#fitxarOn").click(function(){
        $.ajax({ url: './controller/fitxarEmpleat_ctl.php',
            data: {action: 'fitxarOn'},
            type: 'post',
            success: function(output) {
                $.notify({
                    icon: "pe-7s-gift",
                    message: "Has fitxat correctament."
                });
            }
        });
    });

    $("#fitxarOff").click(function(){
        alert('yeah');
        $.ajax({ url: './controller/fitxarEmpleat_ctl.php',
            data: {action: 'fitxarOff'},
            type: 'post',
            success: function(output) {
                $.notify({
                    icon: "pe-7s-gift",
                    message: "Ja no estás fitxat."
                });
            }
        });
    });
});

// fi metodes per fitxar
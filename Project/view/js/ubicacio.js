var ubicacions = [];

$(document).ready(function () {
    var idUbi = $("#idUbicacio").val();
    $.getJSON("./controller/peticionsUbicacio.php?", {id_ubicacio: idUbi}, function (totalProductes) {
        var tendaJSON = totalProductes["tenda"];
        ubicacions.push(tendaJSON);
        $("#mostrarTenda").html(tendaJSON);
        var stockJSON = totalProductes["stock"];
        ubicacions.push(stockJSON);
        $("#mostrarStock").html(stockJSON);
    });
    $("#moureUbicacio").change(loadUbicacio);


});

function loadUbicacio() {
    $("#campQuantitatDeProductes").val(0);
    if ($("#moureUbicacio").val() == '-') {
        $("#campQuantitatDeProductes").attr("max", 0);
    }

    if ($("#moureUbicacio").val() == 'tenda') {
        $("#campQuantitatDeProductes").attr("max", ubicacions[1]);
    }

    if ($("#moureUbicacio").val() == 'stock') {
        $("#campQuantitatDeProductes").attr("max", ubicacions[0]);
    }

}





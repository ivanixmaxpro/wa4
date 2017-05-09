var arrProTotal = [];

$(document).ready(function () {

    $("#campProductes").change(loadUbicacio);
    $("#botoAfegirQuantProducte").click(emmagatzemarProducte);


});


function loadUbicacio() {
    var producte = $("#campProductes").val();

    var producteJSON = JSON.parse(producte);

    var idUbi = producteJSON.id_ubicacio;

    if (!isNaN(producteJSON.id_ubicacio)) {
        $.getJSON("./controller/peticionsUbicacio.php?", {id_ubicacio: idUbi}, gestionarTotalVenta);
    }
}

function emmagatzemarProducte() {
    var producte = $("#campProductes").val();

    var producteJSON = JSON.parse(producte);

    var idPro = producteJSON.id_producte;
    var preuBase = producteJSON.preuBase;
    var quantProducte = $("#campQuantitatDeProductes").val();

    var arrPro = [idPro, preuBase, quantProducte];

    if (quantProducte != 0) {

        arrProTotal.push(arrPro);

        generarTaula();
    }


}

function gestionarTotalVenta(totalProductes) {

    var totalJSON = JSON.parse(totalProductes["total"]);

    $("#campQuantitatDeProductes").attr("max", totalJSON);

}


function generarTaula() {

    $("#taulaProductes").find('tbody').empty();
    var count = 0;
    var str = "botoEliminarProducte";
    var aux = "";

    for (var prod in arrProTotal) {
        aux = str + count;
        var myButton = "<input type='button' id='" + aux + "' class='btn btn-danger' value='Eliminar' onClick='eliminarProducte('" + prod + "')'></input>";

        $("#taulaProductes").find('tbody')
                .append($('<tr>')
                        .append($('<td>')
                                .text(arrProTotal[prod][0])

                                )
                        .append($('<td>')
                                .text(arrProTotal[prod][2])

                                )
                        .append($('<td>')
                                .text(arrProTotal[prod][2] * arrProTotal[prod][1])

                                )
                        .append($('<td>')
                                .append(myButton)
                                )

                        );

        count++;
    }


}


function eliminarProducte(pos) {


    arrProTotal.splice(pos, 0);
    generarTaula();


}
var arrProTotal = [];

$(document).ready(function () {

    $("#campProductes").change(loadUbicacio);
    $("#botoAfegirQuantProducte").click(emmagatzemarProducte);


});


function loadUbicacio() {
    var producte = $("#campProductes").val();

    var producteJSON = JSON.parse(producte);

    var idUbi = producteJSON.id_ubicacio;

    $("#quantitatTenda").val(0);
    $("#quantitatStock").val(0);
    $("#idUbicacio").val(0);

    if (!isNaN(producteJSON.id_ubicacio)) {

        $.getJSON("./controller/peticionsUbicacio.php?", {id_ubicacio: idUbi}, gestionarTotalVenta);
    }
}

function emmagatzemarProducte() {
    var producte = $("#campProductes").val();

    var producteJSON = JSON.parse(producte);

    var idPro = producteJSON.id_producte;
    var preuBase = parseFloat(producteJSON.preuBase);
    var quantProducte = parseInt($("#campQuantitatDeProductes").val());
    var preuTotal = preuBase * quantProducte;
    var nomProducte = producteJSON.nom;


    //Calcul de quantitats restants al stock
    var quantProducteCalc = parseInt(quantProducte);
    var quantitatTenda = parseInt($("#quantitatTenda").val());
    var quantitatStock = parseInt($("#quantitatStock").val());
    var idUbicacio = $("#idUbicacio").val();

    if (quantProducte <= quantitatTenda) {
        quantitatTenda = quantitatTenda - quantProducte;
    } else {
        quantProducteCalc = quantProducteCalc - quantitatTenda;
        quantitatTenda = 0;
        quantitatStock = quantitatStock - quantProducteCalc;
    }

    var arrPro = [idPro, preuTotal, quantProducte, nomProducte, quantitatTenda, quantitatStock, idUbicacio];
    var repetit = false;

    for (var prod in arrProTotal) {
        if (arrProTotal[prod][0] == idPro) {
            repetit = true;
        }
    }

    //Check que el valro que vols treure no superi el maxim
    var checkquant = parseInt($("#campQuantitatDeProductes").attr("max"));


    if (quantProducte != 0 && repetit == false && checkquant >= quantProducte) {

        arrProTotal.push(arrPro);

        generarTaula();
    } else {
        alert("Error al introduir producte");
    }

    $("#campQuantitatDeProductes").val(0);


}

function gestionarTotalVenta(totalProductes) {

    var totalJSON = totalProductes["total"];
    var tendaJSON = totalProductes["tenda"];
    var stockJSON = totalProductes["stock"];
    var idubiJSON = totalProductes["id_ubicacio"];
    $("#campQuantitatDeProductes").attr("max", totalJSON);
    $("#quantitatTenda").val(tendaJSON);
    $("#quantitatStock").val(stockJSON);
    $("#idUbicacio").val(idubiJSON);

}


function generarTaula() {

    $("#taulaProductes").find('tbody').empty();
    var count = 0;
    var str = "botoEliminarProducte";
    var aux = "";

    for (var prod in arrProTotal) {
        aux = str + count;
        var myButton = "<button type='button' id='" + aux + "' class='btn btn-danger' value='Eliminar' onClick='eliminarProducte(" + prod + ")'></button>";

        $("#taulaProductes").find('tbody')
                .append($('<tr>')
                        .append($('<td>')
                                .text(arrProTotal[prod][3])

                                )
                        .append($('<td>')
                                .text(arrProTotal[prod][2])

                                )
                        .append($('<td>')
                                .text(arrProTotal[prod][1])

                                )
                        .append($('<td>')
                                .append(myButton)
                                )

                        );

        count++;
    }

    pasarArray();
    canviarPreu();
}


function eliminarProducte(pos) {


    arrProTotal.splice(pos, 1);
    generarTaula();


}

function pasarArray() {

    var str = "";
    var arrFinal = [];

    for (var prod in arrProTotal) {
        str = arrProTotal[prod][0] + "-" + arrProTotal[prod][1] + "-" + arrProTotal[prod][2] + "-" + arrProTotal[prod][4] + "-" + arrProTotal[prod][5] + "-" + arrProTotal[prod][6];
        arrFinal.push(str);
    }

    $("#passarArray").val(arrFinal.toString());

}

function canviarPreu() {
    var preuTotal = 0;

    for (var prod in arrProTotal) {
        preuTotal += arrProTotal[prod][1];
    }

    $("#campPreu").val(preuTotal);
}
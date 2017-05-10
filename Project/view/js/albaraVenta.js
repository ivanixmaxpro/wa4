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
    var preuTotal = preuBase * quantProducte;

    var arrPro = [idPro, preuTotal, quantProducte];
    var repetit = false;

    for (var prod in arrProTotal) {
        if (arrProTotal[prod][0] == idPro) {
            repetit = true;
        }
    }



    if (quantProducte != 0 && repetit == false) {

        arrProTotal.push(arrPro);

        generarTaula();
    } else {
        alert("No es pot introduir dues vegades el mateix producte");
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
        var myButton = "<button type='button' id='" + aux + "' class='btn btn-danger' value='Eliminar' onClick='eliminarProducte(" + prod + ")'></button>";

        $("#taulaProductes").find('tbody')
                .append($('<tr>')
                        .append($('<td>')
                                .text(arrProTotal[prod][0])

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
}


function eliminarProducte(pos) {


    arrProTotal.splice(pos, 1);
    generarTaula();


}

function pasarArray() {

    var str = "";
    var arrFinal = [];

    for (var prod in arrProTotal) {
        str = arrProTotal[prod][0]+"-"+arrProTotal[prod][1]+"-"+arrProTotal[prod][2];
        arrFinal.push(str);
    }

    $("#passarArray").val(arrFinal.toString());

}
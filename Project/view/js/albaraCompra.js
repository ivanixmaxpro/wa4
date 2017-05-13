var arrProTotal = [];

$(document).ready(function () {

    
    $("#botoAfegirQuantProducte").click(emmagatzemarProducte);


});

function emmagatzemarProducte() {
    var producte = $("#campProductes").val();

    var producteJSON = JSON.parse(producte);

    var idPro = producteJSON.id_producte;
    var preuBase = parseFloat(producteJSON.preuBase);
    var quantProducte = parseInt($("#campQuantitatDeProductes").val());
    var preuTotal = preuBase * quantProducte;
    var nomProducte = producteJSON.nom;
    var idUbicacio = producteJSON.id_ubicacio;

    var arrPro = [idPro, preuTotal, quantProducte, nomProducte, idUbicacio];
    var repetit = false;

    for (var prod in arrProTotal) {
        if (arrProTotal[prod][0] == idPro) {
            repetit = true;
        }
    }



    if (quantProducte != 0 && repetit == false ) {

        arrProTotal.push(arrPro);

        generarTaula();
    } else {
        alert("Error al introduir producte");
    }
    
    $("#campQuantitatDeProductes").val(0);


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
        str = arrProTotal[prod][0] + "-" + arrProTotal[prod][1] + "-" + arrProTotal[prod][2] + "-" + arrProTotal[prod][4];
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
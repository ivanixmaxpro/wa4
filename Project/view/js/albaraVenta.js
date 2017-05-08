$(document).ready(function () {
//    $.getJSON("cargaProvinciasJSON.php", muestraProvincias);
    $("#campProductes").change(loadUbicacio);
    //document.getElementById("campProductes").onchange = loadUbicacio();
});

//function muestraProvincias(provincias) {
//    var lista = $("#provincia")[0];
//    lista.options[0] = new Option("- selecciona -");
//    var i = 1;
//    for (var codigo in provincias) {
//        lista.options[i] = new Option(provincias[codigo], codigo);
//        i++;
//    }
//}

function loadUbicacio() {
    var producte = $("#campProductes").val(); // option:selected.value;

    var producteJSON = JSON.parse(producte);
    //var producte = document.getElementById("campProductes").value;

    var idUbi = producteJSON.id_ubicacio;

    if (!isNaN(producteJSON.id_ubicacio)) {
        $.getJSON("./controller/peticionsUbicacio.php?", {id_ubicacio: idUbi}, gestionarTotalVenta);
    }
}

function gestionarTotalVenta(totalProductes) {
    
    var totalJSON = JSON.parse(totalProductes["total"]);

    $("#campQuantitatDeProductes").attr("max", totalJSON);

}


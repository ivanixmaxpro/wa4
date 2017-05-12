/**
 * metodes per filtrar una llista per nom
 */
function doSearch(){

    $("#nom").keyup(function () {
        alert(rula);
        var search = $('#nom').val().toLowerCase();
        $.getJSON("cercarClientsJSON.php", function (output) {
            var lista = $("#lista");
             for (var client in output) {
                 lista += "<tr><td>"+output["id_client"]+"</td><td>"+output["nom"]+"</td><td>"+output["codi"]+"</td><td>"+output["informacio"]+"</td></tr>";
             }
      
        });
    });
 }
<form role="form" method="post" action="?ctl=albaraVenta&act=afegir">
    <div class="form-group">
        <label for="campClient">Client</label>
        <input type="text" class="" id="campClient">
    </div>
    <div class="form-group">
        <label for="campEmpresa">Empresa</label>
        <input type="text" class="" id="campEmpresa">
    </div>
    <div class="form-group">
        <label for="campCodi">Codi</label>
        <input type="text" class="" id="campCodi">
    </div>
    <div class="form-group">
        <label for="campObservacions">Observacions</label>
        <input type="text" class="" id="campObservacions">
    </div>
    <div class="form-group">
        <label for="campPreu">Preu</label>
        <input type="text" class="" id="campPreu">
    </div>
    <div class="form-group">
        <label for="campData">Data</label>
        <input type="text" class="" id="campData">
    </div>
    <div class="form-group">
        <label for="campLocalitat">Localitat</label>
        <input type="text" class="" id="campLocalitat">
    </div>   

    <br/><br/><br/><br/>

    <div class="form-group">
        <label for="campProductes">Productes</label>
        <?php
        mostrarSelectProductes($productes);
        ?>      
        <label for="campQuantitatDeProductes">Quantitat que vol afegir a l'albara?</label>
        <input type="number" min="0" max="99" step="1" value="0" class="" id="campQuantitatDeProductes">
        <input type="submit" id="botoAfegirQuantProducte" name="submit" value="Afegir" class="btn btn-danger"></input>
    </div>



    <input type="submit" id="botoCrearAlbaraVenta" name="submit" value="Crear" class="btn btn-danger"></input>
</form>

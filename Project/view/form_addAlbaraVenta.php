<form role="form" method="post" action="?ctl=albaraVenta&act=afegir" >
    <div class="form-group">
        <label for="campClient">Client</label>
        <br/>
        <?php
        mostrarSelectClients($clients);
        ?>
        <span id="errorCampClient"></span>
    </div>
    <div class="form-group">
        <label for="campEmpresa">Empresa</label>
        <br/>
        <input type="text" class="" id="campEmpresa" name="campEmpresa" value="<?php echo $empresa->getId_empresa(); ?>" readonly>
    </div>
    <div class="form-group">
        <label for="campCodi">Codi</label>
        <br/>
        <input type="text" class="" id="campCodi" name="campCodi">
        <span id="errorCampCodi"></span>
    </div>
    <div class="form-group">
        <label for="campObservacions">Observacions</label>
        <br/>
        <input type="text" class="" id="campObservacions" name="campObservacions">
        <span id="errorCampObservacions"></span>
    </div>
    <div class="form-group">
        <label for="campData">Data</label>
        <br/>
        <input type="text" value="<?php echo $data ?>" class="" id="campData" readonly="on" name="campData">
    </div>
    <div class="form-group">
        <label for="campLocalitat">Localitat</label>
        <br/>
        <input type="text" class="" id="campLocalitat" name="campLocalitat">
        <span id="errorCampLocalitat"></span>
    </div>
    <br/>
    <div class="form-group">
        <label for="campProductes">Productes</label>
        <?php
        mostrarSelectProductes($productes);
        ?>      
        <label for="campQuantitatDeProductes">Quantitat que vol afegir a l'albara?</label>
        <input type="number" min="0" max="99" step="1" value="0" class="" id="campQuantitatDeProductes">
        <button type="button" id="botoAfegirQuantProducte" name="submit" value="Afegir" class="btn btn-primary">Afegir</button>
        <input name="idUbicacio" id="idUbicacio" type="hidden"/>
        <input name="quantitatTenda" id="quantitatTenda" type="hidden"/>
        <input name="quantitatStock" id="quantitatStock" type="hidden"/>
    </div>

    <table id="taulaProductes" class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Quantitat</th>
                <th>Preu total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <div class="form-group">
        <label for="campPreu">Preu</label>
        <input type="text" class="" id="campPreu" name="campPreu" value="0" readonly>
    </div>
    <input name="passarArrProductes" id="passarArray" type="hidden"></input>
    <span id="errorBotoCrearAlbaraVenta"></span>
    <input type="submit" id="botoCrearAlbaraVenta" name="submit" value="Crear" class="btn btn-primary"></input>
</form>



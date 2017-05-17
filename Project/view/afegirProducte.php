<form role="form" action="?ctl=producte&act=afegir" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" id="nom"
                       placeholder="Nom del producte" name="nom" required >
            </div>
            <span id="errorNom"></span>
            <div class="form-group">
                <label >Marca</label>
                <input type="text" name="marca" class="form-control" id="marca"
                       placeholder="Marca del producte" required >
            </div>
            <span id="errorMarca"></span>
            <div class="form-group">
                <label>Preu</label>
                <input type="text" name="preu" class="form-control" id="preu"
                       placeholder="Preu del producte" required >
            </div>
            <span id="errorPreu"></span>
            <div class="form-group">
                <label>Referéncia</label>
                <input type="text" name="referencia" class="form-control" id="referencia"
                       placeholder="Referencia del producte" required >
            </div>
            <span id="errorReferencia"></span>
            <div class="form-group">
                <label>Model</label>
                <input type="text" name="model" class="form-control" id="model"
                       placeholder="Model del producte" required >
            </div>
            <span id="errorModel"></span>
            <label>Tipus de producte:</label>
            <select id="selector" name="selector">
                <option  value="solid">Sòlid</option>
                <option  value="semi-solid" >Semisòlid</option>
                <option  value="liquid" >Líquid</option>
                <option  value="gas" >Gas</option>
                <option  value="altres" >Altres</option>
            </select>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Descripció</label>
                <textarea  name="descripcio" class="form-control" id="descripcio" style="resize:none; height:150px;"
                           placeholder="Descripció del producte" required ></textarea>
            </div>
            <span id="errorDescripcio"></span>
            <div class="form-group">
                <label>Conservar en fred? </label>
                <br/>
                <input type="radio" id="conservar" name="conservar" value="1" > Si<br>
                <input type="radio" id="conservar" name="conservar" value="0" >No<br>
            </div>
            <span id="errorConservar"></span>
            <div class="form-group">
                <label>Pujar imatge</label>
                <input type="file" name="imatge" class="btn btn-primary" id="imatge" required>
                <p class="help-block">
                    Només es permet el tipus d'imatge: .jpg .png .jpeg
                </p>
            </div>
            <span id="errorImatge"></span>
            <div class="form-group" id="capacitatMl" hidden>
                <label>Capacitat Ml</label>
                <input type="text" name="capacitatMlInput" class="form-control"
                       placeholder="Capacitat en Ml" id="capacitatMlInput">
            </div>
            <span id="errorCapacitatMlInput"></span>
            <div class="form-group" id="capacitatMg" >
                <label>Capacitat Mg</label>
                <input type="text" name="capacitatMgInput" class="form-control"
                       placeholder="Capacitat en Mg" id="capacitatMgInput">
            </div>
            <span id="errorCapacitatMgInput"></span>
            <div class="form-group" id="unitats">
                <label>Unitats</label>
                <input type="text" name="unitatsInput" class="form-control"
                       placeholder="Número d'unitats" id="unitatsInput">
            </div>
            <span id="errorUnitatsInput"></span>
        </div>
    </div>
    <span id="errorBotoGuardar"></span>
    <button name="afegir" id="botoGuardar" type="submit" class="btn btn-primary">Afegir</button>
    <a name="tornar" class="btn btn-primary" href="?ctl=producte&act=llista">Tornar</a>
</form>
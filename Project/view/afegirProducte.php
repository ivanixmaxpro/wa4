<form role="form" action="?ctl=producte&act=afegir" method="POST">
    <div class="row">
        <div class="col-md-6">
            <label>Tipus de producte:</label>
            <select id="selector" name="selector">
                <option  value="solid">Solid</option>
                <option  value="semi-solid" >Semi-solid</option>
                <option  value="liquid" >Líquid</option>
                <option  value="gas" >Gas</option>
                <option  value="altres" >Altres</option>
            </select>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" id="nom"
                       placeholder="Nom del producte" name="nom" required >
            </div>
            <div class="form-group">
                <label >Marca</label>
                <input type="text" name="marca" class="form-control" id="marca"
                       placeholder="Marca del producte" required >
            </div>
            <div class="form-group">
                <label>Preu</label>
                <input type="text" name="preu" class="form-control" id="preu"
                       placeholder="Preu del producte" required >
            </div>
            <div class="form-group">
                <label>Referéncia</label>
                <input type="text" name="referencia" class="form-control" id="referencia"
                       placeholder="Referencia del producte" required >
            </div>
            <div class="form-group">
                <label>Model</label>
                <input type="text" name="model" class="form-control" id="model"
                       placeholder="Model del producte" required >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Descripció</label>
                <textarea  name="descripcio" class="form-control" id="descripcio" style="resize:none; height:150px;"
                           placeholder="Descripció del producte" required ></textarea>
            </div>
            <div class="form-group">
                <label>Conservar en fred? </label>
                <br/>
                <input type="radio" id="conservar" name="conservar" value="1" > Si<br>
                <input type="radio" id="conservar" name="conservar" value="0" >No<br>
            </div>
            <div class="form-group">
                <label>Imatge</label>
                <input type="text" name="imagte" class="form-control" id="imagte"
                       placeholder="Imatge del producte" required >
            </div>
            <div class="form-group" id="capacitatMl" hidden>
                <label>Capacitat Ml</label>
                <input type="text" name="capacitatMlInput" class="form-control"
                       placeholder="Capacitat en Ml" >
            </div>
            <div class="form-group" id="capacitatMg" >
                <label>Capacitat Mg</label>
                <input type="text" name="capacitatMgInput" class="form-control"
                       placeholder="Capacitat en Mg" >
            </div>
            <div class="form-group" id="unitats">
                <label>Unitats</label>
                <input type="text" name="unitatsInput" class="form-control"
                       placeholder="Número d'unitats" >
            </div>
        </div>
    </div>
    <button name="afegir" type="submit" class="btn btn-default">Afegir</button>
    <a name="tornar" class="btn btn-default" href="?ctl=producte&act=llista">Tornar</a>
</form>
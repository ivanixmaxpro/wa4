<div class="card">
    <div class="header">
        <h4 class="title">Llista productes</h4>

    </div>
    <form action="?ctl=proveidor&act=afegir" method="post">
        <div class="form-group">
            <label>Nom: </label>
            <input id="nomproveidor" type="text" id="nom" name="nom" class="form-control"  required >
            <img class="icon" src="view/images/confirm.png" hidden id="correctcognom1"/>
            <img class="icon" src="view/images/error.png" hidden id="errorcognom1"/>
            <span id="errorNomproveidor"></span>
        </div>
        <div class="form-group">
            <label>Codi:</label>
            <input id="codiproveidor" type="text" id="codi" name="codi" class="form-control"  required>
            <img class="icon" src="view/images/confirm.png" hidden id="correctcognom2"/>
            <img class="icon" src="view/images/error.png" hidden id="errorcognom2"/>
            <span id="errorCodiproveidor"></span>
        </div>
        <button name="Submit" id="botoguardarproveidor" class="btn btn-primary">Afegir</button>
        <a name="tornar" class="btn btn-primary" href="?ctl=proveidor&act=llista">Tornar</a>
        <span id="errorBotoGuardarProveidor"></span>
    </form> 

</div>
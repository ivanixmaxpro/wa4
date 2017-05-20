<div class="card">
    <div class="header">
        <h4 class="title">Llista productes</h4>

    </div>
    <form action="?ctl=proveidor&act=modificar&id=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <label>Nom: </label>
            <input type="text" id="nomproveidor" name="nom" class="form-control" value="<?php echo $proveidor->getNom() ?>" required >
            <img class="icon" src="view/images/confirm.png" hidden id="correctcognom1"/>
            <img class="icon" src="view/images/error.png" hidden id="errorcognom1"/>
            <span id="errorNomproveidor"></span>
        </div>
        <div class="form-group">
            <label>Codi:</label>
            <input type="text" id="codiproveidor" name="codi" class="form-control" value="<?php echo $proveidor->getCodi() ?>" required>
            <img class="icon" src="view/images/confirm.png" hidden id="correctcognom2"/>
            <img class="icon" src="view/images/error.png" hidden id="errorcognom2"/>
            <span id="errorCodiproveidor"></span>
        </div>
        <span id="errorBotoGuardarProveidor"></span>
        <button name="Submit" id="botoguardarproveidor" class="btn btn-primary">Modificar</button>
        <a name="tornar" class="btn btn-primary" href="?ctl=proveidor&act=llista">Tornar</a>
        <span id="errorBotoGuardar"></span>

    </form> 

</div>
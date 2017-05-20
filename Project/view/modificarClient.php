<div class="card">
    <div class="header">
        <h4 class="title">Modificar Client</h4>

    </div>
    <form action="?ctl=client&act=modificar&id=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <label>Nom: </label>
            <input type="text" id="nomclient" name="nom" class="form-control" value="<?php echo $client->getNom() ?>" required >
            <img class="icon" src="view/images/confirm.png" hidden id="correctcognom1"/>
            <img class="icon" src="view/images/error.png" hidden id="errorcognom1"/>
            <span id="errorNomclient"></span>
        </div>
        <div class="form-group">
            <label>Codi:</label>
            <input type="text" id="codiclient" name="codi" class="form-control" value="<?php echo $client->getCodi() ?>" required>
            <img class="icon" src="view/images/confirm.png" hidden id="correctcognom2"/>
            <img class="icon" src="view/images/error.png" hidden id="errorcognom2"/>
            <span id="errorCodi"></span>
        </div>

        <div class="form-group">
            <label for="informacio">Informacio:</label>
            <textarea id="info" class="form-control" rows="5" id="informacio" name="informacio"><?php echo $client->getInformacio() ?></textarea>
            <span id="errorInfo"></span>
        </div>
        <span id="errorBotoGuardarClient"></span>
        <button name="Submit" id="botoguardarclient" class="btn btn-primary">Modificar</button>
        <a name="tornar" class="btn btn-primary" href="?ctl=client&act=llista">Tornar</a>

    </form> 

</div>
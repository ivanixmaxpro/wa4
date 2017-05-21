<div class="card">
    <div class="container">
    <div class="header">
        <h4 class="title">Afegir Client</h4>

    </div>
        
    <form action="?ctl=client&act=afegir" method="post">
        <div class="form-group caixa">
            <label>Nom: </label>
            <input id="nomclient"type="text" id="nom" name="nom" class="form-control"  required >
            <img class="icon" src="view/images/confirm.png" hidden id="correctcognom1"/>
            <img class="icon" src="view/images/error.png" hidden id="errorcognom1"/>
            <span id="errorNomclient"></span>
        
            <label>Codi:</label>
            <input id="codiclient" type="text" id="codi" name="codi" class="form-control"  required>
            <img class="icon" src="view/images/confirm.png" hidden id="correctcognom2"/>
            <img class="icon" src="view/images/error.png" hidden id="errorcognom2"/>
            <span id="errorCodi"></span>
       
            <label for="informacio">Informacio:</label>
            <textarea id="info" class="form-control" rows="5" id="informacio" name="informacio"></textarea>
            <span id="errorInfo"></span>
        </div>
        <span id="errorBotoguardarclient"></span>
        <button name="Submit" style="margin-bottom: 20px" id="botoguardarclient" class="btn btn-primary">Afegir</button>
        <a name="tornar" class="btn btn-primary" style="margin-bottom: 20px" href="?ctl=client&act=llista">Tornar</a>

    </form> 
    </div>
</div>
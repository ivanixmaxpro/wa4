<div class="card">
    <div class="header">
        <h4 class="title">Llista productes</h4>

    </div>
    <form action="?ctl=proveidor&act=afegir" method="post">
        <div class="form-group">
            <label>Nom: </label>
            <input type="text" id="nom" name="nom" class="form-control"  required >
            <img class="icon" src="view/images/confirm.png" hidden id="correctcognom1"/>
            <img class="icon" src="view/images/error.png" hidden id="errorcognom1"/>
        </div>
        <div class="form-group">
            <label>Codi:</label>
            <input type="text" id="codi" name="codi" class="form-control"  required>
            <img class="icon" src="view/images/confirm.png" hidden id="correctcognom2"/>
            <img class="icon" src="view/images/error.png" hidden id="errorcognom2"/>
        </div>

        <button name="Submit" class="btn btn-primary">Afegir</button>
        
    </form> 

</div>
<div class="card">

    <div class="container">



        <form action="?ctl=proveidor&act=afegir" method="post">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"/>
            </div>
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"/>
            </div>
        </form> 
    </div>
</div>
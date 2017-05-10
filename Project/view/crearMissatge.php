<div class="card">
    <div class="header">
        <h4 class="title">Crear Missatge</h4>

    </div>
    <form action="?ctl=missatge&act=crear" method="post">
        <div class="form-group">
            <label>titol: </label>
            <input type="text" id="titol" name="titol" class="form-control"  required >
            <img class="icon" src="view/images/confirm.png" hidden id="correctcognom1"/>
            <img class="icon" src="view/images/error.png" hidden id="errorcognom1"/>
        </div>
        <div class="form-group">
            <label for="informacio">Missatge:</label>
            <textarea class="form-control" rows="5" id="informacio" name="informacio"></textarea>
        </div>
        <button name="Submit" class="btn btn-primary">Enviar</button>

    </form> 

</div>
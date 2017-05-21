<div class="card">
    <div class="header">
        <h4 class="title">Crear Missatge</h4>
    </div>
    <form action="?ctl=missatge&act=crear" method="post">
        <div class="form-group caixa">
            <label>titol: </label>
            <input type="text" id="titol" name="titol" class="form-control"  required >
            <img class="icon" src="view/images/confirm.png" hidden id="correctcognom1"/>
            <img class="icon" src="view/images/error.png" hidden id="errorcognom1"/>
            <span id="errorTitol"></span>

            <label for="informacio">Missatge:</label>
            <textarea id="missatge" class="form-control" rows="5" id="informacio" name="informacio"></textarea>
            <span id="errorMissatge"></span>

            <span id="errorBotoGuardar"></span>
            <button name="Submit" id="botoGuardar"class="btn btn-primary" style="margin-top: 5px">Enviar</button>
        </div>
    </form> 
</div>
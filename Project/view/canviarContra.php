<form role="form" action="?ctl=login&act=canviar" method="POST">
    <div class="form-group">
        <label for="ejemplo_email_1">Contrasenya actual</label>
        <input type="password" class="form-control" id="contra_actual"
               placeholder="Contrasenya antiga" name="antiga" required>
        <span id="errorContra_actual"></span>
    </div>
    <div class="form-group">
        <label for="ejemplo_password_1">Nova contrasenya</label>
        <input type="password" name="nova1" class="form-control" id="contra_nova_1"
               placeholder="Nova contrasenya" required>
        <span id="errorContra_nova_1"></span>
    </div>
    <div class="form-group">
        <label for="ejemplo_password_1">Torna introduir la nova contrasenya</label>
        <input type="password" name="nova2" class="form-control" id="contra_nova_2"
               placeholder="Nova contrasenya" required>
        <span id="errorContra_nova_2"></span>
    </div>
    <span id="errorBotoGuardar"></span>
    <input name="send" id="botoGuardar" type="submit" class="btn btn-primary"></input>
</form>
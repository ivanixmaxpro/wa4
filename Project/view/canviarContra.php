<form role="form" action="?ctl=login&act=canviar" method="POST">
  <div class="form-group">
    <label for="ejemplo_email_1">Contrasenya actual</label>
    <input type="password" class="form-control" id="ejemplo_email_1"
           placeholder="Contrasenya antiga" name="antiga" required>
  </div>
  <div class="form-group">
    <label for="ejemplo_password_1">Nova contrasenya</label>
    <input type="password" name="nova1" class="form-control" id="ejemplo_password_1"
           placeholder="Nova contrasenya" required>
  </div>
    <div class="form-group">
        <label for="ejemplo_password_1">Torna introduir la nova contrasenya</label>
        <input type="password" name="nova2" class="form-control" id="ejemplo_password_1"
               placeholder="Nova contrasenya" required>
    </div>
  <input name="send" type="submit" class="btn btn-primary"></input>
</form>
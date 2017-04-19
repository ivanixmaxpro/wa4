<?php
$guardarUsuari = "";
if (isset($_COOKIE['usuari'])) {
    $guardarUsuari = $_COOKIE['usuari'];
}
?>
<html>
    <body class="body-login">
        <div class="container-fluid">
            <div class="container">
                <div class="col-xs-8 col-sm-8  col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-4">
                    <img src="view/images/logo.png" class="img-responsive img-Logologin">
                </div>
                <div class="col-xs-11 col-md-4 col-xs-offset-1 col-md-offset-4 ">                    
                    <div class="container-login">                        
                        <form action="?ctl=login" method="POST">                             
                            <h1 class="text-center">Iniciar Sessió</h1>
                            <div class="form-group">
                                <label><strong>Usuari:</strong></label>
                                <input type="text" name="usuari" value="<?php echo $guardarUsuari; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label><strong>Contrasenya:</strong></label>
                                <input type="password" name="pass" class="form-control">
                            </div>
                            <p>Recordar usuari <input type="checkbox" name="recordarUsuari"><p>
                            <div class="col-xs-10 col-md-9 col-md-offset-3 col-xs-offset-2">
                                <button name="Submit" class="btn btn-warning"> Entrar <image class="btn-icon" src="view/images/login.ico"/> </button>
                            </div>
                        <form>
                    </div>                    
                </div>
            </div>


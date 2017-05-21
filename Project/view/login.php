<?php
$guardarUsuari = "";
if (isset($_COOKIE['usuari'])) {
    $guardarUsuari = $_COOKIE['usuari'];
}
?>
<body class="body-login background">
    <div class="container-fluid" >
        <div class="container">
            
            <div class="col-xs-11 col-md-4 col-xs-offset-1 col-md-offset-4 ">
                <div class="container-login">
                    
                   
                    
                    <form action="?ctl=login&act=login" method="POST">
                        <img src="view/images/logo.png" class="img-responsive img-Logologin center-block" >
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
                        <div class="col-xs-10 col-md-9 ">
                            <button name="Submit" class="btn btn-primary"> Entrar </button>
                        </div>
                        <form>
                            </div>
                            </div>
                            </div>


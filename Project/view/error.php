<div class="container-fluid">
    <div class="container" >
        <div class="col-xs-12 col-md-12 container-error">
            <?php if (strpos($missatge, "DNI")) { ?>
                <div class="alert alert-dismissible alert-danger text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $missatge; ?>  <img src="view/images/error.png" class="icon"</h3>
                    <p><a class="alert-link" href='?ctl=director&act=afegir'>Tornar a afegir</a></p>
                </div>
            <?php } ?>
            <?php if (strpos($missatge, "Login")) { ?>
                <div class="alert alert-dismissible alert-danger text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $missatge; ?>  <img src="view/images/error.png" class="icon"</h3>
                    <p><a class="alert-link" href='?ctl=login'>Tornar a Iniciar Sessió</a></p>
                </div>        
            <?php } ?>

            <?php if (strpos($missatge, "registre")) { ?>
                <div class="alert alert-dismissible alert-danger text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $missatge; ?>  <img src="view/images/error.png" class="icon"</h3>
                    <p><a class="alert-link" href='?ctl=usuari&act=registre'>Tornar a intentar-lo</a></p>
                </div>        
            <?php } ?> 

            <?php if (strpos($missatge, "modificat")) { ?>
                <div class="alert alert-dismissible alert-danger text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $missatge; ?>  <img src="view/images/error.png" class="icon"</h3>
                    <p><a class="alert-link" href='?ctl=llibre&act=cercar'>Tornar a la llista</a></p>
                </div>        
            <?php } ?>

            <?php if (strpos($missatge, "afegit")) { ?>
                <div class="alert alert-dismissible alert-danger text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $missatge; ?>  <img src="view/images/error.png" class="icon"</h3>
                    <p><a class="alert-link" href='?ctl=llibre&act=afegir'>Tornar a afegir</a></p>
                </div>        
            <?php } ?>
            
            <?php if (strpos($missatge, "permisos")) { ?>
                <div class="alert alert-dismissible alert-danger text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $missatge; ?>  <img src="view/images/error.png" class="icon"</h3>
                    <p><a class="alert-link" href='?ctl=login'>Anar a Iniciar Sessio</a></p>
                </div>        
            <?php } ?>
        </div>
    </div>
</div>        



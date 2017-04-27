<div class="container-fluid">
    <div class="container" >
        <div class="col-xs-12 col-md-12 container-confirmacio">
            <?php if (strpos($missatge, "modificat") || strpos($missatge, "eliminat")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $missatge; ?>  <img src="view/images/confirm.png" class="icon"</h3>
                    <p><a class="alert-link" href='<?php echo $redireccio; ?>'>Tornar a la llista</a></p>
                </div>        
            <?php } ?>

            <?php if (strpos($missatge, "registrat")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $missatge; ?>  <img src="view/images/confirm.png" class="icon"</h3>
                    <p><a class="alert-link" href='<?php echo $redireccio; ?>'>Inicia Sessió</a></p>
                </div>        
            <?php } ?>

            <?php if (strpos($missatge, "afegit")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $missatge; ?>  <img src="view/images/confirm.png" class="icon"</h3>
                    <p><a class="alert-link" href='<?php echo $redireccio; ?>'>Tornar a la llista</a></p>
                </div>
            <?php } ?>
            <?php if (strpos($missatge, "login")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $missatge; ?>  <img src="view/images/confirm.png" class="icon"</h3>
                    <p><a class="alert-link" href='<?php echo $redireccio; ?>'>Anar a pagina inici</a></p>
                </div>
            <?php } ?>
        </div>        
    </div>
</div>
</div>


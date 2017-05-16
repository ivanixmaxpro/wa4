<div class="content">
    <form action="?ctl=empleat&act=modificar&id=<?= $empleat->getId_empleat();?>" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nom</label>
                    <?php
                    echo '<input type="text" class="form-control" placeholder="Nom" name="nom" value="' . $empleat->getNom() . '">';
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Cognoms</label>
                    <?php
                    echo '<input type="text" class="form-control" placeholder="Cognom" name="cognom" value="' . $empleat->getCognom() . '">';
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>DNI</label>
                    <?php
                    echo '<input type="text" class="form-control" placeholder="DNI" name="dni" value="' . $empleat->getDni() . '">';
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Address</label>
                    <?php
                    echo '<input type="text" class="form-control" placeholder="Adrsess" name="address" value="' . $empleat->getLocalitat() . '">';
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>NSS</label>
                    <?php
                    echo '<input type="text" class="form-control" placeholder="Company" name="nss" value="' . $empleat->getNss() . '">';
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nomina</label>
                    <?php
                    echo '<input type="text" class="form-control" placeholder="DNI" name="nomina" value="' . $empleat->getNomina() . '">';
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Sobre l'empleat</label>
                    <?php
                    echo '<textarea rows="5" class="form-control" name="info" placeholder="Here can be your description" >' . $empleat->getDescripcio() . '</textarea>';
                    ?>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Imatge</label>
                <?php
                echo '<input type="text" class="form-control" placeholder="Imatge" name="imatge" value="' . $empleat->getImatge() . '">';
                ?>
            </div>
        </div>
</div>
<div class="clearfix">
    <button type="submit" name="modify" class="btn btn-default">Modificar</button>
    <a name="tornar" class="btn btn-default" href="?ctl=empleat&act=llista">Tornar</a>
</div>
</form>
</div>
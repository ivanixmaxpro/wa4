
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <div class="card card-user author">
                    <div class="image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
                    </div>
                    <a href="#">
                        <img class="avatar border-gray" src="https://paracortarselasvenasconunapaladepescado.files.wordpress.com/2016/08/images1.jpg?w=240" alt="...">
                    </a>
                </div>
                <h4 class="title">Dades</h4>
            </div>
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
                            echo '<input type="text" class="img-rounded" width="600" height="470" placeholder="Imatge" name="imatge" value="' . $empleat->getImatge() . '">';
                            ?>
                        </div>
                    </div>
            </div>
                    <div class="clearfix">
                        <button type="submit" name="modify" class="btn btn-primary">Modificar</button>
                        <a name="tornar" class="btn btn-primary" href="?ctl=empleat&act=llista">Tornar</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
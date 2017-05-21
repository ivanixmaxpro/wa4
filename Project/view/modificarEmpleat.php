
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <div class="card card-user author">
                    <div class="image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
                    </div>
                    <a href="#">
                        <img class="avatar border-gray" src="<?php
                        if (isset($empleat)) {
                            echo $empleat->getImatge();
                        }
                        ?>" alt="Foto Empleat">
                    </a>
                </div>
                <h4 class="title">Dades</h4>
            </div>
            <div class="content">
                <form action="?ctl=empleat&act=modificar&id=<?= $empleat->getId_empleat(); ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nom</label>
                                <?php
                                echo '<input type="text" id="nomempleat" class="form-control" placeholder="Nom" name="nom" value="' . $empleat->getNom() . '">';
                                ?>
                                <span id="errorNomempleat"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cognom</label>
                                <?php
                                echo '<input type="text" id="cognomempleat" class="form-control" placeholder="Cognom" name="cognom" value="' . $empleat->getCognom() . '">';
                                ?>
                                <span id="errorCognomempleat"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DNI</label>
                                <?php
                                echo '<input type="text" id="dni" class="form-control" placeholder="DNI" name="dni" value="' . $empleat->getDni() . '">';
                                ?>
                                <span id="errorDni"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Localitat</label>
                                <?php
                                echo '<input type="text" id="localitat" class="form-control" placeholder="Localitat" name="address" value="' . $empleat->getLocalitat() . '">';
                                ?>
                                <span id="errorLocalitat"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nº Seguretat Social</label>
                                <?php
                                echo '<input type="text" id="nss" class="form-control" placeholder="Nº Seguretat Social" name="nss" value="' . $empleat->getNss() . '">';
                                ?>
                                <span id="errorNss"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nómina</label>
                                <?php
                                echo '<input type="text" id="nomina" class="form-control" placeholder="Nómina" name="nomina" value="' . $empleat->getNomina() . '">';
                                ?>
                                <span id="errorNomina"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Sobre l'empleat</label>
                                <?php
                                echo '<textarea rows="5" id="descripcioempleat" class="form-control" name="info" placeholder="Una breu descripció..." >' . $empleat->getDescripcio() . '</textarea>';
                                ?>
                                <span id="errorDescripcioempleat"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pujar imatge</label>
                            <input type="file" name="imatge" class="btn btn-default" id="imatge">
                            <p class="help-block">
                                Només es permet el tipus d'imatge: .jpg .png .jpeg
                            </p>
                            <span id="errorImatge"></span>
                        </div>
                    </div>
            </div>
            <div class="clearfix">
                <span id="errorBotoGuardarEmpleat"></span>
                <button type="submit" id="botoGuardarEmpleat" name="modify" class="btn btn-primary">Modificar</button>
                <a name="tornar" class="btn btn-primary" href="?ctl=empleat&act=llista">Tornar</a>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
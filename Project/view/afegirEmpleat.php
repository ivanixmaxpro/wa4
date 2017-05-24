<div class="content">
    <form action="?ctl=empleat&act=afegir" method="POST" enctype="multipart/form-data">
        <div class="row">
            <h3 style="margin-left: 10px">Empresa:</h3>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="campEmpresa">Empresa</label>
                    <br/>
                    <input type="text" class="form-control" id="campEmpresa" name="id_empresa" value="<?php echo $empresa->getId_empresa(); ?>" readonly>
                </div>
            </div>

            <h3 style="margin-left: 10px">Dades Empleat:</h3>
            <br/>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" id="nomempleat" class="form-control" placeholder="Nom" name="nom" value="" required>
                    <span id="errorNomempleat"></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Cognoms</label>
                    <input type="text"  id="cognomempleat" class="form-control" placeholder="Cognom" name="cognom" value="" required>
                    <span id="errorCognomempleat"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>DNI</label>
                    <input type="text" id="dni" class="form-control" placeholder="DNI" name="dni" value="" required>
                    <span id="errorDni"></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Localitat</label>
                    <input type="text" id="localitat" class="form-control" placeholder="Localitat" name="address" value="" required>
                    <span id="errorLocalitat"></span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nº Seguretat Social</label>
                    <input type="text" id="nss" class="form-control" placeholder="Nº Seguretat Social" name="nss" value="" required>
                    <span id="errorNss"></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nómina</label>
                    <input type="text" id="nomina" class="form-control" placeholder="Nómina" name="nomina" value="" required>
                    <span id="errorNomina"></span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Sobre l'empleat</label>
                    <textarea id="descripcioempleat" rows="5" class="form-control" placeholder="Una breu descripció" name="description"></textarea>
                    <span id="errorDescripcioempleat"></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Pujar imatge</label>
                    <input type="file" name="imatge" class="btn btn-primary" id="imatge">
                    <p class="help-block">
                        Només es permet el tipus d'imatge: .jpg .png .jpeg
                    </p>
                    <span id="errorImatge"></span>
                </div>
            </div>
        </div>
        <h3>Dades Usuari:</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Usuari</label>
                    <input type="text" id="usuari" class="form-control" placeholder="Usuari" name="usuari" value="" required>
                    <span id="errorUsuari"></span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Contrasenya</label>
                    <input type="password" id="contrasenya" class="form-control" placeholder="Contrasenya" name="contra" value="" required>
                    <span id="errorContrasenya"></span>
                </div>
            </div>
        </div>
        <br/>
        <h3>Horari:</h3>
        <table id="taulaHoraris" class="table table-bordered">
            <thead>
                <tr>
                    <th>Dia</th>
                    <th>Hora Inici</th>
                    <th>Hora Final</th>
                    <th>Festa?</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($dies as $dia) {
                    echo '<tr>';
                    echo '<tr>';
                    echo '<td>' . $dia->getNom() . '<input type="text" name="' . $dia->getNom() . '" value="' . $i . '" hidden></td>';
                    echo '<td> <input type="time" id="horaInici_' . $i . '" name="horaInici_' . $i . '" value=""/></td>';
                    echo '<td> <input type="time" id="horaFinal_' . $i . '" name="horaFinal_' . $i . '" value=""/></td>';
                    echo '<td> <input type="checkbox" name="festa' . $i . '" value="1" ></td>';
                    echo '</tr>';
                    $i++;
                }
                ?>

            </tbody>
        </table>


        <h3>Permisos:</h3>
        <table id="taulaHoraris" class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Visualitzar</th>
                    <th>Crear</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($llistatFuncionalitats as $permis) {
                    echo '<tr>';
                    echo '<td>' . $permis->getNom() . '</td>';
                    echo '<td> <input type="checkbox" name="visualitzar_' . $permis->getNom() . '" value="1"></td>';
                    echo '<td> <input type="checkbox" name="crear_' . $permis->getNom() . '" value="1"></td>';
                    echo '<td> <input type="checkbox" name="editar_' . $permis->getNom() . '" value="1"></td>';
                    echo '<td> <input type="checkbox" name="eliminar_' . $permis->getNom() . '" value="1"></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
</div>
<div class="clearfix">
    <span id="errorBotoGuardarempleat"></span>
    <button type="submit"  id="botoguardarempleat" name="submit" class="btn btn-primary">Afegir Empleat</button>
    <a name="tornar" class="btn btn-primary" href="?ctl=empleat&act=llista">Tornar</a>
</div>
<br/>
</form>
</div>
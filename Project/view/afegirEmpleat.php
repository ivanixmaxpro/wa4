<div class="content">
    <form action="?ctl=empleat&act=modificar&id=" method="POST">
        <div class="row">
            <h3>Dades Empleat:</h3>
            <br/>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" class="form-control" placeholder="Nom" name="nom" value="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Cognoms</label>
                    <input type="text" class="form-control" placeholder="Cognom" name="cognom" value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>DNI</label>
                    <input type="text" class="form-control" placeholder="DNI" name="dni" value="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Address</label>
                   <input type="text" class="form-control" placeholder="Adrsess" name="address" value="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>NSS</label>
                    <input type="text" class="form-control" placeholder="Company" name="nss" value="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nomina</label>
                    <input type="text" class="form-control" placeholder="DNI" name="nomina" value="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Sobre l'empleat</label>
                    <textarea rows="5" class="form-control" name="info" placeholder="Here can be your description" ></textarea>
                </div>
            </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Imatge</label>
               <input type="text" class="form-control" placeholder="Imatge" name="imatge" value="">
            </div>
        </div>
        </div>
        <h3>Dades Usuari:</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Usuari</label>
                    <input type="text" class="form-control" placeholder="usuari" name="usuari" value="">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Contrasenya</label>
                    <input type="text" class="form-control" placeholder="Contrasenya" name="contra" value="">
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
            foreach ($dies as $dia) {
                echo '<tr>';
                echo '<tr>';
                echo '<td>' . $dia->getNom() . '<input type="text" name="' . $dia->getNom() . '" value="' . $i . '" hidden></td>';
                echo '<td> <input type="time" id="time" name="horaInici_' . $i . '" value=""/></td>';
                echo '<td> <input type="time" id="time" name="horaFinal_' . $i . '" value=""/></td>';
                echo '<td> <input type="radio" name="festa' . $i . '" value="1" checked></td>';
                echo '<td> <input type="radio" name="festa' . $i . '" value="1"></td>';
                echo '</tr>';
                $i++;
            }
            ?>

            </tbody>
        </table>
</div>
<div class="clearfix">
    <button type="submit" name="modify" class="btn btn-default">Modificar</button>
    <a name="tornar" class="btn btn-default" href="?ctl=empleat&act=llista">Tornar</a>
</div>
</form>
</div>
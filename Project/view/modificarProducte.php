<form role="form" action="?ctl=producte&act=modificar&id=<?= $producte->getId_producte(); ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <label>Tipus de producte:</label>
            <select id="selector" name="selector">
                <option disabled="disabled" value="solid" <?php
                if (get_class($producte) == 'Solid') {
                    echo "selected";
                }
                ?>>Solid</option>
                <option disabled="disabled" value="semi-solid" <?php
                if (get_class($producte) == 'Semisolid') {
                    echo "selected";
                }
                ?>>Semi-solid</option>
                <option disabled="disabled" value="liquid" <?php
                if (get_class($producte) == 'Liquid') {
                    echo "selected";
                }
                ?>>Líquid</option>
                <option disabled="disabled" value="gas" <?php
                if (get_class($producte) == 'Gas') {
                    echo "selected";
                }
                ?>>Gas</option>
                <option disabled="disabled" value="altres" <?php
                if (get_class($producte) == 'Altres') {
                    echo "selected";
                }
                ?>>Altres</option>
            </select>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" id="nom"
                       placeholder="Nom del producte" name="nom" required value="<?php
                       if (isset($producte)) {
                           echo $producte->getNom();
                       }
                       ?>">
                <span id="errorNom"></span>
            </div>
            <div class="form-group">
                <label >Marca</label>
                <input type="text" name="marca" class="form-control" id="marca"
                       placeholder="Marca del producte" required value="<?php
                       if (isset($producte)) {
                           echo $producte->getMarca();
                       }
                       ?>">
                <span id="errorMarca"></span>
            </div>
            <div class="form-group">
                <label>Preu</label>
                <input type="text" name="preu" class="form-control" id="preu"
                       placeholder="Preu del producte" required value="<?php
                       if (isset($producte)) {
                           echo $producte->getPreuBase();
                       }
                       ?>">
                <span id="errorPreu"></span>
            </div>
            <div class="form-group">
                <label>Referéncia</label>
                <input type="text" name="referencia" class="form-control" id="referencia" readonly
                       placeholder="Referencia del producte" required value="<?php
                       if (isset($producte)) {
                           echo $producte->getReferencia();
                       }
                       ?>">
                <span id="errorReferencia"></span>
            </div>
            <div class="form-group">
                <label>Model</label>
                <input type="text" name="model" class="form-control" id="model"
                       placeholder="Model del producte" required value="<?php
                       if (isset($producte)) {
                           echo $producte->getModel();
                       }
                       ?>">
                <span id="errorModel"></span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Descripció</label>
                <textarea  name="descripcio" class="form-control" id="descripcio" style="resize:none; height:150px;"
                           placeholder="Descripció del producte" required ><?php
                               if (isset($producte)) {
                                   echo $producte->getDescripcio();
                               }
                               ?></textarea>
                <span id="errorDescripcio"></span>
            </div>
            <div class="form-group">
                <label>Conservar en fred? </label>
                <br/>
                <?php
                if (isset($producte)) {
                    $fred = $producte->getConservarFred();
                }
                ?>
                <input type="radio" id="conservar" name="conservar" value="1" <?php
                if ($fred == 1) {
                    echo "checked";
                }
                ?>> Si<br>
                <input type="radio" id="conservar" name="conservar" value="0" <?php
                if ($fred != 1) {
                    echo "checked";
                }
                ?>>No<br>
                <span id="errorConservar"></span>
            </div>
            <div class="form-group">
                <label>Pujar imatge</label>
                <input type="file" name="imatge" class="btn btn-default" id="imatge" required>
                <p class="help-block">
                    Només es permet el tipus d'imatge: .jpg .png .jpeg
                </p>
                <span id="errorImatge"></span>
            </div>
            <div class="form-group" id="capacitatMl" hidden>
                <label>Capacitat Ml</label>
                <input type="text" name="capacitatMlInput" class="form-control"
                       placeholder="Capacitat en Ml" value="<?php
                       if (isset($producte) && method_exists($producte, 'getCapacitatMl')) {
                           echo $producte->getCapacitatMl();
                       }
                       ?>" id="capacitatMlInput">
                <span id="errorCapacitatMlInput"></span>
            </div>
            <div class="form-group" id="capacitatMg" >
                <label>Capacitat Mg</label>
                <input type="text" name="capacitatMgInput" class="form-control"
                       placeholder="Capacitat en Mg" value="<?php
                       if (isset($producte) && method_exists($producte, 'getCapacitatMg')) {
                           echo $producte->getCapacitatMg();
                       }
                       ?>" id="capacitatMgInput">
                <span id="errorCapacitatMgInput"></span>
            </div>
            <div class="form-group" id="unitats">
                <label>Unitats</label>
                <input type="text" name="unitatsInput" class="form-control"
                       placeholder="Número d'unitats" value="<?php
                       if (isset($producte) && method_exists($producte, 'getUnitats')) {
                           echo $producte->getUnitats();
                       }
                       ?>" id="unitatsInput">
                <span id="errorUnitatsInput"></span>
            </div>
        </div>
        <span id="errorBotoGuardar"></span>
    </div>
    <button name="modify" id="botoGuardar"type="submit" class="btn btn-default">Modificar</button>
    <a name="tornar" class="btn btn-default" href="?ctl=producte&act=llista">Tornar</a>
</form>
<form role="form" action="?ctl=login&act=canviar" method="POST">
    <div class="row">
        <?php
        echo "<pre>";
        var_dump($producte);
       echo "</pre>";
?>
        <div class="col-md-6">
            <?php
            // mirar el tipus de producte que es i auto seleccionar
            ?>
            <label>Tipus de producte:</label>
            <select id="selector">
                <option value="solid">Solid</option>
                <option value="semi-solid">Semi-solid</option>
                <option value="liquid">Líquid</option>
                <option value="gas">Gas</option>
            </select>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" id="nom"
                       placeholder="Nom del producte" name="nom" required value="<?php if(isset($producte)){ echo $producte->getNom(); }?>">
            </div>
            <div class="form-group">
                <label >Marca</label>
                <input type="text" name="marca" class="form-control" id="marca"
                       placeholder="Marca del producte" required value="<?php if(isset($producte)){ echo $producte->getMarca(); }?>">
            </div>
            <div class="form-group">
                <label>Preu</label>
                <input type="text" name="preu" class="form-control" id="preu"
                       placeholder="Preu del producte" required value="<?php if(isset($producte)){ echo $producte->getPreuBase().' €'; }?>">
            </div>
            <div class="form-group">
                <label>Referéncia</label>
                <input type="text" name="referencia" class="form-control" id="referencia"
                       placeholder="Referencia del producte" required value="<?php if(isset($producte)){ echo $producte->getReferencia(); }?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Model</label>
                <input type="text" name="model" class="form-control" id="model"
                       placeholder="Model del producte" required value="<?php if(isset($producte)){ echo $producte->getModel(); }?>">
            </div>
            <div class="form-group">
                <label>Descripció</label>
                <textarea  name="descripcio" class="form-control" id="descripcio"
                           placeholder="Descripció del producte" required ><?php if(isset($producte)){ echo $producte->getDescripcio(); }?></textarea>
            </div>
            <div class="form-group">
                <label>Conservar en fred? </label>
                <br/>
                <?php
                if(isset($producte)){
                    $fred = $producte->getConservarFred();
                }
                ?>
                <input type="checkbox" id="conservar" name="conservar" value="0" <?php if($fred == 1){echo "checked";}?>> Si<br>
                <input type="checkbox" id="conservar" name="conservar" value="1" <?php if($fred != 1){echo "checked";}?>>No<br>
            </div>
            <div class="form-group">
                <label>Imatge</label>
                <input type="text" name="imagte" class="form-control" id="imagte"
                       placeholder="Imatge del producte" required value="<?php if(isset($producte)){ echo $producte->getImatge(); }?>">
            </div>
            <div class="form-group" id="capacitatMl" hidden>
                <label>Capacitat Ml</label>
                <input type="text" name="capacitatMl" class="form-control"
                       placeholder="Capacitat en Ml" required value="<?php if(isset($producte)){ echo $producte->getImatge(); }?>">
            </div>
            <div class="form-group" id="capacitatMg" hidden>
                <label>Capacitat Mg</label>
                <input type="text" name="imagte" class="form-control"
                       placeholder="Capacitat en Mg" required value="<?php if(isset($producte)){ echo $producte->getImatge(); }?>">
            </div>
            <div class="form-group" id="unitats" hidden>
                <label>Unitats</label>
                <input type="text" name="unitats" class="form-control"
                       placeholder="Número d'unitats" required value="<?php if(isset($producte)){ echo $producte->getImatge(); }?>">
            </div>
        </div>
    </div>
  <input name="send" type="submit" class="btn btn-default" value="Modificar">
</form>
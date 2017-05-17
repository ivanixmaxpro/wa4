<form role="form" method="POST">
    <div class="row">
        <div class="col-md-6">
            <label>Tipus de producte:</label>
            <select id="selector" name="selector">
                <option disabled="disabled" value="solid" <?php if(get_class($producte) == 'Solid'){ echo "selected";} ?>>Solid</option>
                <option disabled="disabled" value="semi-solid" <?php if(get_class($producte) == 'Semisolid'){ echo "selected";} ?>>Semi-solid</option>
                <option disabled="disabled" value="liquid" <?php if(get_class($producte) == 'Liquid'){ echo "selected";} ?>>Líquid</option>
                <option disabled="disabled" value="gas" <?php if(get_class($producte) == 'Gas'){ echo "selected";} ?>>Gas</option>
                <option disabled="disabled" value="altres" <?php if(get_class($producte) == 'Altres'){ echo "selected";} ?>>Altres</option>
            </select>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" id="nom" readonly
                       placeholder="Nom del producte" name="nom" required value="<?php if(isset($producte)){ echo $producte->getNom(); }?>">
            </div>
            <div class="form-group">
                <label >Marca</label>
                <input type="text" name="marca" class="form-control" id="marca" readonly
                       placeholder="Marca del producte" required value="<?php if(isset($producte)){ echo $producte->getMarca(); }?>">
            </div>
            <div class="form-group">
                <label>Preu</label>
                <input type="text" name="preu" class="form-control" id="preu" readonly
                       placeholder="Preu del producte" required value="<?php if(isset($producte)){ echo $producte->getPreuBase(); }?>">
            </div>
            <div class="form-group">
                <label>Referéncia</label>
                <input type="text" name="referencia" class="form-control" id="referencia" readonly
                       placeholder="Referencia del producte" required value="<?php if(isset($producte)){ echo $producte->getReferencia(); }?>">
            </div>
            <div class="form-group">
                <label>Model</label>
                <input type="text" name="model" class="form-control" id="model" readonly
                       placeholder="Model del producte" required value="<?php if(isset($producte)){ echo $producte->getModel(); }?>">
            </div>
            <div class="form-group">
                <label>Situació:</label>
                <input type="text" name="situcacio" class="form-control" id="situcacio" readonly
                       placeholder="Situació del producte" required value="<?php if(isset($ubicacio)){ echo $ubicacio->getSituacio(); }?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Descripció</label>
                <textarea  name="descripcio" class="form-control" id="descripcio" readonly
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
                <input type="radio" id="conservar" name="conservar" value="0" disabled readonly <?php if($fred == 1){echo "checked";}?>> Si<br>
                <input type="radio" id="conservar" name="conservar" value="1" disabled readonly <?php if($fred != 1){echo "checked";}?>>No<br>
            </div>
            <div class="form-group">
                <label>Imatge</label>
                <input type="text" name="imagte" class="form-control" id="imagte" readonly
                       placeholder="Imatge del producte" required value="<?php if(isset($producte)){ echo $producte->getImatge(); }?>">
            </div>
            <div class="form-group" id="capacitatMl" hidden>
                <label>Capacitat Ml</label>
                <input type="text" name="capacitatMlInput" class="form-control" readonly
                       placeholder="Capacitat en Ml" required value="<?php if(isset($producte) && method_exists($producte,'getCapacitatMl')){ echo $producte->getCapacitatMl(); }?>">
            </div>
            <div class="form-group" id="capacitatMg" >
                <label>Capacitat Mg</label>
                <input type="text" name="capacitatMgInput" class="form-control" readonly
                       placeholder="Capacitat en Mg" required value="<?php if(isset($producte) && method_exists($producte,'getCapacitatMg')){ echo $producte->getCapacitatMg(); }?>">
            </div>
            <div class="form-group" id="unitats">
                <label>Unitats</label>
                <input type="text" name="unitatsInput" class="form-control" readonly
                       placeholder="Número d'unitats" required value="<?php if(isset($producte) && method_exists($producte,'getUnitats')){ echo $producte->getUnitats(); }?>">
            </div>
            <div class="form-group">
                <label>Quantitat en tenda:</label>
                <input type="text" name="quantitatTenda" class="form-control" id="quantitatTenda" readonly
                       placeholder="Quantitat en tenda" required value="<?php if(isset($ubicacio)){ echo $ubicacio->getQuantitatTenda(); }?>">
            </div>
            <div class="form-group">
                <label>Quantitat en magatzem: </label>
                <input type="text" name="quantitatMagatzem" class="form-control" id="quantitatMagatzem" readonly
                       placeholder="Quantitat en magatzem" required value="<?php if(isset($ubicacio)){ echo $ubicacio->getQuantitatStock(); }?>">
            </div>
        </div>
    </div>
    <a name="tornar" class="btn btn-primary" href="?ctl=producte&act=llista">Tornar</a>
</form>
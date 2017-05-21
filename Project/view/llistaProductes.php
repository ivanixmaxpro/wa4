
<div class="card">
    <div class="row">
        <div class="col-md-6">
            <div class="header">
                <h4 class="title">Llista productes</h4>
                <p class="category">A continuació un llistat:</p>
            </div>
        </div>
    </div>

    <form action="?ctl=producte&act=llista" method="post">
        <div class="form-group" style="padding-left:1% ">
            Cercar per Nom:
            <input type="text" name="nom" value="<?php if(isset($nom)){echo $nom;}?>">
            Conservar en fred:
            <select name="conservarFred">
                <option value="tots">-</option>
                <option value="0" <?php if(isset($conservarFred) && $conservarFred == 0){echo "selected";} ?>>No</option>
                <option value="1" <?php if(isset($conservarFred) && $conservarFred == 1){echo "selected";} ?>>Si</option>
            </select>
            Quantitat de registres:
            <select name="qqa">
                <option value="tots" <?php if(isset($limitRegistres) && $limitRegistres == 'tots'){echo "selected";} ?>>-</option>
                <option value="1" <?php if(isset($limitRegistres) && $limitRegistres == 1){echo "selected";} ?>>1</option>
                <option value="2" <?php if(isset($limitRegistres) && $limitRegistres== 2){echo "selected";} ?>>2</option>
                <option value="10" <?php if(isset($limitRegistres) && $limitRegistres == 10){echo "selected";} ?>>10</option>
                <option value="12" <?php if(isset($limitRegistres) && $limitRegistres == 12){echo "selected";} ?>>12</option>
                <option value="16" <?php if(isset($limitRegistres) && $limitRegistres == 16){echo "selected";} ?>>16</option>
                <option value="24" <?php if(isset($limitRegistres) && $limitRegistres == 24){echo "selected";} ?>>24</option>
                <option value="36" <?php if(isset($limitRegistres) && $limitRegistres == 36){echo "selected";} ?>>36</option>
                <option value="72" <?php if(isset($limitRegistres) && $limitRegistres == 72){echo "selected";} ?>>72</option>
                <option value="100" <?php if(isset($limitRegistres) && $limitRegistres == 100){echo "selected";} ?>>100</option>
                <option value="200" <?php if(isset($limitRegistres) && $limitRegistres == 200){echo "selected";} ?>>200</option>
            </select>
            Tipus:
            <select name="tipus">
                <option value="tots" <?php if(isset($tipusProducte) && $tipusProducte == 'tots'){echo "selected";} ?>>-</option>
                <option value="solid" <?php if(isset($tipusProducte) && $tipusProducte == 'solid'){echo "selected";} ?>>Solid</option>
                <option value="semisolid" <?php if(isset($tipusProducte) && $tipusProducte == 'semisolid'){echo "selected";} ?>>Semisolid</option>
                <option value="liquid" <?php if(isset($tipusProducte) && $tipusProducte == 'liquid'){echo "selected";} ?>>Liquid</option>
                <option value="gas" <?php if(isset($tipusProducte) && $tipusProducte == 'gas'){echo "selected";} ?>>Gas</option>
                <option value="altres" <?php if(isset($tipusProducte) && $tipusProducte == 'altres'){echo "selected";} ?>>Altres</option>

            </select>
            <button name="Submit" class="btn btn-primary">Buscar</button>
        </div>
        <div class="col-md-12"><a href="?ctl=producte&act=afegir">
            <button class="btn btn-primary pull-right">Afeguir producte</button></a>
        </div>
    </form> 
    <?php
    tablaTotProductes($productes);
    ?>
</div>
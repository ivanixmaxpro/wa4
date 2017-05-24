<div class="content">
    <div style="margin-left: 1%">
        <form role="form" method="post" action="?ctl=ubicacio&act=modificar" >
            <div class="row">
                <label >Quantitats:</label>
                <br>
                <table class="table-bordered col-md-2">
                    <thead>
                        <tr>
                            <th>Tenda</th>
                            <th>Estoc</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id='mostrarTenda'></td>
                            <td id='mostrarStock'></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="form-group">
                    <label >Moure a:</label>
                    <br/>
                    <?php
                    mostrarSelectUbicacio();
                    ?>  
                </div>
                <div class="form-group">
                    <input type="number" min="0" max="0" step="1" value="0" class="" name="quantitatMoure" id="campQuantitatDeProductes">
                    <input name="id_ubicacio" id="idUbicacio" value="<?php echo $id ?>"type="hidden"/>
                    <input name="id" id="idProducte" value="<?php echo $producte->getId_producte(); ?>"type="hidden"/>
                </div>
            </div>    
            <input name="passarArrProductes" id="passarArray" type="hidden"></input>
            <input type="submit" id="botoCrearUbicacio" name="submit" value="Crear" class="btn btn-danger pull-left"></input>
        </form>
    </div>
</div>



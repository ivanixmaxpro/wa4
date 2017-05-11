<?php

/**
 * tabla general de productes 
 * @param type  array de productes 
 */
function tablaTotProductes($productes) {
    ?> 
    <div class="content table-responsive table-full-width"> 
        <table class="table table-hover table-striped"> 
            <thead> 
                <tr><th>ID</th> 
                    <th>Referència</th> 
                    <th>Nom</th> 
                    <th>Marca</th> 
                    <th>Model</th> 
                    <th>Preu Base</th> 
                    <th>Conservar en fred</th> 

                    <th>Detall</th> 
                    <th>Modificar</th> 
                    <th>Eliminar</th> 
                </tr>
            </thead> 
            <tbody> 

                <?php
                foreach ($productes as $row) {

                    echo '<tr>';
                    echo "<td>" . $row->getId_producte() . "</td>";
                    echo "<td>" . $row->getReferencia() . "</td>";
                    echo "<td>" . $row->getNom() . "</td>";
                    echo "<td>" . $row->getMarca() . "</td>";
                    echo "<td>" . $row->getModel() . "</td>";
                    echo "<td>" . $row->getpreuBase() . "</td>";
                    echo "<td>" . $row->getConservarFred() . "</td>";
                    echo '<td>' . '<a href="?ctl=producte&act=detall&id=' . $row->getId_producte() . '">' . 'Veure' . '</a>' . '</td>';
                    ?>  <td> <a href="?ctl=producte&act=modificar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Modificar producte</a> </td>
                <td> <a href="?ctl=producte&act=eliminar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Eliminar producte</a> </td>
                <?php
                echo "</tr>";
            }
            ?> 

            </tbody> 
        </table> 
    </div> 
    <?php
}
?> 

<?php

function tablaTotAlbaransVenta($albaransVenta, $empresa) {
    ?> 
    <div class="content table-responsive table-full-width"> 
        <table class="table table-hover table-striped"> 
            <thead> 
                <tr><th>ID</th> 
                    <th>Client</th> 
                    <th>Empresa</th> 
                    <th>Codi</th> 
                    <th>Data</th>

                    <th>Detall</th>
                </tr>
            </thead> 
            <tbody> 

                <?php
                foreach ($albaransVenta as $row) {
                    $client = $empresa->searchClientById($row->getId_client());

                    echo '<tr>';
                    echo "<td>" . $row->getId_albara() . "</td>";
                    echo "<td>" . $client->getNom() . "</td>";
                    echo "<td>" . $row->getId_empresa() . "</td>";
                    echo "<td>" . $row->getCodi() . "</td>";
                    echo "<td>" . $row->getData() . "</td>";
                    echo '<td>' . '<a href="?ctl=albaraVenta&act=detall&id=' . $row->getId_albara() . '">' . 'Veure' . '</a>' . '</td>';
                    ?>  
                    <?php
                    echo "</tr>";
                }
                ?> 

            </tbody> 
        </table> 
    </div> 
    <?php
    /* <td> <a href="?ctl=producte&act=modificar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Modificar producte</a> </td>
      <td> <a href="?ctl=producte&act=eliminar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Eliminar producte</a> </td>
     */
}
?>
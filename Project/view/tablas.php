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
                    <?php
                    if(isset($_SESSION['permisos']) && $_SESSION['permisos']['producte']->getEditar() == true && $_SESSION['permisos']['producte']->getEliminar() == true ){
                        echo "<th>Modificar</th>";
                        echo "<th>Modificar ubicació</th>";
                        echo "<th>Eliminar</th>";
                    }
                    ?>
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
                    if ($row->getConservarFred() == 0) {
                        echo "<td>No</td>";
                    } else {
                        echo "<td>Si</td>";
                    }
                    echo '<td>' . '<a href="?ctl=producte&act=detall&id=' . $row->getId_producte() . '">' . 'Veure' . '</a>' . '</td>';
                    if(isset($_SESSION['permisos']) && $_SESSION['permisos']['producte']->getEditar() == true && $_SESSION['permisos']['producte']->getEliminar() == true ){
                        ?>
                        <td> <a href="?ctl=producte&act=modificar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Modificar producte</a> </td>
                        <td> <a href="?ctl=ubicacio&act=modificar&id_ubicacio=<?php echo $row->getId_ubicacio() ?>&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Canviar ubicacio producte</a> </td>
                        <td> <a href="?ctl=producte&act=eliminar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Eliminar producte</a> </td>

                        <?php

                    }
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
                    $date = date_create($row->getData());

                    echo '<tr>';
                    echo "<td>" . $row->getId_albara() . "</td>";
                    echo "<td>" . $client->getNom() . "</td>";
                    echo "<td>" . $empresa->getNom() . "</td>";
                    echo "<td>" . $row->getCodi() . "</td>";
                    echo "<td>" . date_format($date, 'd-m-Y') . "</td>";
                    echo '<td>' . '<a href="?ctl=albaraVenta&act=detall&id=' . $row->getId_albara() . '">' . 'Veure' . '</a>' . '</td>';
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

function tablaTotAlbaransCompra($albaransCompra, $empresa) {
    ?> 
    <div class="content table-responsive table-full-width"> 
        <table class="table table-hover table-striped"> 
            <thead> 
                <tr><th>ID</th> 
                    <th>Proveidor</th> 
                    <th>Empresa</th> 
                    <th>Codi</th>
                    <th>Data</th>

                    <th>Detall</th>
                </tr>
            </thead> 
            <tbody> 

                <?php
                foreach ($albaransCompra as $row) {
                    $proveidor = $empresa->searchProveidorById($row->getId_proveidor());
                    $date = date_create($row->getData());

                    echo '<tr>';
                    echo "<td>" . $row->getId_albara() . "</td>";
                    echo "<td>" . $proveidor->getNom() . "</td>";
                    echo "<td>" . $empresa->getNom() . "</td>";
                    echo "<td>" . $row->getCodi() . "</td>";
                    echo "<td>" . date_format($date, 'd-m-Y') . "</td>";
                    echo '<td>' . '<a href="?ctl=albaraCompra&act=detall&id=' . $row->getId_albara() . '">' . 'Veure' . '</a>' . '</td>';
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

function tablaTotControlUsuaris($control, $empresa) {
    ?> 
    <div class="content table-responsive table-full-width"> 
        <table class="table table-hover table-striped"> 
            <thead> 
                <tr><th>ID</th> 
                    <th>Usuari</th> 
                    <th>Fitxat</th> 
                    <th>Registrat el:</th>
                </tr>
            </thead> 
            <tbody> 

                <?php
                foreach ($control as $row) {
                    $usuari = $empresa->searchUsuariById($row->getId_usuari());
                    $fitxat;
                    $dta = new DateTime($row->getData());
                    $dtaBona = $dta->format('d-m-Y H:i:s');
                    $temps = explode(" ", $dtaBona);

                    if ($row->getFitxat() == 0) {
                        $fitxat = "No";
                    } else if ($row->getFitxat() == 1) {
                        $fitxat = "Si";
                    }

                    echo '<tr>';
                    echo "<td>" . $row->getId_control() . "</td>";
                    echo "<td>" . $usuari->getUsuari() . "</td>";
                    echo "<td>" . $fitxat . "</td>";
                    echo "<td>" . $temps[0] . " " . $temps[1] . "</td>";
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

function taulaDetallsAlbarans($arrDetalls, $empresa) {
    ?>
    <div class="content table-responsive table-full-width">
        <table id="taulaDetalls" class="table table-hover table-striped">
            <thead>
                <tr>
                    <th class="service"></th>
                    <th class="desc">Producte</th>
                    <th>Quantitat</th>
                    <th>Preu unitari</th>
                    <th>TOTAL</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $linia = 1;
                foreach ($arrDetalls as $row) {
                    $producte = $empresa->searchProducte($row->getId_producte());

                    echo '<tr>';
                    echo '<td class="service">' . $linia . "</td>";
                    echo '<td class="desc">' . $producte->getNom() . "</td>";
                    echo '<td class="text-center">' . $row->getQuantitat() . "</td>";
                    echo '<td class="desc">' . round($producte->getPreuBase(), 2) . " €</td>";
                    echo '<td class="text-rigth">' . round($row->getPreu(), 2) . " €" . "</td>";
                    echo "</tr>";
                    $linia++;
                }
            }

            function tablaRegistresMoviments($registres) {
                ?> 
            <div class="content table-responsive table-full-width"> 
                <table class="table table-hover table-striped"> 
                    <thead> 
                        <tr><th>Nº Registre</th>
                        </tr>
                    </thead> 
                    <tbody> 

                        <?php
                        $count = 1;
                        for ($i = 0; $i < count($registres); $i++) {
                            if ($registres[$i] != false) {
                                echo '<tr>';
                                echo "<td>" . $count . "</td>";
                                echo "<td>" . $registres[$i] . "</td>";
                                echo '</tr>';
                                $count++;
                            }
                        }
                        ?> 

                    </tbody> 
                </table> 
            </div> 
            <?php
        }
        ?>

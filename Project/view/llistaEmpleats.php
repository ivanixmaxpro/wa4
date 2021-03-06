
<div class="card">
    <div class="header">
        <p class="category">Llistat de tots els nostres empleats:</p>
    </div>
    <div class="caixa">
        <?php
        if (isset($_SESSION['permisos']) && $_SESSION['permisos']['empleat']->getCrear() == true) {
            echo "<a href=\"?ctl=empleat&act=afegir\">
        <button class=\"btn btn-primary pull-right\">Afegir empleat</button>
    </a>";
        }
        ?>
    </div>
    <div class="content table-responsive table-full-width">
        <table id="taulaPaginacio" class="table table-hover table-striped">
            <thead>
                <tr><th>ID</th>
                    <th>Nom</th>
                    <th>Cognoms</th>
                    <th>DNI</th>
                    <th>Localitat</th>
                    <?php
                    if (isset($_SESSION['permisos']) && $_SESSION['permisos']['empleat']->getEditar() == true && $_SESSION['permisos']['empleat']->getEliminar() == true && $_SESSION['permisos']['permisos']->getEditar() == true && $_SESSION['permisos']['permisos']->getEliminar() == true) {
                        echo "<th>Modificar</th>";
                    }
                    ?>
                    <th>Detalls</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($empleats as $row) {

                    echo '<tr>';
                    echo "<td>" . $row->getId_empleat() . "</td>";
                    echo "<td>" . $row->getNom() . "</td>";
                    echo "<td>" . $row->getCognom() . "</td>";
                    echo "<td>" . $row->getDni() . "</td>";
                    echo "<td>" . $row->getLocalitat() . "</td>";
                    if (isset($_SESSION['permisos']) && $_SESSION['permisos']['empleat']->getEditar() == true && $_SESSION['permisos']['empleat']->getEliminar() == true && $_SESSION['permisos']['permisos']->getEditar() == true && $_SESSION['permisos']['permisos']->getEliminar() == true) {
                        echo '<td>' . '<a href="?ctl=empleat&act=menu&id=' . $row->getId_empleat() . '">' . '<button class ="btn btn-primary">Modificacions empleat</button>' . '</a>' . '</td>';
                    }
                    echo '<td>' . '<a class="btn btn-primary" href="?ctl=empleat&act=detall&id=' . $row->getId_empleat() . '">' . 'Veure detalls' . '</a>' . '</td>';

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>
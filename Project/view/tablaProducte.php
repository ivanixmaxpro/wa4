<?php

/**
 * tabla productes solid
 * @param type array productes
 */
function tablaSemiSolid($productes) {
    ?>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                <tr><th>ID</th>
                    <th>referència</th>
                    <th>Nom</th>
                    <th>marca</th>
                    <th>model</th>
                    <th>preuBase</th>
                    <th>conservar en fred</th>
                    <th>capacitat mg</th>
                    
                    <th>detall</th>
                    <th>modificar</th>
                    <th>eliminar</th>
                </tr></thead>
            <tbody>

                <?php
                foreach ($productes as $row) {

                    echo '<tr>';
                    echo "<td>" . $row->getId_producte() . "</td>";
                    echo "<td>" . $row->getNom() . "</td>";
                    echo "<td>" . $row->getMarca() . "</td>";
                    echo "<td>" . $row->getpreuBase() . "</td>";
                    echo "<td>" . $row->getReferencia() . "</td>";
                    echo "<td>" . $row->getModel() . "</td>";
                    echo "<td>" . $row->getConservarEnFred() . "</td>";
                    echo "<td>" . $row->getCapacitatMg() . "</td>";
                    
                    echo '<td>' . '<a href="?ctl=producte&act=detall&id=' . $row->getId_producte() . '">' . 'Veure' . '</a>' . '</td>';
                    ?>   <a href="?ctl=producte&act=modificar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Modificar producte</a>
                <?php echo "</tr>";
                ?>   <a href="?ctl=producte&act=eliminar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Eliminar producte</a>
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

/**
 * tabla productes solid
 * @param type array productes
 */
function tablaSolid($productes) {
    ?>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                <tr><th>ID</th>
                    <th>referència</th>
                    <th>Nom</th>
                    <th>marca</th>
                    <th>model</th>
                    <th>preuBase</th>
                    <th>conservar en fred</th>
                    <th>capacitat mg</th>
                    <th>unitats</th>
                    <th>detall</th>
                    <th>modificar</th>
                    <th>eliminar</th>
                </tr></thead>
            <tbody>

                <?php
                foreach ($productes as $row) {

                    echo '<tr>';
                    echo "<td>" . $row->getId_producte() . "</td>";
                    echo "<td>" . $row->getNom() . "</td>";
                    echo "<td>" . $row->getMarca() . "</td>";
                    echo "<td>" . $row->getpreuBase() . "</td>";
                    echo "<td>" . $row->getReferencia() . "</td>";
                    echo "<td>" . $row->getModel() . "</td>";
                    echo "<td>" . $row->getConservarEnFred() . "</td>";
                    echo "<td>" . $row->getCapacitatMg() . "</td>";
                    echo "<td>" . $row->getUnitats() . "</td>";
                    echo '<td>' . '<a href="?ctl=producte&act=detall&id=' . $row->getId_producte() . '">' . 'Veure' . '</a>' . '</td>';
                    ?>   <a href="?ctl=producte&act=modificar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Modificar producte</a>
                <?php echo "</tr>";
                ?>   <a href="?ctl=producte&act=eliminar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Eliminar producte</a>
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

/**
 * tabla general de productes
 * @param type  array de productes
 */
function tablaTot($productes) {
    ?>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                <tr><th>ID</th>
                    <th>referència</th>
                    <th>Nom</th>
                    <th>marca</th>
                    <th>model</th>
                    <th>preuBase</th>
                    <th>conservar en fred</th>
                    <th>detall</th>
                    <th>modificar</th>
                    <th>eliminar</th>
                </tr></thead>
            <tbody>

                <?php
                foreach ($productes as $row) {

                    echo '<tr>';
                    echo "<td>" . $row->getId_producte() . "</td>";
                    echo "<td>" . $row->getNom() . "</td>";
                    echo "<td>" . $row->getMarca() . "</td>";
                    echo "<td>" . $row->getpreuBase() . "</td>";
                    echo "<td>" . $row->getReferencia() . "</td>";
                    echo "<td>" . $row->getModel() . "</td>";
                    echo "<td>" . $row->getConservarEnFred() . "</td>";
                    echo '<td>' . '<a href="?ctl=producte&act=detall&id=' . $row->getId_producte() . '">' . 'Veure' . '</a>' . '</td>';
                    ?>   <a href="?ctl=producte&act=modificar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Modificar producte</a>
                <?php echo "</tr>";
                ?>   <a href="?ctl=producte&act=eliminar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Eliminar producte</a>
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

/**
 * tabla  productes liquids
 * @param type  array de productes
 */
function tablaLiquid($productes) {
    ?>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                <tr><th>ID</th>
                    <th>referència</th>
                    <th>Nom</th>
                    <th>marca</th>
                    <th>model</th>
                    <th>preuBase</th>
                    <th>conservar en fred</th>
                    <th>capacitat ml</th>
                    <th>detall</th>
                    <th>modificar</th>
                    <th>eliminar</th>
                </tr></thead>
            <tbody>

                <?php
                foreach ($productes as $row) {

                    echo '<tr>';
                    echo "<td>" . $row->getId_producte() . "</td>";
                    echo "<td>" . $row->getNom() . "</td>";
                    echo "<td>" . $row->getMarca() . "</td>";
                    echo "<td>" . $row->getpreuBase() . "</td>";
                    echo "<td>" . $row->getReferencia() . "</td>";
                    echo "<td>" . $row->getModel() . "</td>";
                    echo "<td>" . $row->getConservarEnFred() . "</td>";
                    echo "<td>" . $row->getCapacitatMl() . "</td>";
                    echo '<td>' . '<a href="?ctl=producte&act=detall&id=' . $row->getId_producte() . '">' . 'Veure' . '</a>' . '</td>';
                    ?>   <a href="?ctl=producte&act=modificar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Modificar producte</a>
                <?php echo "</tr>";
                ?>   <a href="?ctl=producte&act=eliminar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Eliminar producte</a>
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

/**
 * tabla  productes liquids
 * @param type  array de productes
 */
function tablaGas($productes) {
    ?>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                <tr><th>ID</th>
                    <th>referència</th>
                    <th>Nom</th>
                    <th>marca</th>
                    <th>model</th>
                    <th>preuBase</th>
                    <th>conservar en fred</th>
                    <th>capacitat ml</th>
                    <th>detall</th>
                    <th>modificar</th>
                    <th>eliminar</th>
                </tr></thead>
            <tbody>

                <?php
                foreach ($productes as $row) {

                    echo '<tr>';
                    echo "<td>" . $row->getId_producte() . "</td>";
                    echo "<td>" . $row->getNom() . "</td>";
                    echo "<td>" . $row->getMarca() . "</td>";
                    echo "<td>" . $row->getpreuBase() . "</td>";
                    echo "<td>" . $row->getReferencia() . "</td>";
                    echo "<td>" . $row->getModel() . "</td>";
                    echo "<td>" . $row->getConservarEnFred() . "</td>";
                    echo "<td>" . $row->getCapacitatMl() . "</td>";
                    echo '<td>' . '<a href="?ctl=producte&act=detall&id=' . $row->getId_producte() . '">' . 'Veure' . '</a>' . '</td>';
                    ?>   <a href="?ctl=producte&act=modificar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Modificar producte</a>
                <?php echo "</tr>";
                ?>   <a href="?ctl=producte&act=eliminar&id=<?php echo $row->getId_producte(); ?>" class="btn btn-danger btn-sm"></span> Eliminar producte</a>
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
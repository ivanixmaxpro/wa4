
<div class="card">
    <div class="header">
        <h4 class="title">Llista productes</h4>
        <p class="category">A continuació un llistat:</p>
    </div>
    <form action="?ctl=actors" method="post">
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <tr><th>ID</th>
                        <th>Nom</th>
                        <th>marca</th>
                        <th>preuBase</th>
                        <th>referència</th>
                        <th>model</th>
                        <th>conservar en fred</th>
                        <th>detall</th>
                        <th>modificar</th>
                        <th>eliminar</th>
                    </tr></thead>
                <tbody>

                    <?php
                    foreach ($productesGas as $row) {

                        echo '<tr>';
                        echo "<td>" . $row->getId_producte() . "</td>";
                        echo "<td>" . $row->getNom() . "</td>";
                        echo "<td>" . $row->getMarca() . "</td>";
                        echo "<td>" . $row->getpreuBase() . "</td>";
                        echo "<td>" . $row->getReferencia() . "</td>";
                        echo "<td>" . $row->getModel() . "</td>";
                        echo "<td>" . $row->getConservarFred() . "</td>";
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
    </form>  
</div>
</div>
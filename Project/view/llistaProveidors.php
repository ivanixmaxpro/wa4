
<div class="card">
    <div class="header">
        <p class="category">Llistat de tots els nostres proveidors:</p>
    </div>

    <form action="?ctl=proveidor&act=llista" method="post">
        <div class="form-group">
            Cercar per Nom:
            <input type="text" name="nom" value="<?php
            if (isset($nom)) {
                echo $nom;
            }
            ?>">
            <button name="Submit" class="btn btn-primary">Buscar</button>
            <a href="?ctl=proveidor&act=afegir" class="btn btn-primary"></span> Afegir proveidor</a>
        </div>
    </form> 
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Codi</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr></thead>
            <tbody>

                <?php
                foreach ($proveidors as $row) {

                    echo '<tr>';
                    echo "<td>" . $row->getId_proveidor() . "</td>";
                    echo "<td>" . $row->getNom() . "</td>";
                    echo "<td>" . $row->getCodi() . "</td>";
                    echo '<td>' . '<a href="?ctl=proveidor&act=modificar&id=' . $row->getId_proveidor() . '&missatge">' . 'modificar' . '</a>' . '</td>';
                    echo '<td>' . '<a href="?ctl=proveidor&act=eliminar&id=' . $row->getId_proveidor() . '&missatge">' . 'eliminar' . '</a>' . '</td>';
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>

    </div>
</div>
</div>
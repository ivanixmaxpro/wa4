<div class="card">
    <div class="header">
        <p class="category">Llistat de tots els nostres clients:</p>
    </div>

    <form action="?ctl=client&act=llista" method="post">
        <div class="form-group">
            Cercar per Nom:
            <input type="text" name="nom" value="<?php if (isset($nom)) {
    echo $nom;
} ?>">
            <button name="Submit" class="btn btn-primary">Buscar</button>
            <a href="?ctl=client&act=afegir" class="btn btn-primary"></span> Afegir client</a>
        </div>
    </form> 
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Codi</th>
                    <th>Detall</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr></thead>
            <tbody id="lista">

                <?php
                foreach ($clients as $row) {

                    echo '<tr>';
                    echo "<td>" . $row->getId_client() . "</td>";
                    echo "<td>" . $row->getNom() . "</td>";
                    echo "<td>" . $row->getCodi() . "</td>";
                    echo '<td>' . '<a href="?ctl=client&act=detall&id=' . $row->getId_client() . '&missatge">' . 'Veure' . '</a>' . '</td>';
                    echo '<td>' . '<a href="?ctl=client&act=modificar&id=' . $row->getId_client() . '&missatge">' . 'modificar' . '</a>' . '</td>';
                    echo '<td>' . '<a href="?ctl=client&act=eliminar&id=' . $row->getId_client() . '&missatge">' . 'eliminar' . '</a>' . '</td>';
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>

    </div>
</div>
</div>
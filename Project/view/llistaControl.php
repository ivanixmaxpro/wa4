
<div class="card">
    <div class="header">
        <h4 class="title">Control</h4>
        <p class="category">llistat control usuaris:</p>
    </div>
    <form action="?ctl=missatge&act=llista" method="post">
        <div class="form-group">
            Cercar per Usuari:
            <?php 
            createSelectUsuaris($usuaris);
            ?>
            <button name="Submit" class="btn btn-primary">Buscar per usuari</button>
        </div>
    </form> 
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped" id="tabla">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Usuari</th>
                    <th>Fitxat</th>
                    <th>Data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hora</th>
                    <th>Obrir</th>
                </tr></thead>
            <tbody>

                <?php
                foreach ($control as $row) {
                    $usuari = $empresa->searchUsuariById($row->getId_usuari());
                    echo '<tr>';
                    echo "<td>" . $row->getId_control() . "</td>";
                    echo "<td>" . $usuari->getNom() . "</td>";
                    echo "<td>" . $row->getFitxat() . "</td>";
                    echo "<td>" . $row->getData() . "</td>";
                    echo '<td>' . '<a href="?ctl=missatge&act=detall&id=' . $row->getId_missatge() . '&missatge">' . 'Veure' . '</a>' . '</td>';
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>

    </div>
</div>
</div>
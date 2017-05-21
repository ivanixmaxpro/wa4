<div class="card">
    <div class="header">
        <p class="category">Missatges interns:</p>
    </div>
    <form action="?ctl=missatge&act=llista" method="post">
        <div class="form-group">
            Cercar per Titol:
            <input type="text" name="titol" id="nom" value="<?php
            if (isset($titol)) {
                echo $titol;
            }
            ?>">
            <button name="Submit" class="btn btn-primary">Buscar</button>
            <a href="?ctl=missatge&act=crear" class="btn btn-primary">Crear missatge</a>
        </div>
    </form> 
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped" id="tabla">
            <thead>
                <tr>
                    <th>Emissor</th>
                    <th>Llegit</th>
                    <th>Titol</th>
                    <th>Dia</th>
                    <th>Hora</th>
                    <th>Obrir</th>
                </tr></thead>
            <tbody>
                <?php
                foreach ($missatges as $row) {
                    $dta = new DateTime($row->getData());
                    $dtaBona = $dta->format('d-m-Y H:i:s');
                    $temps = explode(" ", $dtaBona);

                    echo '<tr>';
                    echo "<td>" . $row->getId_usuari() . "</td>";
                    echo "<td>" . $row->getLlegit() . "</td>";
                    echo "<td>" . $row->getTitol() . "</td>";
                    echo "<td>" . $temps[0] . "</td>";
                    echo "<td>" . $temps[1] . "</td>";
                    echo '<td>' . '<a href="?ctl=missatge&act=detall&id=' . $row->getId_missatge() . '&missatge">' . 'Veure' . '</a>' . '</td>';
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>
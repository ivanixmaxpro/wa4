<form role="form" method="post" action="?ctl=horari&act=modificar" >    
    <table id="taulaHoraris" class="table table-bordered">
        <thead>
            <tr>
                <th>Dia</th>
                <th>Hora Inici</th>
                <th>Hora Final</th>
                <th>Festa?</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($dies as $dia) {
                echo '<tr>';
                echo '<td>' . $dia->getNom() . '<input type="text" name="' . $dia->getNom() . '" value="' . $i . '" hidden></td>';
                echo '<td> <input type="time" id="time" name="horaInici_' . $i . '" value="' . $llistatHorari[$i]->getHoraInici() . '"/></td>';
                echo '<td> <input type="time" id="time" name="horaFinal_' . $i . '" value="' . $llistatHorari[$i]->getHoraFinal() . '"/></td>';
                if ($llistatHorari[$i]->getHoraInici() == null || $llistatHorari[$i]->getHoraFinal() == null) {
                    echo '<td> <input type="checkbox" name="festa' . $i . '" value="1" checked></td>';
                } else {
                    echo '<td> <input type="checkbox" name="festa' . $i . '" value="1"></td>';
                }
                echo '</tr>';
                $i++;
            }
            ?>

        </tbody>
    </table>

    <input name="id_usuari" id="passarArray" type="hidden" value="<?php echo $id; ?>"></input>
    <input type="submit" id="botoModificarHorari" name="submit" value="Modificar" class="btn btn-danger"></input>
</form>



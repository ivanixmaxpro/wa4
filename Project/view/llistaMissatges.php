
<div class="card">
    <div class="header">
        <h4 class="title">Missatges</h4>
        <p class="category">Missatges interns:</p>
    </div>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Emissor</th>
                <th>Llegit</th>
                <th>Titol</th>
                <th>data</th>
                <th>Obrir</th>
            </tr></thead>
            <tbody>

            <?php
            
            foreach ($missatges as $row) {
               
                echo '<tr>';
                echo "<td>" .$row->getId_usuari(). "</td>";
                echo "<td>" .$row->getLlegit(). "</td>";
                echo "<td>" .$row->getTitol()  . "</td>";
                echo "<td>" .$row->getData()  . "</td>";
                echo '<td>'.'<a href="?ctl=missatge&act=detall&id='.$row->getId_missatge().'&missatge">'.'Veure'.'</a>'.'</td>';
                echo "</tr>";
                
                
            }
            ?>

            </tbody>
        </table>

    </div>
</div>
</div>
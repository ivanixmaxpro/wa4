
<div class="card">
    <div class="header">
        <h4 class="title">Llista productes</h4>
        <p class="category">A continuació un llistat:</p>
    </div>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
            <tr><th>ID</th>
                <th>Nom</th>
                <th>marca</th>
                <th>model</th>
                <th>preuBase</th>
                <th></th>
            </tr></thead>
            <tbody>

            <?php
            
            foreach ($productes as $row) {
               
                echo '<tr>';
                echo "<td>" .$row->getId_producte()  . "</td>";
                echo "<td>" .$row->getNom()  . "</td>";
                echo "<td>" .$row->getMarca()  . "</td>";
                echo "<td>" .$row->getModel()  . "</td>";
                echo "<td>" .$row->getpreuBase()  . "</td>";
                echo '<td>'.'<a href="?ctl=producte&act=detall&id='.$row->getId_producte().'">'.'Veure'.'</a>'.'</td>';
                echo "</tr>";
                
                
            }
            ?>

            </tbody>
        </table>

    </div>
</div>
</div>
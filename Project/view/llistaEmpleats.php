
<div class="card">
    <div class="header">
        <h4 class="title">Llista empleats</h4>
        <p class="category">A continuació un llistat de tots els nostres empleats:</p>
    </div>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
            <tr><th>ID</th>
                <th>Nom</th>
                <th>Cognoms</th>
                <th>DNI</th>
                <th>Localitat</th>
                <th></th>
            </tr></thead>
            <tbody>

            <?php
            
            foreach ($empleats as $row) {
               
                echo '<tr>';
                echo "<td>" .$row->getId_empleat()  . "</td>";
                echo "<td>" .$row->getNom()  . "</td>";
                echo "<td>" .$row->getCognom()  . "</td>";
                echo "<td>" .$row->getDni()  . "</td>";
                echo "<td>" .$row->getLocalitat()  . "</td>";
                echo '<td>'.'<a href="?ctl=empleat&act=detall&id='.$row->getId_empleat().'">'.'Veure'.'</a>'.'</td>';
                echo "</tr>";
                
                
            }
            ?>

            </tbody>
        </table>

    </div>
</div>
</div>
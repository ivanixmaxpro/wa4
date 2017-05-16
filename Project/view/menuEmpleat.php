<div class="btn-group" role="group" aria-label="...">
    <h3>Tens selecionat l'empleat: <?php echo $empleat->getNom(); ?> amb DNI: <?php echo $empleat->getDni()?></h3>
    <a href="?ctl=empleat&act=modificar&id=<?php echo  $empleat->getId_empleat()?>"><button type="button" class="btn btn-default">Modificar empleat</button></a>
    <a href="?ctl=empleat&act=eliminar&id=<?php echo  $empleat->getId_empleat()?>"><button type="button" class="btn btn-default">Eliminar empleat</button></a>
    <a><button id="opener" class="btn btn-default" type="button" class="btn btn-default">Veure horari</button></a>
    <a href="?ctl=empleat&act=llista&id=<?php echo  $empleat->getId_empleat()?>"><button type="button" class="btn btn-default">Modificar horari</button></a>
    <a href="?ctl=empleat&act=llista"><button type="button" class="btn btn-default">Tornar</button></a>
</div>
<div class="content">
    <script>
        $(function() {
            $("#dialog").dialog({
                autoOpen: false,
                width: 1000,
                height: 400,
                show: {
                    effect: "blind",
                    duration: 1000
                },
                hide: {
                    effect: "explode",
                    duration: 1000
                }
            });

            $("#opener").on("click", function() {
                $("#dialog").dialog("open");
            });
        } );
    </script>
    </head>
    <body>

    <div id="dialog" title="Horari del empleat">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Dia</th>
                <th>Hora entrada</th>
                <th>Hora sortida</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if(is_array($horari)){
                foreach ($horari as $dia){
                    echo "<tr>";
                    echo "<td>".$dia[0]."</td>";
                    echo "<td>".$dia[1]."</td>";
                    echo "<td>".$dia[2]."</td>";
                    echo "</tr>";
                }
            }else{
                echo $horari;
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

</div>
</div>
</div>
</div>



<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="content">
                <form>
                    <h4 class="">Dades</h4>
           <div class="row ">
               <div class="col-md-11">
                <img class="pull-right" width="150" height="150" src="<?php echo $empleat->getImatge()?>" alt="...">
               </div>
            </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nom</label>
                                <?php
                                echo '<input type="text" class="form-control" placeholder="Nom" value="' . $empleat->getNom() . '" disabled>';
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cognoms</label>
                                <?php
                                echo '<input type="text" class="form-control" placeholder="Cognom" value="' . $empleat->getCognom() . '" disabled>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DNI</label>
                                <?php
                                echo '<input type="text" class="form-control" placeholder="DNI" value="' . $empleat->getDni() . '" disabled>';
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Localitat</label>
                                <?php
                                echo '<input type="text" class="form-control" placeholder="DNI" value="' . $empleat->getLocalitat() . '" disabled>';
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NSS</label>
                                <?php
                                echo '<input type="text" class="form-control" placeholder="Company" value="' . $empleat->getNss() . '" disabled>';
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nòmina</label>
                                <?php
                                echo '<input type="text" class="form-control" placeholder="DNI" value="' . $empleat->getNomina() . '€/mes" disabled>';
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Sobre l'empleat</label>
                                <?php
                                echo '<textarea rows="5" class="form-control" placeholder="Here can be your description" disabled>' . $empleat->getDescripcio() . '</textarea>';
                                ?>
                            </div>
                        </div>
                    </div>


                    <div class="clearfix">

                    </div>
                </form>
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
                        <div class="row">
                            <div class="col-md-6">
                                <button id="opener">HORARI</button>
                            </div>
                            <div class="col-md-6">
                                <?php
                                if($permisos['edicio'] == 0){
                                    echo "No pots modificar l'informació, siusplau, si vols fer algún canvi posis amb contacte amb recursos humans.";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
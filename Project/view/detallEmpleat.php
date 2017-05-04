
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="header">
                <h4 class="title">Profile</h4>
            </div>
            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <?php
                                echo '<input type="text" class="form-control" placeholder="Nom" value="' . $empleat->getNom() . '" disabled>';
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <?php
                                echo '<input type="text" class="form-control" placeholder="Cognom" value="' . $empleat->getCognom() . '" disabled>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company</label>
                                <?php
                                echo '<input type="text" class="form-control" placeholder="Company" value="' . $empleat->getId_empresa() . '" disabled>';
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DNI</label>
                                <?php
                                echo '<input type="text" class="form-control" placeholder="DNI" value="' . $empleat->getDni() . '" disabled>';
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
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
                                <label>Nomina</label>
                                <?php
                                echo '<input type="text" class="form-control" placeholder="DNI" value="' . $empleat->getNomina() . '" disabled>';
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>About Me</label>
                                <?php
                                echo '<textarea rows="5" class="form-control" placeholder="Here can be your description" disabled>' . $empleat->getDescripcio() . '</textarea>';
                                ?>

                            </div>
                        </div>
                    </div>


                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-user">
            <div class="image">
                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
            </div>
            <div class="content">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="https://paracortarselasvenasconunapaladepescado.files.wordpress.com/2016/08/images1.jpg?w=240" alt="...">
                        <?php
                        echo '<h4 class="title">' . $empleat->getNom() . ' ' . $empleat->getCognom() . '<br>' .
                        '<small>' . $empleat->getId_empresa() . '</small>'
                        . '</h4>';
                        ?>
                    </a>
                </div>
            </div>
            <hr>

        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="content">
                <div class="author">
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
                            if(isarray($horari)){
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
                    <button id="opener">HORARI</button>
        </div>
    </div>

</div>
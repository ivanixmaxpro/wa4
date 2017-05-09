<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Fitxar</h4>
            </div>
            <div class="content">
                <div class="col-md-6">
                    <div id="fixat" class="hidden"><?php echo $control->getFitxat(); ?>
                    </div>
                    <div id="fitxarOn" class="img-thumbnail" >
                                <img src="view/images/fitxar_on.png" height="75" width="75" />
                        Recorda fitxar en quan entris a trenallar. Bon dia :)
                            </div>
                        <div id="fitxarOff" class="img-thumbnail">
                            <img src="view/images/fitxar_off.png" height="75" width="75" />
                            Gracies per fitxar, l'hora d'entrada ha sigut registrada. Recorda fitxar al anar-ten.
                            <?php
                            if(isset($eight) == true){
                                echo "\nPortes més de 8 hores treballant. Hauries de descansar o pasar report de les teves hores extres.";
                            }
                            ?>
                        </div>
                        <div>fet una vista per fitxar, posar si está o no está treballant</div>
                </div>
                <div class="col-md-6 content">
                    <h5>Últims 8 registres d'entrada y sortida:</h5>
                    <?php
                    if(isset($fitxesEmpleat)) {
                        foreach ($fitxesEmpleat as $fitxa) {
                            $data= $fitxa->getData();
                            $horaData = explode(" ", $data);
                            $date = new DateTime($horaData[0]);

                            if($fitxa->getFitxat() == true){

                                ?>
                                <div class="content card row">
                                    <div class="col-md-12">
                                        <div class="col-md-1">
                                            <img src="./view/images/entrada.png" height="25" width="25" />
                                        </div>
                                        <div class="col-md-11">
                                            <h6><?= $date->format('d-m-Y'); ?> a les <?= $horaData[1] ?></h6>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>
                            <div class="content card row">
                                <div class="col-md-12">
                                    <div class="col-md-1">
                                        <img src="./view/images/sortida.png" height="25" width="25" />
                                    </div>
                                    <div class="col-md-11">
                                        <h6><?= $date->format('d-m-Y'); ?> a les <?= $horaData[1] ?></h6>
                                    </div>
                                </div>
                            </div>

                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

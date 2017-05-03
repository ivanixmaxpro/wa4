<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Fitxar</h4>
            </div>
            <div class="content">
                <div id="fixat" class="hidden"><?php echo $control->getFitxat(); ?></div>
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
        </div>
    </div>
</div>

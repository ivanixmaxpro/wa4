<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Fitxar</h4>
            </div>
            <div class="content">
                <?php
                // if user is not filed
                if($control->getFitxat() == 1){
                    ?>
                        <div class="img-thumbnail" >
                            <img src="view/images/fitxar_on.png" height="75" width="75" />
                            <button id="fitxarOn">Fitxar</button>
                        </div>
                <?php
                }else{
                    ?>
                    <div class="img-thumbnail">
                        <img src="view/images/fitxar_off.png" height="75" width="75" />
                        <button id="fitxarOff" >Desfitxar</button>
                    </div>
                <?php
                }
                ?>
                <div>fet una vista per fitxar, posar si está o no está treballant</div>
            </div>
        </div>
    </div>
</div>

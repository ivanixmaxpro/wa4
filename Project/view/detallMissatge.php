
<div class="col-lg-12">
    <div class="container">

        <div class="row col-lg-8 col-lg-push-3 ">
            <div class="thumbnail col-lg-11 col-lg-pull-1  text-center">

                <h3>Missatge de: <?php echo $missatge->getId_usuari(); ?></h3>
                <h5><?php echo $missatge->getTitol(); ?></h5> 
                <h5><?php echo $missatge->getData(); ?></h5> 
                <h5><?php echo $missatge->getMissatge(); ?></h5> 
                <a href="index.php?ctl=missatge&act=llistaMissatges"><button class="btn btn-default">Tornar</button></a>
            </div>
        </div> 
    </div>
</div>



<div class="col-lg-12">
    <div class="container">

        <div class="row col-lg-8 col-lg-push-3 ">
            <div class="thumbnail col-lg-11 col-lg-pull-1  text-center">

                <h3><?php echo $client->getNom(); ?></h3>
                <h5><?php echo $client->getCodi(); ?></h5> 
                <p><?php echo $client->getInformacio(); ?></p> 
                
                <a href="index.php?ctl=client&act=llista">tornar a clients</a>     
            </div>
        </div> 
    </div>
</div>



<div class="col-lg-12">
    <div class="container">

        <form action="?ctl=client&act=modificar&id=<?php echo $id; ?>" method="post">
            <div class="form-group">
                <label>Nom: </label>
                <input type="text" id="nom" name="nom" class="form-control" value="<?php echo $client->getNom(); ?>" readonly>
                <img class="icon" src="view/images/confirm.png" hidden id="correctcognom1"/>
                <img class="icon" src="view/images/error.png" hidden id="errorcognom1"/>
            </div>
            <div class="form-group">
                <label>Codi:</label>
                <input type="text" id="codi" name="codi" class="form-control" value="<?php echo $client->getCodi() ?>" readonly>
                <img class="icon" src="view/images/confirm.png" hidden id="correctcognom2"/>
                <img class="icon" src="view/images/error.png" hidden id="errorcognom2"/>
            </div>

            <div class="form-group">
                <label for="informacio">Informacio:</label>
                <textarea disabled class="form-control" rows="5" id="informacio" name="informacio"><?php echo $client->getInformacio() ?></textarea>
            </div>

        </form>
        <a href="index.php?ctl=client&act=llista"><button class="btn btn-primary">Tornar</button></a>
    </div>
</div>


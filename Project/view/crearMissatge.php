
<div class="container">  
    </br>
    <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
        <form action="?ctl=actor&act=afegir" method="post">  
            <h1 class="text-center">Afegir Actor</h1>
            <small class="col-xs-offset-2 col-md-offset-1 col-sm-offset-1  col-lg-offset-3">Introdueix les dades del nou actor </small></br>
            <div class="form-group">
                <label>DNI:</label>
                <input type="text" id="dni" name="dni" class="form-control"  required>
                <img class="icon" src="view/images/confirm.png" hidden id="correctDni"/>
                <img class="icon" src="view/images/error.png" hidden id="errorDni"/>
            </div>
            <div class="form-group">
                <label>Nom:</label>
                <input type="text" id="nom" name="nom" class="form-control" required>
                <img class="icon" src="view/images/confirm.png" hidden id="correctnom"/>
                <img class="icon" src="view/images/error.png" hidden id="errornom"/>
            </div>
            <div class="form-group">
                <label>1º Cognom: </label>
                <input type="text" id="cognom1" name="cognom1" class="form-control"  required >
                <img class="icon" src="view/images/confirm.png" hidden id="correctcognom1"/>
                <img class="icon" src="view/images/error.png" hidden id="errorcognom1"/>
            </div>
            <div class="form-group">
                <label>2º Cognom:</label>
                <input type="text" id="cognom2" name="cognom2" class="form-control"  required>
                <img class="icon" src="view/images/confirm.png" hidden id="correctcognom2"/>
                <img class="icon" src="view/images/error.png" hidden id="errorcognom2"/>
            </div>
            <div class="form-group">
                <label>Sexe:</label>
                <?php
                $sexe = new Sexedb();
                $selsexe = $sexe->createSelectCategories();
               
                echo $selsexe;
                ?>
                <img class="icon" src="view/images/confirm.png" hidden id="correctsexe"/>
                <img class="icon" src="view/images/error.png" hidden id="errorsexe"/>
            </div>
           
            <div class="form-group">
                <label>Foto:</label>
                <input type="text" id="foto" name="foto" class="form-control"  required>
                <img class="icon" src="view/images/confirm.png" hidden id="correctfoto"/>
                <img class="icon" src="view/images/error.png" hidden id="errorfoto"/>
            </div>
          
            <div class="form-group">
                <label>Descripcio:</label>
                <textarea class="form-control" id="descripcio" name="descripcio" rows="4" cols="4"></textarea>
                <img class="icon" src="view/images/confirm.png" hidden id="correctdescripcio"/>
                <img class="icon" src="view/images/error.png" hidden id="errordescripcio"/>
            </div>
            
            <div class="col-md-offset-3 col-xs-offset-2">
                <button name="Submit" class="btn btn-primary btn-lg"><image class="btn-icon" src="view/images/afegir.png"/>  Afegir </button>
            </div>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="afegirCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Afegir Categoria</h4>
                </div>
                <div class="modal-body">
                    <div  class="col-xs-12 col-md-12 col-lg-12 ">        
                        <form action="?ctl=categoria&act=afegir" method="post">  
                            <h1 class="text-center">Afegir Categoria</h1>
                            <div class="col-xs-6 col-xs-offset-3  form-group">
                                <label>ID:</label>
                                <input type="text" name="id" class="form-control" />
                            </div>
                            <div class="col-xs-6 col-xs-offset-3  form-group">
                                <label>Nom:</label>
                                <input type="text" name="nom" class="form-control" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tancar</button>
                    <button type="submit" class="btn btn-primary">Afegir</button>
                </div>
            </div>
        </div>
    </div>
</div>

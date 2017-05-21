<form role="form" method="post" action="?ctl=permis&act=modificar" >

        Marca per afeguir el permís a aquest usuari, desmarca per treure-li.
    
    <div class="card">
    <table id="taulaPermisos" class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Visualitzar</th>
                <th>Crear</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
         <?php
         foreach ($llistatPermissos as $permis) {
          echo '<tr>';   
          echo '<td>'.$permis->getNom().'</td>';
          if ($permis->getVisualitzar() == 1) {
          echo '<td> <input type="checkbox" name="visualitzar_'.$permis->getNom().'" value="1" checked></td>';  
          } else {
          echo '<td> <input type="checkbox" name="visualitzar_'.$permis->getNom().'" value="1"></td>';    
          }
          if ($permis->getCrear() == 1) {
          echo '<td> <input type="checkbox" name="crear_'.$permis->getNom().'" value="1" checked></td>';  
          } else {
          echo '<td> <input type="checkbox" name="crear_'.$permis->getNom().'" value="1"></td>';    
          }
          if ($permis->getEditar() == 1) {
          echo '<td> <input type="checkbox" name="editar_'.$permis->getNom().'" value="1" checked></td>';  
          } else {
          echo '<td> <input type="checkbox" name="editar_'.$permis->getNom().'" value="1"></td>';    
          }
          if ($permis->getEliminar() == 1) {
          echo '<td> <input type="checkbox" name="eliminar_'.$permis->getNom().'" value="1" checked></td>';  
          } else {
          echo '<td> <input type="checkbox" name="eliminar_'.$permis->getNom().'" value="1"></td>';    
          }

          echo '</tr>';    
         }

         ?>
            
        </tbody>
    </table>
    </div>
    
    <input name="id_usuari" id="passarArray" type="hidden" value="<?php echo  $id;?>"></input>
    <input type="submit" id="botoModificarPermissos" name="submit" value="Modificar" class="btn btn-danger"></input>
</form>



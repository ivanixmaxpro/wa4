
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
          echo '<td> <input type="checkbox" name="visualitzar_'.$permis->getNom().'" value="1" checked disabled></td>';
          } else {
          echo '<td> <input type="checkbox" name="visualitzar_'.$permis->getNom().'" value="1" disabled></td>';
          }
          if ($permis->getCrear() == 1) {
          echo '<td> <input type="checkbox" name="crear_'.$permis->getNom().'" value="1" checked disabled></td>';
          } else {
          echo '<td> <input type="checkbox" name="crear_'.$permis->getNom().'" value="1" disabled></td>';
          }
          if ($permis->getEditar() == 1) {
          echo '<td> <input type="checkbox" name="editar_'.$permis->getNom().'" value="1" checked disabled></td>';
          } else {
          echo '<td> <input type="checkbox" name="editar_'.$permis->getNom().'" value="1" disabled></td>';
          }
          if ($permis->getEliminar() == 1) {
          echo '<td> <input type="checkbox" name="eliminar_'.$permis->getNom().'" value="1" checked disabled></td>';
          } else {
          echo '<td> <input type="checkbox" name="eliminar_'.$permis->getNom().'" value="1" disabled></td>';
          }

          echo '</tr>';    
         }

         ?>
            
        </tbody>
    </table>

    <a href="?ctl=empleat&act=llista"><button class="btn btn-primary">Tornar</button></a>



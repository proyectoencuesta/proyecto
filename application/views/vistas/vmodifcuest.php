         <center>
        <nav class="navbar navbar-dark bg-primary">
         <div style="color: white"> <h1>Cuestionario</h1></div>  
          </nav> 
           <br><br>
            <!--enlace que te regresa a la pagina de principal-->
           <a href="<?php echo site_url('Controller1/cuestionario');?>" style="color:#08088A"><strong><u>Volver al inicio</u></strong></a>
           <br><br>

           <table class="table">
           <thead class="thead-dark">
             <tr>
              <th scope="col">id</th>
              <th scope="col">Nombre Cuestionario</th>
              <th scope="col">Acción Cuestionario</th>
             </tr>
            </thead>
            <tbody>
      
              <?php foreach($result as $row) {?>
               <tr>
               <th scope="row"><?php echo $row->id_cuestionario; ?></th>
               <td><?php echo $row->nombre_cuestionario; ?></td>
               <td><a class="btn btn-outline-success" href= "<?php echo site_url('Controller1/actualizarCuest'); ?>/<?php echo $row->id_cuestionario;?>"role="button">Actualizar</a> 
               <a class="btn btn-outline-danger" href= "<?php echo site_url('Controller1/deleteCuest'); ?>/<?php echo $row->id_cuestionario;?>"role="button">Eliminar</a>
               <a class="btn btn-outline-danger" href= "<?php echo site_url('Controller1/pregcuest'); ?>/<?php echo $row->id_cuestionario;?>"role="button">Agregar Preguntas</a>
               <?php } ?>
            </tbody>
           </table>

           <div>
           </div>            
         </center>
  

</body>
</html>
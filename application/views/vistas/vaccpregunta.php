<center>	
  <nav class="navbar navbar-dark bg-primary">
    <div style="color: white"> <h1>Acción Pregunta</h1></div>  
</nav>
<br><br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"># id</th>
      <th scope="col">Descripcion de la pregunta</th>
      <th scope="col">Accion-Pregunta</th>
    </tr>
  </thead>
  <tbody>
 <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->id; ?></th>
                <td><?php echo $row->descripcion; ?></td>
              <td> <a  class= "btn btn-outline-success"href="<?php echo site_url('Controller1/editarpreg');?>/<?php echo $row->id;?>" role = "button">Editar</a> 
                  <td><a class="btn btn-outline-danger" href= "<?php echo site_url('Controller1/eliminar'); ?>/<?php echo $row->id;?>"role="button">Borrar</a>
                
                <?php } ?>    
      
  </tbody>
</table>

 <a href="<?php echo site_url('Controller1/preguntas');?>" style="color:#154360"><strong><u>Volver a la pagina anterior</u></strong></a>
</center>
</body>
</html>
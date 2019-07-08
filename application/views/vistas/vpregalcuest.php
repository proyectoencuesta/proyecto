<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
        <center>
  <form method="POST" action="<?php echo site_url('Controller1/preguntaCuest')?>">
  <form method="POST" action="<?php echo site_url('Controller1/elimpreguntaCuest')?>">  
      <nav class="navbar navbar-dark bg-primary" align="center">
    <div style="color: white"> <h1>Añadir o Eliminar del Cuestionario</h1></div>  
</nav>
<br><br>
<div class="form-group">
    <label for="idioma">Selecciona una Pregunta</label>
    <!--  esta funcion guarda el id del cuestionario para despues almacenarlo en la otra tabla
    <input type="hidden" name="id_cuestionario" value="<?php echo $_POST['id_cuestionario']; ?>"-->
    <select class="form-control" name="resultado" id="">
 <?php foreach($result as $row) { ?> <option value="<?php echo $row->id; ?>" label="<?php echo $row->descripcion; ?>"></option>  <?php } ?>
    </select>
         
  </div>

  <button type="submit" class="btn btn-primary" value="Agregar">Agregar</button>
  <button type="submit" class="btn btn-primary" value="Eliminar">Eliminar</button><br><br>
  <a href="<?php echo site_url('Controller1/modificarCuest');?>" style="color:#154360"><strong><u>Volver a la pagina anterior</u></strong></a>
  </form>
  
</center>
</div>
</div>
</body>
</html>
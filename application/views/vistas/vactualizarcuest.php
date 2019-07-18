<div class=" container">

  <div class="row">
  <div class= "col-md-4"></div>
  <div class= "col-md-4">
    <br><br>
    <div id = "titulo8"><h1>Actualizar Cuestionario</h1></div>

    <!--Creamos de nuevo el formulario-->
     <form method="post" action="<?php echo site_url('Controller1/modifyCuest')?>/<?php echo $row->id_cuestionario; ?>">
     <div class="form-group">
        <br><br>
        <label for="exampleInputEmail1">Cambiar nombre Cuestionario</label>
        <input type="Text" class="form-control" name = "cuesti" value="<?php echo $row->nombre_cuestionario; ?>"aria-describedby="emailHelp" placeholder="actualizar nombre cuestionario" required>
     </div>
     <button type="submit" class="btn btn-primary" value="Agregar">Actualizar</button>
     <button type="submit" class="btn btn-outline-danger" value="Cancelar">Cancelar</button>
     </form>
  </div>
</div>

</div>  
</body>
</html>
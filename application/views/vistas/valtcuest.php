<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
				<center>
	<form method="POST" action="<?php echo site_url('Controller1/agregarCuestionario')?>">
		<nav class="navbar navbar-dark bg-primary" align="center">
    <div style="color: white"> <h1>Datos Cuestionario</h1></div>  
</nav>
<br><br>
<div class="form-group">
  <label> Nombre Cuestionario </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="nombre_cuestionario" placeholder="Ingresa el nombre del cuestionario ...."></textarea>
  </div>

  <button type="submit" class="btn btn-primary" value="Agregar">Agregar</button><br><br>
  <a href="<?php echo site_url('Controller1/cuestionario');?>" style="color:#154360"><strong><u>Volver a la pagina anterior</u></strong></a>
	</form>
	
</center>
</div>
</div>
</body>
</html>
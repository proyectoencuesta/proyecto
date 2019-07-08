<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
				<center>
	<form method="post" action="<?php echo site_url('Controller1/actualizar')?>/<?php echo $row->id; ?>">
	 <nav class="navbar navbar-dark bg-primary">
    <div style="color: white"> <h1>Redacta tu  Pregunta</h1></div>  
</nav>
		<br>

          <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="descripcion" placeholder="Redacta tu pregunta...."></textarea>
  </div>

  <button type="submit" class="btn btn-primary" value="Agregar">Agregar</button><br><br>
  <!--enlace que te lleva a la pagina de accione preguntas-->
  <a href="<?php echo site_url('Controller1/listapreg');?>" style="color:#154360"><strong><u>Volver a la pagina anterior</u></strong></a>
	</form>
	
</center>
</div>
</div>
</body>
</html>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
				<center>
	<form method="POST" action="<?php echo site_url('Controller1/agregarRespuesta')?>">
		<nav class="navbar navbar-dark bg-primary" align="center">
    <div style="color: white"> <h1>Redacta tu Respuesta</h1></div>  
</nav>
<br><br>
<div class="form-group">
    <label for="idioma">Seleccion una pregunta</label>
    <select class="form-control" name="resultado" id="">
 <?php foreach($result as $row) { ?> <option value="<?php echo $row->id; ?>" label="<?php echo $row->descripcion; ?>"></option>  <?php } ?>
    </select>
         
  </div>


<br><br>

          <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="descripcion" placeholder="Redacta tu Respuesta...."></textarea>
  </div>

  <button type="submit" class="btn btn-primary" value="Agregar">Agregar</button><br><br>
  <a href="<?php echo site_url('Controller1/respuestas');?>" style="color:#154360"><strong><u>Volver a la pagina anterior</u></strong></a>
	</form>
	
</center>
</div>
</div>
</body>
</html>
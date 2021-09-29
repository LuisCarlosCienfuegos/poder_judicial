<?php 


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title><?php echo $data["titulo"]; ?></title>
 </head>
 <body>
 <!--<h2>Vehiculos</h2> -->
 <h2><?php echo $data["titulo"]; ?></h2>

<form  id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=actualizar" autocomplete="off">
	<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>">
	nombre: <input type="text" name="nombre" id="nombre" value=" <?php echo $data["vehiculos"] ["nombre"] ?>"><br>
	telefono: <input type="text" name="telefono" id="telefono" value=" <?php echo $data["vehiculos"] ["telefono"] ?>"><br>
	asunto: <input type="text" name="asunto" id="asunto" value=" <?php echo $data["vehiculos"] ["asunto"] ?>"><br>
	correo electronico: <input type="text" name="correo_electronico" id="correo_electronico" value=" <?php echo $data["vehiculos"] ["correo_electronico"] ?>"><br>
	fecha_solicita: <input type="text" name="fecha_solicita" id="fecha_solicita" value=" <?php echo $data["vehiculos"] ["fecha_solicita"] ?>"><br>
	<button id="guardar" name="guardar" type="submit">Guardar</button>
	
</form>

	

 </body>
 </html>
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

<form  id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=guarda" autocomplete="off">
	nombre: <input type="text" name="nombre" id="nombre"><br>
	telefono: <input type="text" name="telefono" id="telefono"><br>
	asunto: <input type="text" name="asunto" id="asunto"><br>
	correo electronico: <input type="text" name="correo_electronico" id="correo_electronico"><br>
	fecha_solicita: <input type="text" name="fecha_solicita" id="fecha_solicita"><br>
	<button id="guardar" name="guardar" type="submit">Guardar</button>
	
</form>

	

 </body>
 </html>
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
	nombre_responsable: <input type="text" name="nombre_responsable" id="nombre_responsable"><br>
	
	<button id="guardar" name="guardar" type="submit">Guardar</button>
	
</form>

	

 </body>
 </html>
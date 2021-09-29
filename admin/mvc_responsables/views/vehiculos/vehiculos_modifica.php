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
	nombre_responsable: <input type="text" name="nombre_responsable" id="nombre" value=" <?php echo $data["vehiculos"] ["nombre_responsable"] ?>"><br>
	
	<button id="guardar" name="guardar" type="submit">Guardar</button>
	
</form>

	

 </body>
 </html>
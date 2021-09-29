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

 

	 <table border="1" width="80%">
		<!--  cabeceraz de tabla -->
	 	<thead>
	 	<tr>
	 		<th>nombre</th>
	 		<th>telefono</th>
	 		<th>asunto</th>
	 		<th>correo_electronico</th>
	 		<th>fecha_solicita</th>
	 		<th>nombre_responsable</th>
	 		<th>editar</th>
	 		<th>eliminar</th>
	 	</tr>
	 	</thead>
	 	<!--  cuerpo de tabla -->
		<tbody>
			<?php 
			foreach ($data["vehiculos"] as $dato ) { 
				echo "<tr>";
				echo "<td>".$dato["nombre"]."</td>";
				echo "<td>".$dato["telefono"]."</td>";
				echo "<td>".$dato["asunto"]."</td>";
				echo "<td>".$dato["correo_electronico"]."</td>";
				echo "<td>".$dato["fecha_solicita"]."</td>";
				echo "<td>".$dato["nombre_responsable"]."</td>";
				echo "<td><a href='index.php?c=vehiculos&a=modificar&id=".$dato["id"]."'>Modificar</a></td>";
				echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."'>Eliminar</a></td>";
				echo "</tr>";
			}
			 ?>
		</tbody>


	 </table>
<a href="../home.php"><input type="button" name="">Regresar</a><br><br>
 </body>
 </html>
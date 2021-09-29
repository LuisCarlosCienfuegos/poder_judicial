<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=usuarios.xls');

	require_once('conexion.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM tbl_solicitantes";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>id</th>
		<th>Nombre</th>
		<th>Telefono</th>
		<th>asunto</th>
		<th>correo electronico</th>
		<th>fecha solicitada</th>


	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['nombre']; ?></td>
					<td><?php echo $row['telefono']; ?></td>
					<td><?php echo $row['asunto']; ?></td>
					<td><?php echo $row['correo_electronico']; ?></td>
					<td><?php echo $row['fecha_solicitada']; ?></td>
				</tr>	

			<?php
		}

	?>
</table>
<?php  
class Vehiculos_model{
	private $db;
	private $vehiculos;
	
	public function __construct(){
		$this->db = Conectar::conexion();
		$this->vehiculos = array();

	}

	public function get_vehiculos(){
		$sql = "SELECT * FROM tbl_solicitantes";
		$resultado = $this->db->query($sql);
		while($row = $resultado->fetch_assoc()){
			$this->vehiculos[] = $row;
		}
		return $this->vehiculos;
	}

	public function insertar($nombre,$telefono,$asunto,$correo_electronico,$fecha_solicita,$nombre_responsable){
		$resultado = $this->db->query("INSERT INTO tbl_asigacion (nombre,asunto,telefono,correo_electronico,fecha_solicita,nombre_responsable) VALUES('$nombre','$telefono','$asunto','$correo_electronico','$fecha_solicita','$nombre_responsable') ");

	}

public function modificar($id,$nombre,$telefono,$asunto,$correo_electronico,$fecha_solicita,$nombre_responsable){
		$resultado = $this->db->query("UPDATE tbl_asigacion SET nombre='$nombre',telefono='$telefono',asunto='$asunto',correo_electronico='$correo_electronico',fecha_solicita='$fecha_solicita' nombre_responsable='$nombre_responsable' WHERE id='$id'");

		}

	public function eliminar($id){
		$resultado = $this->db->query("DELETE FROM tbl_asigacion WHERE id='$id'");

	}

	public function get_vehiculo($id){
		$sql = "SELECT * FROM tbl_asigacion WHERE id='$id' LIMIT 1";
		$resultado = $this->db->query($sql);
		$row = $resultado->fetch_assoc();
		return $row;
	}


}
?>
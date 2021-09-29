<?php  
class Vehiculos_model{
	private $db;
	private $vehiculos;
	
	public function __construct(){
		$this->db = Conectar::conexion();
		$this->vehiculos = array();

	}

	public function get_vehiculos(){
		$sql = "SELECT * FROM tbl_responsable";
		$resultado = $this->db->query($sql);
		while($row = $resultado->fetch_assoc()){
			$this->vehiculos[] = $row;
		}
		return $this->vehiculos;
	}

	public function insertar($nombre_responsable){
		$resultado = $this->db->query("INSERT INTO tbl_responsable (nombre_responsable) VALUES('$nombre_responsable') ");

	}

public function modificar($id,$nombre_responsable){
		$resultado = $this->db->query("UPDATE tbl_responsable SET nombre_responsable='$nombre_responsable' WHERE id='$id'");

		echo "UPDATE tbl_responsable SET nombre_responsable='$nombre_responsable' WHERE id='$id'";
	}

	public function eliminar($id){
		$resultado = $this->db->query("DELETE FROM tbl_responsable WHERE id='$id'");

	}

	public function get_vehiculo($id){
		$sql = "SELECT * FROM tbl_responsable WHERE id='$id' LIMIT 1";
		$resultado = $this->db->query($sql);
		$row = $resultado->fetch_assoc();
		return $row;
	}


}
?>
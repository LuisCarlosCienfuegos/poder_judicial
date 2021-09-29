<?php 
	Class VehiculosController{

	public function __construct(){
		require_once "models/VehiculosModel.php";

	}
		public function index(){
			require_once "models/VehiculosModel.php";
			$vehiculos = new  Vehiculos_model();
			$data["titulo"]= "Asignacion";
			$data["vehiculos"]= $vehiculos->get_vehiculos();

			require_once "views/vehiculos/vehiculos.php";

		}

		public function nuevo(){
			$data["titulo"]= "Asignacion";
			require_once "views/vehiculos/vehiculos_nuevo.php";
		}

		public function guarda(){
			
			$nombre = $_POST['nombre'];
			$telefono = $_POST['telefono'];
			$asunto = $_POST['asunto'];
			$correo_electronico = $_POST['correo_electronico'];
			$fecha_solicita = $_POST['fecha_solicita'];
			$nombre_responsable = $_POST['nombre_responsable'];

			$vehiculos = new Vehiculos_model();
			$vehiculos->insertar($nombre,$telefono,$asunto,$correo_electronico,$fecha_solicita,$nombre_responsable); 
			$data["titulo"]= "Solicita";
			$this->index();
			//require_once "views/vehiculos/vehiculos_nuevo.php";
		}

		public function actualizar(){
			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$telefono = $_POST['telefono'];
			$asunto = $_POST['asunto'];
			$correo_electronico = $_POST['correo_electronico'];
			$fecha_solicita = $_POST['fecha_solicita'];
			$nombre_responsable = $_POST['nombre_responsable'];
			

			$vehiculos = new Vehiculos_model();
			$vehiculos->modificar($id,$nombre,$telefono,$asunto,$correo_electronico,$fecha_solicita,$nombre_responsable); 
			$data["titulo"]= "Asignacion";
			$this->index();
			//require_once "views/vehiculos/vehiculos_nuevo.php";
		}

			public function modificar($id){
				$vehiculos = new Vehiculos_model();
				

			$data["id"]= $id;
			$data["vehiculos"]= $vehiculos->get_vehiculo($id);
			$data["titulo"]= "Asignacion";
			require_once "views/vehiculos/vehiculos_modifica.php";
		}

		public function eliminar($id){
			

			$vehiculos = new Vehiculos_model();
			$vehiculos->eliminar($id);
			$data["titulo"]= "Vehiculos";
			$this->index();
			//require_once "views/vehiculos/vehiculos_nuevo.php";
		}

	}
 ?>

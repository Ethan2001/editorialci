<?php 
class Candidato extends CI_Controller{
	
	public function index(){
		$this->load->view('candidato/crear');
	}
	
	public function crearPOST() {
		if (isset($_POST['nombre'])){
			$nombre = $_POST['nombre'];
			$nivel = $_POST['nivel'];
			
			$this->load->model('candidato_model');
			$this->candidato_model->crear($nombre,$nivel);
			
			$datos['candidato'] = ['nombre' =>$nombre, 'nivel'=>$nivel];
			$this->load->view('candidato/crearPOST', $datos);
		} else {
			$this->load->view('candidato/crear');
		}
	}
}

?>
<?php
class categoria extends CI_Controller{

	public function index() {
	$this->crear();
		enmarcar($this,'categoria/crear');
	}
	public  function crear(){
		enmarcar($this, 'categoria/crear');
	}
	public  function crearpost(){
		$nombre=$_POST['nombre'];
		$this->load->model('categoria_model');
		$this->categoria_model->crear($nombre);
		enmarcar($this, 'categoria/crearOk');
	}
	public function listar(){
		$this->load->model('categoria_model');
		$data['categorias']=$this->categoria_model->todos();
		enmarcar($this, 'categoria/listar',$data);
		
	}
}
?>
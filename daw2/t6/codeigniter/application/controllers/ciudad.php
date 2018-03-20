<?php
class ciudad extends CI_Controller{
	
	public  function crear(){
	 	enmarcar($this, 'ciudad/crearciudad');
	 }
	public  function crearpost(){
	 	$nombre=$_POST['nombre'];
	 	$this->load->model('ciudad_model');
	    $this->ciudad_model->crear ($nombre);
	 }
	 public function listar(){
	 	$this->listarfiltro();
	 }
	 public function listarfiltro($f=''){
	 	$filtro=isset($_POST['filtro'])?$_POST['filtro']:null;
	 	$this->load->model('ciudad_model');
	 	$datos['ciu']=$this->ciudad_model->getAll($filtro);
	 	$datos['filtro']=$filtro;
	 	enmarcar($this, 'ciudad/listar',$datos);
	 }
	 public function editar(){
	 	$id=isset($_POST['idciu'])?$_POST['idciu']:null;
	 	$filtro=isset($_POST['filtro'])?$_POST['filtro']:null;;
	 	$this->load->model('ciudad_model');
	 	$datos['lp']=$this->ciudad_model->getId($id);
	 	$datos['filtro']=$filtro;
	 	//esto pertenece a la vista-->importante
	 	enmarcar($this, 'ciudad/editar',$datos);
	 
	 
	 }
	 public function editarPost(){
	 	$nombre=isset($_POST['nombre'])?$_POST['nombre']:null;
	 	$id=isset($_POST['idciu'])?$_POST['idciu']:null;
	 	$this->load->model('ciudad_model');
	 	$this->ciudad_model->editar($id,$nombre);
	 	$this->listar();
	 
	 }
	 
	 public function borrar(){
	 	$id=$_POST['idciu'];
	 	$this->load->model('ciudad_model');
	 	$this->ciudad_model->borrar($id);
	 	$this->listar();
	 	 
	 }
	 
	 
	
	
}


?>
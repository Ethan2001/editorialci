<?php
class Lenguajes extends CI_Controller{

	public  function crear(){
		enmarcar($this, 'lenguajes/crearlenguaje');
	}
	public  function crearpost(){
		$nombre=$_POST['nombre'];
		$this->load->model('lenguaje_model');
		$this->lenguaje_model->crear($nombre);
		enmarcar($this,'lenguajes/crearlenguaje' );
	}
	public function listar(){
		$this->listarfiltro();
		
	}
	public function listarfiltro($f=''){
		$filtro=isset($_POST['filtro'])?$_POST['filtro']:null;
		$this->load->model('lenguaje_model');
		$datos['leng']=$this->lenguaje_model->getAll($filtro);
		$datos['filtro']=$filtro;
		enmarcar($this, 'lenguajes/listar',$datos);
	}
	public function editar(){
		$id=$_POST['idlp'];
		$filtro=isset($_POST['filtro'])?$_POST['filtro']:null;
		$this->load->model('lenguaje_model');
		$datos['lp']=$this->lenguaje_model->getId($id);
		$datos['filtro']=$filtro;
		//esto pertenece a la vista-->importante
		enmarcar($this, 'lenguajes/editar',$datos);
		
		
	}
	public function editarPost(){
		$nombre=$_POST['nombre'];
		$id=$_POST['idlp'];
		$this->load->model('lenguaje_model');
		$this->lenguaje_model->editar($id,$nombre);
		$this->listar();
	
	}
	
public function borrar(){
	$id=$_POST['idlp'];
	$this->load->model('lenguaje_model');
	$this->lenguaje_model->borrar($id);
	$this->listar();
   
}


}
?>
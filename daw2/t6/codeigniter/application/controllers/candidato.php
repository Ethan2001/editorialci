<?php
class candidato extends CI_Controller{

	public function index()
	{   $this->crear();
	enmarcar($this,'candidato/crear' );
	}
    public function crear(){
	$this->load->view('candidato/crear');
    
}
public  function  crearpost(){
	$nombre=$_POST['idnombre'];
	$opcion=$_POST['opcion'];
	$this->load->model('candidato_model');
   $this->candidato_model->crear($nombre,$opcion);
   //enmarcar($this,'candidato/crear' );
   $this->load->view('candidato/crear');
}
public function modificar(){
	$idnombre=isset($_POST['idnombre'])?$_POST['idnombre']:null;
	$this->load->model("candidato_model");
	$data['cand']=$this->candidato_model->getId($idnombre);
	$this->load->view('candidato/editar',$data);
}
public function modificarpost(){
	$nnombre=isset($_POST['nnombre'])?$_POST['nnombre']:null;
	$idnombre=isset($_POST['idnombre'])?$_POST['idnombre']:null;
	$this->load->model("candidato_model");
	$this->candidato_model->editar($idnombre,$nnombre);
	$data['can']=$this->candidato_model->todos();
	$this->load->view('candidato/listar',$data);
	//enmarcar($this, 'candidato/listar',$data);
}

public function listar(){
	 $this->load->model('candidato_model');
	$data['can']=$this->candidato_model->todos(); 
	//enmarcar($this, 'candidato/listar',$data);
	$this->load->view('candidato/listar',$data);
}

public function  borrar(){
	$idnombre=$_POST['idnombre'];
	$this->load->model('candidato_model');
    $this->candidato_model->borrar($idnombre);
    $this->listar();
}
}
?>
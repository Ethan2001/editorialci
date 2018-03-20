<?php 

class Empleado extends CI_Controller{
	
	 public  function login(){
	 	//$this->load->view('/empleado/empleado_login');
	 	enmarcar($this,'/empleado/empleado_login' );
	 
	 	
	 }
	 public  function crear(){
	 	$this->load->model('ciudad_model');
	 	$this->load->model('lenguaje_model');
	 	// recuerda que te daba error porque el nombre de la funcion que llamavas no  la encontraba
	 	// ojo con el nombre de la funciones
	 	$datos['ciu']=$this->ciudad_model->getAll();
	 	$datos['leng']=$this->lenguaje_model->getAll(); 
	 	enmarcar($this, 'empleado/crear',$datos);
	 }
	 public  function crearpost(){
	 
	 	$nombre=$_POST['nombre'];
	 	$passwd=$_POST['passwd'];
	 	$ap1=$_POST['ap1'];
	 	$ap2=$_POST['ap2'];
	 	$tlf=$_POST['tlf'];
	 	$idciudad=isset($_POST['idciudad'])?$_POST['idciudad']:null;
	 	$idleng=isset($_POST['idleng'])?$_POST['idleng']:null;
	 	$this->load->model('empleado_model');
	 	$this->empleado_model->crear($nombre,$passwd,$ap1,$ap2,$tlf,$idciudad,$idleng);
	 }
	 public function listar() {
	 	$this->listarPost ();
	 }
	 public function listarPost($f = '') {
	 	$filtro = isset ( $_POST ['filtro'] ) ? $_POST ['filtro'] : $f;
	 	$this->load->model('empleado_model');
	 	$datos['empleados']= $this->empleado_model->getAll($filtro);
	 	$datos['filtro'] =$filtro;
	 	enmarcar($this, 'empleado/listar', $datos);
	 }
	 public function borrar(){
	 	$id=$_POST['idn'];
	 	$this->load->model('empleado_model');
	 	$this->empleado_model->borrar($id);
	 	$this->listar();
	 }
	 public function loginform(){
	 	$nombre=$_POST['nombre'];
	 	$contrasena=$_POST['contrasena'];
	 	$this->load->model('empleado_model');
	 	$ok = $this->empleado_model->verificar ( $nombre, $contrasena );
	 	enmarcar($this,'/empleado/empleado_login');
	 }
	 
	 
}


?>
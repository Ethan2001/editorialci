<?php
class Controlador extends CI_Controller{
    public function __construct(){
        parent::__construct();
    // cargo helper y modelo (donde esta nuestro array)
        $this->load->helper("url");
        $this->load->model("modelo");
    }
    public function index(){
   // dato que enviare a p�gina
        $data["datox"]="Cargar datos por ajax <br />";
   // cargo la vista (paginaArray) que cargar� el m�todo por default y env�o datos
        $this->load->view("paginaArray",$data);
    }
    public function cargaDatos(){
        // estos son los datos que se cargar�n con AJAX
        // De nuestro modelo, invoco el m�todo cargarArray
        $data["datos"]= $this->modelo->cargarArray();
        // cargo la vista donde se mostrar�n los datos: paginaArray2
        $this->load->view("paginaArray2",$data);
    }
}
?>

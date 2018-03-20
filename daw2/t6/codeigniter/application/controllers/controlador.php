<?php
class Controlador extends CI_Controller{
    public function __construct(){
        parent::__construct();
    // cargo helper y modelo (donde esta nuestro array)
        $this->load->helper("url");
        $this->load->model("modelo");
    }
    public function index(){
   // dato que enviare a página
        $data["datox"]="Cargar datos por ajax <br />";
   // cargo la vista (paginaArray) que cargará el método por default y envío datos
        $this->load->view("paginaArray",$data);
    }
    public function cargaDatos(){
        // estos son los datos que se cargarán con AJAX
        // De nuestro modelo, invoco el método cargarArray
        $data["datos"]= $this->modelo->cargarArray();
        // cargo la vista donde se mostrarán los datos: paginaArray2
        $this->load->view("paginaArray2",$data);
    }
}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inicio extends CI_Controller {
  
      public function __construct()
      {
      	 parent::__construct();
         $this->load->model('Usuarios');
         $this->load->database('default');
      } 

	public function index()
	{
		$this->load->view('inicio');
	}
	public function usuarios()
	{
		$this->load->view('usuarios');
	}
	public function agregarusuarios()
	{
		$this->load->view('nuevo_usuario_viws');
	}
	public function insertarusuarios()
	{
		$nombre = $this->input->post('nombre');
		$apellido = $this->input->post('apellido');
		$guardar_datos = $this->Usuarios->insertarusuarios_model($nombre, $apellido); 
	}
	public function eliminarusuarios()
	{
		$this->load->view('eliminar_usuario_viws');
	}
	public function eliminar()
	{
		$id = $this->input->post('id');
		$guardar_datos = $this->Usuarios->eliminar_usuario_model($id); 
	}
	public function updateusuarios()
	{
		$this->load->view('cambiar_usuario_viws');
	}
	public function cambiarusuarios()
	{
		$id = $this->input->post('id');
		$nombre = $this->input->post('nombre');
		$apellido = $this->input->post('apellido');
		$guardar_datos = $this->Usuarios->cambiar_usuario_model($id, $nombre, $apellido); 
   }
}

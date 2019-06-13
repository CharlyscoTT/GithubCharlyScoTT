<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

     public function __construct()
      {
      	 parent::__construct();
         $this->load->model('Usuarios');
         $this->load->database('default');
      } 

	public function agregarusuarios()
	{
		$this->load->view('forgot');
	}
	public function registrarusuarios()
	{
		$usuario = $this->input->post('usuario');
		$correo = $this->input->post('correo');
		$contrasena= $this->input->post('contrasena');
		$guardar_datos = $this->Usuarios->registrarusuarios_model($usuario, $correo, $contrasena); 
	}
    /*index es el menu de incio general */
	public function index()
	{
		$this->load->view('index');
	}
	/*lista en general*/
    public function listageneral()
	{
		$this->load->view('listageneral');
	}
	 /*Login usuario*/
	public function login()
	{
		$this->load->view('login');
	}
	/*forgot para recuperar contraseña*/
	public function forgot()
	{
		$this->load->view('forgot');
	}	
	/*rconexito es registro con exito para usuario*/
	public function rconexito()
	{
		$this->load->view('rconexito');
	}
	/*vista de usuarios*/
 
	/*lista de usuarios*/
    public function listausuario()
	{
		$this->load->view('listausuario');
	}
    /*color de usuarios*/
    public function colordepinturausuario()
	{
		$this->load->view('colordepinturausuario');
	}
	/*tipo de llantas usuarios*/
    public function Tipodellantasusuario()
	{
		$this->load->view('Tipodellantasusuario');
	}
	/*pais de fabricacion usuarios*/
    public function paisdefabricacionusuario()
	{
		$this->load->view('paisdefabricacionusuario');
	}
	/*año usuarios*/
    public function anousuario()
	{
		$this->load->view('anousuario');
	}
    /*marca de la opcion usuarios*/
    public function marcausuario()
	{
		$this->load->view('marcausuario');
	}
    /*marca de la opcion usuarios*/
    public function modelousuario()
	{
		$this->load->view('modelousuario');
	}
	/*marca de la opcion usuarios*/
    public function serieusuario()
	{
		$this->load->view('serieusuario');
	}
		public function baja()
			{
				$this->load->view('admineliminarcoche');
			}

     /*Todo lo de Admin aqui !!!!*/
	/*Login admin*/
	public function loginadmin()
	{
		$this->load->view('loginadmin');
	}
	/*admin menu*/
	public function adminmenu()
	{
		$this->load->view('adminmenu');
	}
	/*Admin agregar coche*/
    public function adminagregarcoche()
	{
		$this->load->view('adminagregarcoche');
	}
	public function registrarcoche()
	{
		$this->load->view('adminagregarcoche');
		$modelo = $this->input->post('modelo');
		$marca = $this->input->post('marca');
		$pais= $this->input->post('pais');
		$ano= $this->input->post('ano');
		$color= $this->input->post('color');
		$serie= $this->input->post('serie');
		$guardar_datos = $this->Usuarios->registrarcoche_model($modelo, $marca, $pais, $ano, $color, $serie); 
		
	}
	
	public function eliminarcoche()
	{
		$id = $this->input->post('id');
		$guardar_datos = $this->Usuarios->admineliminar_model($id);
		$this->load->view('adminmenu');
	} 
	public function editar()
	{
		
        $id = $this->input->post('id');
		$modelo = $this->input->post('modelo');
		$marca = $this->input->post('marca');
		$pais= $this->input->post('pais');
		$ano= $this->input->post('ano');
		$color= $this->input->post('color');
		$serie= $this->input->post('serie');
		$guardar_datos = $this->Usuarios->admineditarcoche_model($id, $modelo, $marca, $pais, $ano, $color, $serie);
        $this->load->view('adminmenu');
   }

   /*edicion coche admin*/
	public function ed()
	{
		$this->load->view('admineditarcoche');
	}


  /*login !!!!!*/
  
    public function xusuario()
    {
        if (isset($_POST['contrasena'])) 
        {
        	$this->load->model('Usuarios');
        	if ($this->Usuarios->logueser($_POST['correo'],md5($_POST['contrasena']))) {
        	$this->load->view('indexusuario');	
        	}else{
        		$this->load->view('nelusuario');
        }
        	
        }
    	
    }
    public function xadmin()
    {
        if (isset($_POST['contrasena'])) 
        {
        	$this->load->model('Usuarios');
        	if ($this->Usuarios->logadmin($_POST['correo'],md5($_POST['contrasena']))) {
        	$this->load->view('adminmenu');	
        	}else{
        		$this->load->view('neladmin');}
        	
        }
    	
    }







}

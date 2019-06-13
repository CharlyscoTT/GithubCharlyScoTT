<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {


	public function registrarusuarios_model($usuario, $correo, $contrasena)
	{
		$ejecutar_consulta = $this->db->query ("INSERT INTO usuarios(usuario, correo, contrasena) VALUES ('$usuario', '$correo', '$contrasena')");
	}

    public function registrarcoche_model($modelo, $marca, $pais, $ano, $color, $serie )
	{
		$ejecutar_consulta = $this->db->query ("INSERT INTO vehiculo(modelo, marca, pais,ano,color,serie) VALUES ('$modelo', '$marca', '$pais', '$ano', '$color', '$serie')");
	}

	public function admivercoche()
	{
		$us =$this->db->query("SELECT * FROM `vehiculo` WHERE 1" );
        $data=$us->result_array();
        return $data;
    }
      public function admineliminar_model($id)
	{
		$ejecutar_consulta = $this->db->query ("DELETE FROM vehiculo where id=$id ORDER BY modelo, marca, pais,ano,color,serie");
	}

     public function admineditarcoche_model($id, $modelo, $marca, $pais, $ano, $color, $serie )
	{
		$ejecutar_consulta = $this->db->query ("UPDATE vehiculo SET modelo ='$modelo', marca='$marca', pais='$pais',ano='$ano',color='$color',serie='$serie' WHERE id='$id'");
	}
    
    public function colordepinturausuario()
	{
		$us =$this->db->query("SELECT * FROM `vehiculo` WHERE 1" );
        $data=$us->result_array();
        return $data;
    }
    
    public function logueser($correo,$contrasena)
	{
	    $this->db->where('correo', $correo);
	    $this->db->where('contrasena', $contrasena);	
        $u = $this->db->get('usuarios');
         if ($u->num_rows()>0) {
         	return true;
         }else{ 
         	return false;
         }
           
    }
     public function logadmin($correo,$contrasena)
	{
	    $this->db->where('correo', $correo);
	    $this->db->where('contrasena', $contrasena);	
        $w = $this->db->get('admin');
         if ($w->num_rows()>0) {
         	return true;
         }else{
         	return false;
         }
            
    }
    












}
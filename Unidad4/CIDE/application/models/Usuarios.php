<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {


	public function verusuarios()
	{
		$us =$this->db->query("SELECT* FROM Usuarios" );
        $data=$us->result_array();
        return $data;
    }


	public function insertarusuarios_model($nombre, $apellido)
	{
		$ejecutar_consulta = $this->db->query ("INSERT INTO usuarios(nombre, apellido) VALUES ('$nombre','$apellido')");
	}
     public function eliminar_usuario_model($id)
	{
		$ejecutar_consulta = $this->db->query ("DELETE FROM usuarios where id=$id ORDER BY nombre, apellido ");
	}
	  public function cambiar_usuario_model($id, $nombre, $apellido)
	{
		$ejecutar_consulta = $this->db->query ("UPDATE usuarios SET nombre ='$nombre', apellido='$apellido' WHERE id='$id'");
	}



}
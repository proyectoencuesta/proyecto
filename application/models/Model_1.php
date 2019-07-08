<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_1 extends CI_Model {
  public function __construct(){
  	//se carga la base de datos
 	$this->load->database();
 }//termina la funcion del constructor
	
function crearPregunta(){

	$data=  array('descripcion' => $this->input->post('descripcion'));
	$this->db->insert('preguntas',$data);	

	
}//termina la funcion alta pregunta

function obtenerDatos(){
//se le asigna auna variable query los resultados de la
	//consulta select from
$query = $this->db->query("SELECT * FROM  preguntas");

return $query->result();
}//termina funcion obetener dATOS

function getDato($id){
	//asignamos al query lo que se obtenga de la consulta
	//donde los id coincidan
$query = $this->db->query('SELECT * FROM preguntas WHERE `id` =' .$id);
return $query->row();
}//termina funcion getDato


function actpreg($id){
 $data=  array('descripcion' => $this->input->post('descripcion'));
 
  $this->db->where('id',$id);
 $this->db->update('preguntas',$data);
	}

function eliminarPregunta($id){
$this->db->where('id', $id);
$this->db->delete('preguntas');
}


function crearRespuesta(){
	$data = array('desresp'=>$this->input->post('descripcion'),
		'idPregunta' => $this->input->post('resultado')
	 );

	$this->db->insert('respuesta',$data);
}


function crearCuestionario(){
	//variable de tus base de datos     //recibes de tu formulario
	$data=  array('nombre_cuestionario' =>$this->input->post('nombre_cuestionario'));
	$this->db->insert('cuestionario',$data);
}//termina la funcion de crear cuestionario

   function obtenerDatocuest(){
	   //se le asigna auna variable query los resultados de la
	   //consulta select from
	   $query = $this->db->query("SELECT * FROM  cuestionario");
	   return $query->result();
	}//termina funcion obtenerDatocuest
	
	function getDatoc($id){
	   //asignamos al query lo que se obtenga de la consulta
	   //donde los id coincidan
	   $query = $this->db->query('SELECT * FROM cuestionario WHERE `id_cuestionario` =' .$id);
	   return $query->row();
	}//termina funcion getDato
	
	function actuCuest($id){
	   $data=array('nombre_cuestionario' => $this->input->post('cuesti'));
	   $this->db->where('id_cuestionario',$id);
	   $this->db->update('cuestionario',$data);
	}//fin de actuCuest
	
	function eliminarCuesti($id){
		$this->db->where('id_cuestionario', $id);
		$this->db->delete('cuestionario');
   }//termina la funcion eliminar cestionrio


   function preguntaCuestionario(){
   	$query = $this->db->query('SELECT * FROM cuestionario WHERE `id_cuestionario` =0' .$id_cuestionario);
return $query->row();
    $query = $this->db->query('SELECT * FROM preguntas WHERE `id` =0' .$id);
return $query->row();
   	$data=array('id_cuestionario' =>$this->input->post('id_cuestionario'),
   	'id' =>$this->input->post('id'));
   	$this->db->insert('pregcuest',$data);
   }

   function eliminarpreguntaCuestionario(){
   	$query = $this->db->query('SELECT * FROM cuestionario WHERE `id_cuestionario` =0' .$id_cuestionario);
return $query->row();
$query = $this->db->query('SELECT * FROM preguntas WHERE `id` =0' .$id);
return $query->row();
   	$data=array('id_cuestionario' =>$this->input->post('id_cuestionario'),
   	'id' =>$this->input->post('id'));
   	$this->db->delete('pregcuest',$data);
   }



}//termina la clase modelo

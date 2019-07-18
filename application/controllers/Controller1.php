<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller1 extends CI_Controller {

    //se crea mi funcion constructor
	function __construct(){
			parent::__construct();
			//se carga el modelo
		  $this->load->model('Model_1');
		  $this->load->helper(array('form', 'url'));
		  $this->load->library('form_validation');
			
		}//finaliza el constructor

	public function index()
	{
		$this->load->view('vistas/headers');
		$this->load->view('vistas/vgeneral');
	}

function preguntas(){
$this->load->view('vistas/headers');
$this->load->view('vistas/vpreguntas');
}//termina la funcion preguntas

function altpreg(){
	$this->load->view('vistas/headers');
	$this->load->view('vistas/agrepregunta');
}

    function altapregunta(){


			
			// redireccionamos a controlador1
			

		$this->form_validation->set_rules( 'descripcion','pregunta','required');

		if ($this->form_validation->run() == FALSE){
				//$datos["mensaje"]="Validación incorrecta";
				//$this->load->view("vistas/valtcuest",$datos);
			$this->form_validation->set_message('required','El campo %s es obligatorio');
					//$this->load->view('vistas/vcuest');
		}else{
				//$data['msg'] = 'success';
				$this->Model_1->crearPregunta();
					
					//$this->Model_1->crearCuestionario();
					//$this->load->view('vistas/valtcuest');	
					
			}
			redirect("Controller1/altpreg");
			

	
    }

function listapreg(){
	$data['result'] = $this->Model_1->obtenerDatos();
	$this->load->view('vistas/headers');
	$this->load->view('vistas/vaccpregunta',$data);
}


	function editarpreg($id){
		$data['row'] = $this->Model_1->getDato($id);
		 $this->load->view('vistas/headers');
	 $this->load->view("vistas/veditpreg",$data);
	 

	}//termina la funcion editar

	function actualizar($id){
	 
	 
	  $this->form_validation->set_rules( 'descripcion' , 'Obligatorio' , 'required');

	  if ($this->form_validation->run() == FALSE){
		
		 //$this->load->view('vistas/vcuest');
	  }else{
		 //$data['msg'] = 'success';
		 $data['row'] = $this->Model_1->actpreg($id);
		 
		 //$this->load->view('vistas/valtcuest');	
	  }
	  redirect("Controller1/listapreg");
	}//termina la funcion de actualizar

function eliminar($id){
	    $this->Model_1->eliminarpregunta($id);
			redirect("Controller1/listapreg");
		}//termina el metodo que elimina pregunta

 
function respuestas(){

$this->load->view('vistas/headers');
$this->load->view('vistas/vrespuestas');
}//termina la funcion donde se mandan a llamar las vistas

function altresp(){
	$data['result']=$this->Model_1->obtenerDatos();
	$this->load->view('vistas/headers');
	$this->load->view('vistas/valtresp',$data);

}//fin metodo altresp

function agregarRespuesta(){
	
	
	$this->form_validation->set_rules( 'descripcion' , 'Obligatorio' , 'required');

	  if ($this->form_validation->run() == FALSE){
		
		 //$this->load->view('vistas/vcuest');
	  }else{
		 //$data['msg'] = 'success';
		 $this->Model_1->crearRespuesta();
		 
		 //$this->load->view('vistas/valtcuest');	
	  }
      redirect("Controller1/respuestas");
}//fin metodo agregar respuesta


function listaRespuesta(){
$this->load->view('vistas/headers');
$this->load->view('vistas/vaccresp');
}

 function cuestionario(){
      $this->load->view('vistas/headers');
      $this->load->view('vistas/vcuest');
   }

   function nuevoCuest(){
   $this->load->view('vistas/headers');
    $this->load->view('vistas/valtcuest');
}//fin del metodo que muestra el formulario de cuestionario

function agregarCuestionario(){

    $this->form_validation->set_rules( 'nombre_cuestionario' , 'Obligatorio' , 'required');

	if ($this->form_validation->run() == FALSE){
		$datos["mensaje"]="Validación incorrecta";
		$this->load->view("vistas/valtcuest",$datos);
		$this->form_validation->set_message('required','El campo %s es obligatorio');
			//$this->load->view('vistas/vcuest');
	}
	else{
			//$data['msg'] = 'success';
			
			
			$this->Model_1->crearCuestionario();
			$datos["mensaje"]="Validación correcta";
			$this->load->view('vistas/valtcuest',$datos);	
			
	}
    redirect('Controller1/nuevoCuest');
}//termina funcion agregar cuestionario


    function modificarCuest(){
		$data['result'] = $this->Model_1->obtenerDatocuest();
		$this->load->view('vistas/headers');
		$this->load->view('vistas/vmodifcuest',$data);
	}//
	
	function modifyCuest($id){
		
		
		$this->form_validation->set_rules( 'cuesti' , 'Obligatorio' , 'required');

		if ($this->form_validation->run() == FALSE){
			 
			$this->form_validation->set_message('required','El campo %s es obligatorio');

				//$this->load->view('vistas/vcuest');
		}
		else{
				//$data['msg'] = 'success';
				
				$data['row'] = $this->Model_1->actuCuest($id);
				//$this->Model_1->crearCuestionario();
				//$this->load->view('vistas/valtcuest');	
				
		}
		redirect("Controller1/modificarCuest");
	}//termina la funcion de que act

    function actualizarCuest($id){
       $data['row'] = $this->Model_1->getDatoc($id);
	   $this->load->view('vistas/headers');
	   $this->load->view('vistas/vactualizarcuest',$data);
	} //termina
	
	function borrarCuest(){
		$data['result'] = $this->Model_1->obtenerDatocuest();
		$this->load->view('vistas/headers');
		$this->load->view('vistas/vmodifcuest',$data);
	}//termina 
 
	function deleteCuest($id){
		$this->Model_1->eliminarCuesti($id);
		redirect("Controller1/borrarCuest");
	}//termina la funcion que elimina la pregunta
     
    function pregcuest($id){
    	$data['result']=$this->Model_1->obtenerDatos();
        $this->load->view('vistas/headers');
    	$this->load->view('vistas/vpregalcuest',$data);
    } //termina la funcion de pregcuest

    function preguntaCuest($id_cuestionario=0,$id=0){
    	$this->Model_1->preguntaCuestionario($id_cuestionario,$id);
    	redirect("Controller1/modificarCuest");
    }
    
    function elimpreguntaCuest($id_cuestionario=0,$id=0){
    	$this->Model_1->eliminarpreguntaCuestionario($id_cuestionario,$id);
    	redirect("Controller1/modificarCuest");
    }
}//termina la clase controller1
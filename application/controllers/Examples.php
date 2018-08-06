<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}

	public function offices()
	{	
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}


	public function encuesta_()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('encuestaf');
			$crud->set_subject('Encuesta de satisfacción de usuario');
			$crud->set_language('spanish');
			$crud->set_theme('flexigrid');
			$crud->set_relation('idUsuario','usuario','usuNombre')
			     ->set_relation('idPreUno','preUno','nomPreU')
		    	 ->set_relation('idPreDos','preDos','nomPreD')
		    	 ->set_relation('idPreTres','pretres','nomPreT')
			     ->set_relation('idPreCuatro','precuatro','nomPreC')
				 ->set_relation('idPreCinco','precinco','nomPreF');
					
			//$crud->required_fields('nomEncuentro');
			$crud->display_as('idEncuestaF','Identificación Encuesta')
			->display_as('idUsuario','Nombre')
		    ->display_as('idPreUno','Identificación Pregunta 1')
			->display_as('idPreDos','Identificación Pregunta 2')
			->display_as('idPreTres','Identificación Pregunta 3')
			->display_as('idPreCuatro','Identificación Pregunta 4')
			->display_as('idPreCinco','Identificación Pregunta 5')	
		    ->display_as('comentarios','Comentarios, Observaciones:');
			$crud->columns('idEncuestaF','idUsuario','idPreUno','idPreDos','idPreTres','idPreCuatro','idPreCinco','comentario','file_url');
			
            //Subir archivo a la vista
			$crud -> set_field_upload ('file_url','assets/uploads/files') ;
			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function usuario_()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('usuario');
			$crud->set_subject('Usuario');
			$crud->set_language('spanish');
			$crud->set_theme('flexigrid');
			$crud->required_fields('usuNombre','usuApellido');
			$crud->display_as('idUsuario','Identificación')
			 ->display_as('usuNombre','Nombre')
			 ->display_as('usuApellido','Apellido');
			$crud->columns('idUsuario','usuNombre','usuApellido');
			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function preguntaUno_()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('preuno');
			$crud->set_subject('Posible Respuesta');
			$crud->set_language('spanish');
			$crud->set_theme('flexigrid');
			$crud->required_fields('nomPreU');
			
			$crud->display_as('idPreUno','Identificación encuesta 1')
		     ->display_as('nomPreU','¿Cual fue el servicio que le prestaron en la Fundación Nacer para Vivir IPS?');
			 //->display_as('idUsuario','Identificación Usuario')
			 //->display_as('campoA','Consulta medica intramural')
			 //->display_as('campoB','Consulta de enfermeria extramural')
			 //->display_as('campoC','Consulta medica extramural')
			 //->display_as('campoD','Consulta odontologica intramural')
			 //->display_as('campoE','Atención psicologica')
			 //->display_as('campoF','Atención fisioterapia')
			 //->display_as('campoG','Atención auxiliar de enfermeria'); 
			$crud->columns('idPreUno','nomPreU');
			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function preguntaDos_()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('predos');
			$crud->set_subject('Posible Respuesta');
			$crud->set_language('spanish');
			$crud->set_theme('flexigrid');
			$crud->required_fields('nomPreD');
			
			$crud->display_as('idPreDos','Identificación Pregunta 2')
			 ->display_as('nomPreD','¿Considere que la atención del profesional que lo(a) atendio fue?');
			// ->display_as('idUsuario','Identificación Usuario')
			 //->display_as('campoA','Excelente')
			 //->display_as('campoB','Buena')
			 //->display_as('campoC','Regular')
			 //->display_as('campoD','Mala');
			$crud->columns('idPreDos','nomPreD');//'idUsuario','campoA','campoB','campoC','campoD');
			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function preguntaTres_()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('pretres');
			$crud->set_subject('Posible Respuesta');
			$crud->set_language('spanish');
			$crud->set_theme('flexigrid');
			$crud->required_fields('nomPreT');
		
			$crud->display_as('idPreTres','Identificación pregunta 3')
			 ->display_as('nomPreT','¿Considere que la atención del auxiliar que lo(a) atendio fue?');
			// ->display_as('idUsuario','Identificación Usuario')
			 //->display_as('campoA','Excelente')
			 //->display_as('campoB','Buena')
			 //->display_as('campoC','Regular')
			 //->display_as('campoD','Mala');
			$crud->columns('idPreTres','nomPreT');//,'idUsuario','campoA','campoB','campoC','campoD');
			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	
	public function preguntaCuatro_()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('precuatro');
			$crud->set_subject('Posible Respuesta');
			$crud->set_language('spanish');
			$crud->set_theme('flexigrid');
			$crud->required_fields('nomPreC');
			
			$crud->display_as('idPreCuatro','Identificación pregunta 4')
			 ->display_as('nomPreC','¿Usted considera que le resolvieron la situación de salud por la cual acudio a la IPS?');
			$crud->columns('idPreCuatro','nomPreC');//,'idUsuario','campoA','campoB');
			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function preguntaCinco_()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('precinco');
			$crud->set_subject('Posible Respuesta');
			$crud->set_language('spanish');
			$crud->set_theme('flexigrid');
			$crud->required_fields('nomPreF');
			
			$crud->display_as('idPreCinco','Identificación pregunta 5')
			 ->display_as('nomPreF','¿Cual es su grado de satisfación con los servicios de la Fundación Nacer para Vivir?');
		  
			 //->display_as('idUsuario','Identificación Usuario')
			 //->display_as('campoA','Satisfecho (Si)')
			 //->display_as('campoB','No Satisfecho (No)')
			 //->display_as('Comentarios','Comentarios, Observaciones');
			$crud->columns('idPreCinco','nomPreF');//,'idUsuario','campoA','campoB','Comentarios');
			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}

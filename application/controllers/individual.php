<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(APPPATH.'controllers/padre.php');
	class Individual extends Padre
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function index($idEmp){
			// loads 
				$this->load->helper("url");
				$this->load->model("individualm");
			// vars 
				$individualModel 	= new Individualm();
				$empleado 			= $individualModel->getEmpleado($idEmp);
				$idiomas 			= $empleado[1];
				$testimonios 		= $individualModel->getHTMLTestimonios($idEmp);
				$awards 			= $individualModel->getDivAward($idEmp);
				$data = array(
					'homeData' 		=> $this->homeData,
					'empleado' 		=> $empleado[0][0],
					'idiomas'  		=> $idiomas,
					'testimonios' 	=> $testimonios,
					'divAwards' 	=> $awards,
					'idEmp'			=> $idEmp
				);
			// views
				$this->load->view("individual/index.php",$data);
		}
	}
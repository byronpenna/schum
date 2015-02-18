<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(APPPATH.'controllers/padre.php');
class ourteam extends Padre
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		// load 
			$this->load->helper("url");
			$this->load->model("ourteamm");
		// vars
			$ourteamModel 		= new Ourteamm();
			$cuadritosEmpleados = $ourteamModel->getCuadritoEmpleados(); 
			$data = array(
				'homeData' 				=> $this->homeData,
				'cuadritosEmpleados'	=> $ourteamModel->getCuadritoEmpleados()
			);
		// views 
			$this->load->view("ourteam/index.php",$data);	
	}
}
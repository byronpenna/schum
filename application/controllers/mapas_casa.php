<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mapas_casa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view("mapas_casa/index.php");
	}
}
<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(APPPATH.'controllers/padre.php');
class News extends Padre
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		// vars 
			$data = array('homeData' => $this->homeData );
		// views 
			$this->load->view("news/index.php",$data);
	}
}
<?php 
include_once(APPPATH.'controllers/padre.php');
class Our_story extends Padre
{
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		// vars 
			$data = array('homeData' => $this->homeData );
		// views 
			$this->load->view("our_story/index.php",$data);
	}
}
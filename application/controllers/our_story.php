<?php 
include_once(APPPATH.'controllers/padre.php');
class Our_story extends Padre
{
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		// loads
			$this->load->model("Our_storym");
		// vars 
			$ourStoryModel 	= new Our_storym();
			$data 			= 	array(
									'homeData' => $this->homeData,
									'ourStory' => $ourStoryModel->getOurStory()
								);
		// views 
			$this->load->view("our_story/index.php",$data);
	}
}
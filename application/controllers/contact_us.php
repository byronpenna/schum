<?php 
include_once(APPPATH.'controllers/padre.php');
class Contact_us extends Padre
{
	private $contactUsModel;
	function __construct()
	{
		parent::__construct();
		$this->load->model("contact_usm");
		$this->contactUsModel = new Contact_usm();
	}
	function index(){
		$data = array(
			'homeData' => $this->homeData
		);
		$this->load->view("contact_us/index.php",$data);
	}
	function sendMail(){
		$frm 				= json_decode($_POST["frm"]);
		$frm 				= (Array)$frm;
		$frm["recaptcha"] 	= $frm["g-recaptcha-response"];
		$frm 				= (Object)$frm;
		$retorno 			= $this->contactUsModel->sendMail($frm);
		echo json_encode($retorno);
		// echo true;
	}
}
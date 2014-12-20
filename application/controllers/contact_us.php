<?php 
include_once(APPPATH.'controllers/padre.php');
class Contact_us extends Padre
{
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$data = array(
			'homeData' => $this->homeData
		);
		$this->load->view("contact_us/index.php",$data);
	}
	function sendMail(){
		$frm = json_decode($_POST["frm"]);
		mail("info@driventofinish.com","General Inquiry: Realty Ltd.",$frm->message,"from:".$frm->emailT." ");
		echo true;
	}
}
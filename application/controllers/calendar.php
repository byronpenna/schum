<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(APPPATH.'controllers/padre.php');
class Calendar extends Padre
{
	
	function __construct()
	{
		parent::__construct();
	}
	function general(){
		// loads
			$this->load->model("calendarm");
		// vars 
			$calendarModel 	= new Calendarm();
			$openHouse 		= $calendarModel->getDivOpenHouseGeneral();
			$data 			= array(
				'homeData' 		=> $this->homeData, 
				"divOpenHouse" 	=> $openHouse
			);
			$this->load->view("calendar/index.php",$data);
	}
	function index($idHome=-1){
		// loads
			$this->load->model("calendarm");
		// vars 
			$calendarModel 	= new Calendarm();
			$openHouse 		= $calendarModel->getDivOpenHouse($idHome);
			$data = array(
				'homeData' 		=> $this->homeData,
				"divOpenHouse"	=> $openHouse
			);
		$this->load->view("calendar/index.php",$data);
	}
}
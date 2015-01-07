<?php
class Prueba extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		print_r($_POST);
	}
	function prueba(){
		
	}
}
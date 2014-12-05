<?php 
class Padre extends CI_Controller
{
	public $homeData;
	public $searchBarOp;
	function __construct()
	{
		parent::__construct();
		// loads 
			$this->load->model("indexm");
		// vars 
			$indexModel 		= new Indexm();
			$this->searchBarOp = $this->getSearchVar();
			$this->homeData 	= $indexModel->getHome();
			
	}
	public function getSearchBar(){
		// load 
			$this->load->model("indexm");
		// models
			$searchBar 					= new stdClass();
			$indexModel 				= new Indexm();
		// search bar
			$searchBar->propertyType 	= $indexModel->getCbSearchBar(3);
			$searchBar->minBedRoom 		= $indexModel->getCbSearchBar(2);
			$searchBar->minBath 		= $indexModel->getCbSearchBar(1);
		return $searchBar;	
	}
	function getSearchVar(){
		$retorno = new stdClass();
		$retorno->minSf = "
			<option value='400'>400 ft²</option>
			<option value='800'>800 ft²</option>
			<option value='1200'>1200 ft²</option>
			<option value='1600'>1600 ft²</option>
			<option value='2000'>2000 ft²</option>
			<option value='2400'>2400 ft²</option>
		";
		$retorno->minPrice = "
			<option value='25000'>25,000</option>
			<option value='50000'>50,000</option>
			<option value='75000'>75,000</option>
			<option value='100000'>100,000</option>
			<option value='125000'>125,000</option>
			<option value='150000'>150,000</option>
			<option value='175000<'>175,000</option>
			<option value='200000'>200,000</option>
			<option value='225000'>225,000</option>
			<option value='250000'>250,000</option>
			<option value='275000'>275,000</option>
			<option value='300000'>300,000</option>
			<option value='325000'>325,000</option>
			<option value='350000'>350,000</option>
			<option value='375000'>375,000</option>
			<option value='400000'>400,000</option>
			<option value='425000'>425,000</option>
			<option value='450000'>450,000</option>
			<option value='475000'>475,000</option>
			<option value='500000'>500,000</option>
			<option value='550000'>550,000</option>
			<option value='600000'>600,000</option>
			<option value='650000'>650,000</option>
			<option value='700000'>700,000</option>
			<option value='750000'>750,000</option>
			<option value='800000'>800,000</option>
			<option value='850000'>850,000</option>
			<option value='900000'>900,000</option>
			<option value='950000'>950,000</option>
			<option value='1000000'>1,000,000</option>
			<option value='1100000'>+</option>
		";
		$retorno->maxPrice = "
			<option value='25000'>25,000</option>
			<option value='50000'>50,000</option>
			<option value='75000'>75,000</option>
			<option value='100000'>100,000</option>
			<option value='125000'>125,000</option>
			<option value='150000'>150,000</option>
			<option value='175000<'>175,000</option>
			<option value='200000'>200,000</option>
			<option value='225000'>225,000</option>
			<option value='250000'>250,000</option>
			<option value='275000'>275,000</option>
			<option value='300000'>300,000</option>
			<option value='325000'>325,000</option>
			<option value='350000'>350,000</option>
			<option value='375000'>375,000</option>
			<option value='400000'>400,000</option>
			<option value='425000'>425,000</option>
			<option value='450000'>450,000</option>
			<option value='475000'>475,000</option>
			<option value='500000'>500,000</option>
			<option value='550000'>550,000</option>
			<option value='600000'>600,000</option>
			<option value='650000'>650,000</option>
			<option value='700000'>700,000</option>
			<option value='750000'>750,000</option>
			<option value='800000'>800,000</option>
			<option value='850000'>850,000</option>
			<option value='900000'>900,000</option>
			<option value='950000'>950,000</option>
			<option value='1000000'>1,000,000</option>
			<option value='1100000'>+</option>
		";
		return $retorno;
	}
}
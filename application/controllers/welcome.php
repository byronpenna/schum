<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(APPPATH.'controllers/padre.php');
class Welcome extends Padre {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function getEmpPagination(){
		// load 
			$this->load->model("indexm");
		// vars 
			$limit = json_decode($_POST['limit']);
			$indexModel = new Indexm();
			$retorno 	= new stdClass();
			if(isset($limit) && !empty($limit)){
				$retorno = $indexModel->getCuadritosEmpleados($limit->l1,$limit->l2);
			}else{
				$retorno = "hola";
			}
		echo $retorno;
	}
	public function getNewsToMarketPagination(){
		// load
			$this->load->model("indexm");
		// vars 
		$limit 		= json_decode($_POST['limit']);
		$indexModel = new Indexm();
		if(isset($limit) && !empty($limit)){
			$retorno = $indexModel->getNewsToTheMarket($limit->l1,$limit->l2);
		}
		echo $retorno;
	}
	public function getSortHouse(){
		// load 
			$this->load->model("indexm");
		// vars 
			$op 		= $_POST['opcion'];
			$indexModel = new Indexm(); 
			$retorno 	= new stdClass();
		// do it
			if(isset($op) && !empty($op)){
				$retorno = $indexModel->getSortHouse($op);
			}
			echo json_encode($retorno);
	}
	public function getCasas(){
		// load 
			$this->load->model("indexm");
		// vars 
			$indexModel = new Indexm();
			$casas 		= $indexModel->getHouse();
		// do it 
			echo json_encode($casas);
	}
	public function getCasasForMap(){
		// load 
			$this->load->model("indexm");
		// vars 
			$indexModel = new Indexm();
			$casas 		= $indexModel->getHouseForMap();
		// do it 
			echo json_encode($casas);
	}
	public function getCasasForMapSection(){
		// load 
			$this->load->model("indexm");
		// vars 
			$indexModel = new Indexm();
		// do it 
			$cuadritosCasa = $indexModel->getCasasForMapSection();

	}
	public function getCuadritosEmpleados($l1=0,$l2=4){
		// load
			$this->load->model("indexm");
		// vars 
			$indexModel = new Indexm();
		// do it 
			$cuadritoEmpleado = $indexModel->getCuadritosEmpleados($l1,$l2);
		return $cuadritoEmpleado;
	}
	public function index()
	{	
		// loads 
			$this->load->helper("url");
			$this->load->model("indexm");
		// vars 
			$indexModel 				= new Indexm();
			$searchBar 					= new stdClass();
			// search bar
				$searchBar->propertyType 	= $indexModel->getCbSearchBar(3);
				$searchBar->minBedRoom 		= $indexModel->getCbSearchBar(2);
				$searchBar->minBath 		= $indexModel->getCbSearchBar(1);
			// map 
				//$cuadritosCasa 				= $indexModel->getCasasForMapSection();
				$cuadritosCasa 				= $indexModel->getSortHouse(1);
				$ubicacion 					= $indexModel->getMainUbication();
				$listings 					= $indexModel->getCountListing();
			// news to the market
				$newsToMarket 				= $indexModel->getNewsToTheMarket();
				$slider 					= $indexModel->getPointSlider();
				$tweets 					= $indexModel->getAlinaTweets();
			$data 		= array(
				'ubicacion' 		=> $ubicacion,
				'homeData' 			=> $this->homeData,
				'searchBar'			=> $searchBar,
				'cuadritoCasa' 		=> $cuadritosCasa->div,
				'cuadritoEmpleado' 	=> $indexModel->getCuadritosEmpleados(),
				'newsToMarket' 		=> $newsToMarket,
				'searchOp' 			=> $this->searchBarOp,
				'cnListing' 		=> $listings[0]->cnListing,
				'slider'			=> $slider,
				'buySeller'			=> $indexModel->getSellerBuyerImage($this->homeData),
				'tweets'	 		=> $tweets
			);
		// views 
			$this->load->view('index/index.php',$data);
			

			// $listing = $indexModel->pruebaData();
			// print_r($listing);
			// echo "hola mundo";
	}
	public function getCommitment(){
		// load 
			$this->load->model("indexm");
		// vars 
			$indexModel = new Indexm();
			$homeData 	= $indexModel->getHomeData();
			
			$obj[0] = new stdClass();
			$obj[0]->title 	= $homeData[0]->titulo1;
			$obj[0]->text 	= $homeData[0]->txt1;
			$obj[0]->url 	= "#";

			$obj[1] = new stdClass();
			$obj[1]->title 	= $homeData[0]->titulo2;
			$obj[1]->text 	= $homeData[0]->txt2;
			$obj[1]->url 	= "#";

			$obj[2] = new stdClass();
			$obj[2]->title 	= $homeData[0]->titulo3;
			$obj[2]->text 	= $homeData[0]->txt3;
			$obj[2]->url 	= "#";
			echo json_encode($obj);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
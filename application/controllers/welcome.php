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
				$retorno = $indexModel->getSortHouse2($op);
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
	function microtime_float()
	{
	    list($usec, $sec) = explode(" ", microtime());
	    return ((float)$usec + (float)$sec);
	}
	public function getNewToTheMarket(){
		$this->load->model("indexm");
		$indexModel = new Indexm();
		echo $indexModel->getNewsToTheMarket();
	}
	public function getEmpleados(){
		$this->load->model("indexm");
		$indexModel = new Indexm();
		echo $indexModel->getCuadritosEmpleados();		
	}
	public function index()
	{	
		// loads 
			$this->load->helper("url");
			$this->load->model("indexm");
			$start 						= $this->microtime_float();
		// vars 
			$indexModel 				= new Indexm();
			$searchBar 					= new stdClass();
			

			// search bar
				
				$searchBar->propertyType 	= $indexModel->getCbSearchBar(3);
				$searchBar->minBedRoom 		= $indexModel->getCbSearchBar(2);
				$searchBar->minBath 		= $indexModel->getCbSearchBar(1);
				
				
			// map 
				// $cuadritosCasa 				= $indexModel->getCasasForMapSection();
				$cuadritosCasa 				= $indexModel->getSortHouse2(1);
				
				$ubicacion 					= $indexModel->getMainUbication();
				$listings 					= $cuadritosCasa->cn;

			// news to the market
				
				// $newsToMarket 				= $indexModel->getNewsToTheMarket();
				
				$slider 					= $indexModel->getPointSlider();
			$data 		= array(
				'ubicacion' 		=> $ubicacion,
				'homeData' 			=> $this->homeData,
				'searchBar'			=> $searchBar,
				'cuadritoCasa' 		=> $cuadritosCasa->div,
				'ajaxLoader'		=> $this->getAjaxLoaderSrc(),
				// 'cuadritoCasa'		=> '',	
				// 'cuadritoEmpleado' 	=> $indexModel->getCuadritosEmpleados(),
				'cuadritoEmpleado' 	=> '',
				// 'newsToMarket' 		=> $newsToMarket,
				'newsToMarket' 		=> '',
				'searchOp' 			=> $this->searchBarOp,
				'cnListing' 		=> $listings,
				// 'cnListing' 		=> '',
				'slider'			=> $slider,
				'buySeller'			=> $indexModel->getSellerBuyerImage($this->homeData)
			);
			$end 						= $this->microtime_float();
			$time 						= $end-$start;
			// echo "El tiempo de ejecucion es: ".$time;
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
			$obj[0]->title 	= '';
			$obj[0]->text 	= $homeData[0]->txt1;
			$obj[0]->url 	= "#";

			$obj[1] = new stdClass();
			$obj[1]->title 	= '';
			$obj[1]->text 	= $homeData[0]->txt2;
			$obj[1]->url 	= "#";

			$obj[2] = new stdClass();
			$obj[2]->title 	= '';
			$obj[2]->text 	= $homeData[0]->txt3;
			$obj[2]->url 	= "#";

			$obj[3] = new stdClass();
			$obj[3]->title 	= '';
			$obj[3]->text 	= $homeData[0]->txt4;
			$obj[3]->url 	= "#";

			$obj[4] = new stdClass();
			$obj[4]->title 	= '';
			$obj[4]->text 	= $homeData[0]->txt5;
			$obj[4]->url 	= "#";

			$obj[5] = new stdClass();
			$obj[5]->title 	= '';
			$obj[5]->text 	= $homeData[0]->txt6;
			$obj[5]->url 	= "#";

			$obj[6] = new stdClass();
			$obj[6]->title 	= '';
			$obj[6]->text 	= $homeData[0]->txt7;
			$obj[6]->url 	= "#";

			$obj[7] = new stdClass();
			$obj[7]->title 	= '';
			$obj[7]->text 	= $homeData[0]->txt8;
			$obj[7]->url 	= "#";

			$obj[8] = new stdClass();
			$obj[8]->title 	= '';
			$obj[8]->text 	= $homeData[0]->txt9;
			$obj[8]->url 	= "#";

			$obj[9] = new stdClass();
			$obj[9]->title 	= '';
			$obj[9]->text 	= $homeData[0]->txt10;
			$obj[9]->url 	= "#";
			echo json_encode($obj);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
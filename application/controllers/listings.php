<?php 
	include_once(APPPATH.'controllers/padre.php');
	class listings extends Padre
	{
		
		function __construct()
		{
			parent::__construct();
		}
		// display by 
			function displayBy(){
				// load 
					$this->load->model("listingm");
				// vars 
					$retorno 		= new stdClass();
					$listingModel 	= new Listingsm(); 
					$numDisplay 	= $_POST['numDisplay'];
				// do it 
					if(isset($numDisplay) && !empty($numDisplay)){
						$retorno = $listingModel->displayBy($numDisplay);
					}else{
						$retorno->estado = false;
					}
				echo json_encode($retorno);
			}
		// ################ 
		function getNextPage(){
			
		}
		function searchNow(){
			// load 
				$this->load->model("listingsm");
				$listingModel = new Listingsm();
			// vars 
				$retorno = new stdClass();
				$frm 	= json_decode($_POST['frm']);
				$limit  = $_POST['limit'];
			// do it 
				if(isset($frm) && !empty($frm)){
					$retorno 				= $listingModel->searchNow($frm,0,$limit);
					$retorno->origen 		= json_encode($frm);
					$retorno->pageIndicador = $this->getPageIndicator(1,$retorno->paginasTotales[1]); 
				}else{
					$retorno->estado 	= false;
					$retorno->valor 	= "Error en el envio de las variables";
				}
				echo json_encode($retorno);
		}
		// paginacion 
			function searchNowPagination(){
				// load 
					$this->load->model("listingsm");
				// vars
					$obj 			= json_decode($_POST['obj']);
					$listingModel 	= new Listingsm();
					$retorno 		= new stdClass();
				// do it 
					if(isset($obj) && !empty($obj)){
						$limits 				= $this->getLimitsForPagination($obj); 
						$obj->filtro 			= json_decode($obj->filtro);
						// ###############################
						$retorno 				= $listingModel->searchNow($obj->filtro,$limits->l1,$limits->l2);
						$retorno->html 			= $retorno->contenido;
						$retorno->origen 		= json_encode($obj->filtro);
						$retorno->pageIndicador = $this->getPageIndicator($obj->pagina,$retorno->paginasTotales[1]);
					}
					echo json_encode($retorno);
			}
			function getListasCasas(){
				// en este metodo se viene desde ajax
				// load
					$this->load->model("listingsm");
				// vars 
					$obj 			= json_decode($_POST['obj']);
					$listingModel 	= new Listingsm();
					$retorno 		= new stdClass();
				// do it				
					if(isset($obj) && !empty($obj)){
						$limits 				= $this->getLimitsForPagination($obj);
						// #############################
						$retorno 				= $listingModel->getListasCasas($limits->l1,$limits->l2);
						$retorno->origen 		= 0;
						$retorno->pageIndicador	= $this->getPageIndicator($obj->pagina,$retorno->paginasTotales[1]);
					}
					echo json_encode($retorno);
			}
			function getPageIndicator($l1,$l2){
				$retorno = "Page ".$l1." of ".$l2;
				return $retorno;
			}

			function searchHome($cbPropertyType,$cbMinBedRoom,$cbMinBath,$cbMinSf,$cbMinPrice,$cbMaxPrice){
				// load 
					$this->load->helper("url");
					$this->load->model("listingsm");
				// vars 
					$listingModel 	= new Listingsm();
					$frm 			= $this->getFrmForSearch($cbPropertyType,$cbMinBedRoom,$cbMinBath,$cbMinSf,$cbMinPrice,$cbMaxPrice);
					$casas 			= $listingModel->searchNow($frm); 
					$searchBar 		= $this->getSearchBar();
					$data = array(
						'homeData'			=> $this->homeData,
						'casas' 			=> $casas->contenido,
						'numsPaginacion' 	=> $casas->paginacion,
						'searchOp' 			=> $this->searchBarOp,
						'pageOf' 			=> $casas->paginasTotales,
						'searchBar' 		=> $searchBar,
						'origen' 			=> json_encode($frm)
					);
				// views 
					$this->load->view("listings/index.php",$data);
			}
		// generic 
			function getFrmForSearch($cbPropertyType,$cbMinBed,$cbMinBath,$cbMinSf,$cbMinPrice,$cbMaxPrice){
				$frm = new stdClass();
				$frm->cbMaxPrice 	= $cbMaxPrice;
				$frm->cbMinBath		= $cbMinBath;
				$frm->cbMinBed  	= $cbMinBed;
				$frm->cbMinPrice 	= $cbMinPrice;
				$frm->cbMinSf 		= $cbMinSf;
				$frm->propertyType 	= $cbPropertyType;
				return $frm;
			}
			function getSearchBar(){
				// load
				$this->load->model("indexm");
				// vars
					$indexModel 	= new Indexm();
					$searchBar 		= new stdClass();
					$searchBar->propertyType 		= $indexModel->getCbSearchBar(3);
					$searchBar->minBedRoom 			= $indexModel->getCbSearchBar(2);
					$searchBar->minBath 			= $indexModel->getCbSearchBar(1);
				return $searchBar;
			} 
		function getLimitsForPagination($obj){
			// vars
				$retorno 		= new stdClass(); 
				$retorno->l2	= $obj->displayBy * $obj->pagina;
				$retorno->l1	= $retorno->l2 - $obj->displayBy;
			return $retorno;
		}
		function getStandarData($casas){
			$searchBar 	= $this->getSearchBar();
			$data 		= 	array(
								'homeData'			=> $this->homeData,
								"casas" 			=> $casas->casitas,
								"numsPaginacion" 	=> $casas->paginacion,
								"pageOf"			=> $casas->paginasTotales,
								'searchOp' 			=> $this->searchBarOp,
								"searchBar" 		=> $searchBar
							);
			return $data;
		}
		function getListingFromAgent($agentId){
			// load
				$this->load->model("listingsm");
			// vars 
				$listingModel 	= new Listingsm();
			// do it 
				$casas 		= $listingModel->casitasFromAgent($agentId);
				$searchBar 	= $this->getSearchBar();
				$data 		= $this->getStandarData($casas);
			// view
				$this->load->view("listings/index.php",$data);
		}
		function getFinishedListings(){
			// load 
				$this->load->model("listingsm");
			// vars 
				$listingModel = new Listingsm();
			// do it 
				$casas 	= $listingModel->finishedListings();
				$data 	= $this->getStandarData($casas);
				$data["origen"] = 0;
			// view
				$this->load->view("listings/index.php",$data);

		}
		function getMostRecent(){
			// load 
				$this->load->model("listingsm");
			// vars
				$listingModel 	= new Listingsm();
				$casas 			= $listingModel->mostRecent();
			// do it
				$data = $this->getStandarData($casas);
			// views 
				$this->load->view("listings/index.php",$data);
		}
		function index($pageListing=1){
			// load
				$this->load->helper("url");
				$this->load->model("listingsm");
				$this->load->model("indexm");
			// vars 
				$listingModel 	= new Listingsm();
				$indexModel 	= new Indexm();
				$searchBar 		= $this->getSearchBar();
				$casas 			= $listingModel->getListasCasas();
				$data 			= array(
									'casas' 			=> $casas->html,
									'homeData'			=> $this->homeData,
									'searchOp' 			=> $this->searchBarOp,
									'searchBar' 		=> $searchBar,
									'numsPaginacion'	=> $casas->cn,
									'pageOf' 			=> $casas->paginasTotales,
									'origen' 			=> 0
								 );
				// origen 0 indica que no se le aplicado ningun filtro
			// views 
				$this->load->view("listings/index.php",$data);

		}
	}
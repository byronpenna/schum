<?php
	include_once(APPPATH.'controllers/padre.php');
	class Property_detail extends Padre
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function index($idProperty){
			// loads 
				$this->load->helper("url");
				$this->load->model("property_detailsm");
				$this->load->model("indexm");
			// vars 
				$propertyModel 		= new Property_detailsm();
				$indexModel 		= new Indexm();
				$coordenadas  		= new stdClass();
				$imgSlider 			= $propertyModel->getSlider2($idProperty); 
				$thumbnail 			= $propertyModel->getImgThumbnail(0,30,$idProperty);
				$houseInformation	= $propertyModel->getPropertyInformation($idProperty);
				// print_r($houseInformation);
				$ubicacion 			= $indexModel->getMainUbication();
				$empleado 			= $propertyModel->getEmpInformation($houseInformation->agent);
				if(!isset($empleado->estado)){
					$empleado = $empleado[0][0];
					$empleado->estado = true;
				}
				if(!empty($houseInformation->latitud) && !empty($houseInformation->longitud)){
					$coordenadas->latitud 	= $houseInformation->latitud;
					$coordenadas->longitud 	= $houseInformation->longitud;
					$coordenadas->estado	= 1;
				}else{
					$coordenadas->latitud 	= $ubicacion->latitud;
					$coordenadas->longitud 	= $ubicacion->longitud;
					$coordenadas->estado 	= 0;
				}
				$estadoCalendar = $propertyModel->getBoolOpenHouse($idProperty);
				$keyFeature 	= $propertyModel->getCheckKeys($idProperty);
				$data = array(
					'homeData' 			=> $this->homeData,
					'imgSlider'			=> $imgSlider,
					'thumbnail' 		=> $thumbnail,
					'house' 			=> $houseInformation,
					'coordenadas' 		=> $coordenadas,
					'empleado'			=> $empleado,
					'appliance' 		=> $propertyModel->divAppliances($idProperty),
					"homeId"			=> $idProperty,
					"estadoCalendar" 	=> $estadoCalendar,
					"keys" 				=> $keyFeature
				);
			// views 
				$this->load->view("property_detail/index.php",$data);
		}
	}
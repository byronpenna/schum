<?php
include_once(APPPATH.'models/padrem.php');
class Indexm  extends Padrem
{
	// bedroom: 1-6
	// bathrooms: 1,1/2,2,2.5,3,4
	// sf: ft2(400, 800,1200,1600,2000,2400+)
	// min-max Price: 50E3,100E3,200E3,300E3,400E3,500E3,1M+
	function __construct()
	{
		
	}
	// news to the market
		function getNewsToTheMarket(){
			// load 
				$this->load->model("listingsm");
				$listingModel = new Listingsm();
			// vars 
				$divNews 	= "";
				$casas 		= $listingModel->getCasas();
				$casas 		= $casas->resultado[0];
			// do it 
				foreach ($casas as $key => $value) {
					$imgSrc = $this->getImgSrc($value->rutaImg);
					if($key < 4){
						// <img class='img-responsive imgFull imgNewsToMarket' src='".$imgSrc."'  >
						$divNews .= "
							<div class='col-md-3 casaNewsToMarket'>
								<a class='aaah' href='".site_url("property_detail/index/".$value->homeId." ")."'>
									<div class='row white'>
										<div class='row container-fluid imgNewsToMarket' style='background:url(".$imgSrc.")'>
											<div class='row container-fluid numImageNewsMarket'>	
												<div class='row cuadritoNum'>

													<img class='imgCamera' src='".base_url("img/elements/news_to_market/camera.png")."'  > 
													<span class='num'> 5 </span>
												</div>
											</div>		
										</div>
										<div class='row container-fluid paddingNull descriptionNewsToMarket'>
											<h3 class='newsToMarketTitle'>".$value->nombreVivienda."</h3>
											<h5 class='newsToMarketSubTitle'>
												<img class='marketImage' src='".base_url("img/elements/news_to_market/market.png")."'>	
												".$value->cityTown."
											</h5>
											<h2 class='priceNewsToMarket'>$".$value->listPrice."</h2>
										</div>	
									</div>
								</a>
							</div>		
						";	
					}
					
				}
				return $divNews;
		}
	// empleados 
		function getCuadritosEmpleados(){
			$empleado = $this->getEmpleados();
			$cuadrito = "";
			for ($i=0; $i < 2; $i++) { 
				foreach ($empleado as $key => $value) {
					$img = $this->getImgSrc($value->rutaImg);
					// base_url("img/our_team/persona1.png")
					$cuadrito .= "
					<div class='col-md-3 container-fluid ourTeamDescription'>
						<div class='row  boxOurTeam'>
							<div class='row'>
								<div class='col-lg-6 col-md-12 alignTop paddingNull green'>
									<img class='imgTeam imgFull' src='".$img."' >	
								</div>
								<div class='col-lg-6 col-md-12 alignTop container-fluid dataTeam'>
									<h2 class='nombreEmpTeam'> ".$value->nombre."</h2>
									<h3> ".$value->posicion." </h3>
									<p> Having been born in Russian and having spent many years living in Germany</p>
								</div>
							</div>
							<div class='row rowContactoTeam'>
								<div class='col-lg-6 paddingNull'>
									<p>
										<img class='img-responsive imgLine' src='".base_url("img/our_team/listing.png")."' > 
										".$value->listings." LISTINGS
									</p>
								</div>
								<div class='col-lg-6 paddingNull'>
									<p>
										<a href='mailto:".$value->email."' class='emailEmpleado'>
											<img class='img-responsive imgLine' src='".base_url("img/our_team/email.png")."' > 
											EMAIL ALINA
										</a>
									</p>
								</div>
							</div>	
						</div>
					</div>
					";
				}
			}
			return $cuadrito;
		}
		function getEmpleados(){
			// vars 
				$sql = "call shum_getEmpleados()";
			// do it 
				$this->db->trans_start();
					$query = $this->db->query($sql);
					$retorno 	= $query->result(); 
				$this->db->trans_complete();
				$query->free_result();
				$query->next_result();
			return $retorno;
		}
	// map section 
		function getCasasForMapSection(){
			// load 
				$this->load->model("listingsm");
			// vars 
				$listingsModel 	= new Listingsm();
				$casas 			= $listingsModel->getCasas();
				$casas 			= $casas->resultado[0];
				$cuadritosCasa 	= "";
			// do it 
				foreach ($casas as $key => $value) {
					$imgSrc = URLOCAL;
					$img 	= str_replace("../Archivos/","", $value->rutaImg); 
					$imgSrc .= $img;
					$cuadritosCasa .= "
					
						<div class='container-fluid row'>
							<div class='row'>
								<div class='col-lg-12'>
									<img class='img-responsive imgLateral' src='".$imgSrc."' >
								</div>
							</div>
							<div class='row'>
								<div class='col-lg-12 titleCudritoVivienda'>
									<h4>".$value->nombreVivienda."</h3>	
									<h5>".$value->cityTown."</h5>
									<h3>$".$value->listPrice."</h3>
									<a href='".site_url("property_detail/index/".$value->homeId." ")."' >
										<button class='btnReadMore'>Read more</button>
									</a>
								</div>
							</div>	
						</div>
					";
				}
				return $cuadritosCasa;

		}
	// ) propertyType
		function getImageSlider(){
			// vars 
				$sql = "SELECT *
						FROM crm_documento AS documento
						LEFT JOIN crm_ambito AS ambito
						ON  ambito.amb_id = documento.doc_amb_id
						WHERE ambito.amb_exp_id = 1485 AND documento.doc_descripcion = 'slider-home'
						LIMIT 0,4";
			// do it 
				$this->db->trans_start();
					$query = $this->db->query($sql);
					$retorno 	= $query->result(); 
				$this->db->trans_complete();
				$query->free_result();
				$query->next_result();
			return $retorno;
		}
		function getPointsSlider(){
			$img = $this->getImageSlider();
			
		}
	// search bar
		function getSearchBar($op){
			// vars 
				$sql = "call shum_getSearchBar(".$op.");";
			// do it 
				$this->db->trans_start();
					$query 		= $this->db->query($sql);
					$retorno 	= $query->result(); 
				$this->db->trans_complete();
				$query->free_result();
				$query->next_result();
			return $retorno;
		}
		function getCbSearchBar($op){
			// vars 
				$propertyType 	= $this->getSearchBar($op);
				$cbg 			= "<option value='@val'>@txt</option>";
				$cb 			= ""; 
			// do it 
				foreach ($propertyType as $key => $value) {
					$option = 	str_replace("@val",$value->opa_nombre, $cbg);
					$option = 	str_replace("@txt",$value->opa_nombre, $option);
					$cb 	.= 	$option;
				}
			return $cb;	
		}
	// social networks
		function getHomeData(){
			// vars 
				$sql = "CALL shum_getHome();";
			// do it 
				$this->db->trans_start();
					$query 		= $this->db->query($sql);
					$retorno 	= $query->result(); 
				$this->db->trans_complete();
				$query->free_result();
				$query->next_result();
			return $retorno;
		}
		function getHome(){
			$homeData = $this->getHomeData();
			$homeData = $homeData[0];
			foreach ($homeData as $key => $value) {
				if(!strpos($value,"http://")){
					$homeData->$key = "http://".$value;
				}
				
			}
			return $homeData;
		}
	// get home 
		function getHouse(){
			// vars 
				$sql = "CALL shum_getCasas();";
			// do it 
				$this->db->trans_start();
					$query 		= $this->db->query($sql);
					$retorno 	= $query->result(); 
				$this->db->trans_complete();
				$query->free_result();
				$query->next_result();
			return $retorno;
		}
		function getMainUbication(){
			$ubicacion = $this->getUbicationFromCompania(17);
			$ubicacion = $ubicacion[0];
			return $ubicacion;
		}
		function getUbicationFromCompania($compania){
			// vars 
				$sql = "CALL map_getCoordenadasFromCompania(".$compania.")";
			// do it 
				$this->db->trans_start();
					$query 		= $this->db->query($sql);
					$resultado 	= $query->result();
					$query->free_result();
					$query->next_result();
				$this->db->trans_complete();
			return $resultado;
		}
}
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
		$this->load->helper("url");
	}
		function getSortHouse($op){
			// vars 
				$retorno 		= new stdClass();
				$sql 			= "SELECT * 
								   FROM shum_tb_house_listing
								  ";	
				$retorno->div 	= "";
				if($op == 1){
					$sql .= "ORDER BY listPrice ASC"; // low to high
				}else{
					$sql .= "ORDER BY listPrice DESC";
				}
				$houseListings = $this->getResulset($sql);
				$retorno->data = $houseListings;
			// do it 
				foreach ($houseListings as $key => $value) {
					$imgSrc = $this->getImgSrc($value->rutaImg);
					$retorno->div .= $this->getDivCasa($value,$imgSrc);
				}
				return $retorno;

		}
	// news to the market
		function getNewsToTheMarket($l1=0,$l2=4){
			// load 
				$this->load->model("listingsm");
				$listingModel = new Listingsm();
			// vars 
				$divNews 	= "";
				$casas 		= $listingModel->getCasas($l1,$l2);
				$casas 		= $casas->resultado[0];
			// do it 
				foreach ($casas as $key => $value) {
					$imgSrc = $this->getImgSrc($value->rutaImg);
					if($key < 4){
						// <img class='img-responsive imgFull imgNewsToMarket' src='".$imgSrc."'  >
						$divNews .= "
							<div class='col-sm-5 col-md-3 casaNewsToMarket'>
								<a class='aaah' href='".site_url("property_detail/index/".$value->homeId." ")."'>
									<div class='row white n-cuadroCasita'>
										<div class='row container-fluid imgNewsToMarket' style='background:url(".$imgSrc.")'>
											<div class='row container-fluid numImageNewsMarket'>	
												<div class='row cuadritoNum'>
													<img class='imgCamera' src='".base_url("img/elements/news_to_market/camera.png")."'  > 
													<span class='num'> ".$value->numFotos." </span>
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
		function getCuadritosEmpleados($l1=0,$l2=4){
			$empleado = $this->getEmpleados($l1,$l2);
			$cuadrito = "";
			// for ($i=0; $i < 2; $i++) { 
				foreach ($empleado as $key => $value) {
					$img = $this->getImgSrc($value->rutaImg);
					// base_url("img/our_team/persona1.png")
					$cuadrito .= "
					<div class='col-sm-6 col-md-3 container-fluid ourTeamDescription'>
						<a class='aEmpleadoLink' href='".site_url("individual/index/".$value->idEmpleado."")."'>
							<div class='row  boxOurTeam'>
								<div class='row'>
									<div class='col-lg-6 col-md-12 alignTop paddingNull green'>
										<img class='imgTeam imgFull' src='".$img."' >	
									</div>
									<div class='col-lg-6 col-md-12 alignTop container-fluid dataTeam'>
										<h2 class='nombreEmpTeam'> ".$value->nombre."</h2>
										<h3> ".$value->posicion." </h3>
										<p>".$value->shortDescription."</p>
									</div>
								</div>
								<div class='row rowContactoTeam'>
									<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 paddingNull'>
										<p>
											<img class='img-responsive imgLine' src='".base_url("img/our_team/listing.png")."' > 
											".$value->listings." LISTINGS
										</p>
									</div>
									<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 paddingNull'>
										<p>
											<a href='mailto:".$value->email."' class='emailEmpleado'>
												<img class='img-responsive imgLine' src='".base_url("img/our_team/email.png")."' > 
												EMAIL ".$value->simpleName."
											</a>
										</p>
									</div>
								</div>	
							</div>
						</a>
					</div>
					";
				}
			// }
			return $cuadrito;
		}
		function getEmpleados($l1=0,$l2=4){
			// vars 
				// $sql = "call shum_getEmpleados()";
				$sql = "SELECT * FROM shum_tb_emp_nominaemp ";
				if($l1 != -1 && $l2 != -1){
					$sql .= "LIMIT $l1,$l2";
				}
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
		function getCountListing(){
			$sql = "SELECT COUNT(*) AS cnListing
					from shum_tb_house_listing
					WHERE statusHome = 'Publish Item'";
			$retorno = $this->getResulset($sql);
			return $retorno;
		}
		function getDivCasa($value,$imgSrc){
			$div = "
				<div class='container-fluid row'>
					<div class='row'>
						<div class='col-lg-12'>
							<a href='".site_url("property_detail/index/".$value->homeId." ")."' >
							<img class='img-responsive imgLateral' src='".$imgSrc."' >
							</a>
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
			return $div;
		}
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
					$cuadritosCasa .= $this->getDivCasa($value,$imgSrc);
					// $cuadritosCasa .= "
					
					// 	<div class='container-fluid row'>
					// 		<div class='row'>
					// 			<div class='col-lg-12'>
					// 				<img class='img-responsive imgLateral' src='".$imgSrc."' >
					// 			</div>
					// 		</div>
					// 		<div class='row'>
					// 			<div class='col-lg-12 titleCudritoVivienda'>
					// 				<h4>".$value->nombreVivienda."</h3>	
					// 				<h5>".$value->cityTown."</h5>
					// 				<h3>$".$value->listPrice."</h3>
					// 				<a href='".site_url("property_detail/index/".$value->homeId." ")."' >
					// 					<button class='btnReadMore'>Read more</button>
					// 				</a>
					// 			</div>
					// 		</div>	
					// 	</div>
					// ";
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
						ORDER BY documento.doc_fecha_creacion DESC
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
				switch ($op) {
					case 2:
						$simbolo = '+';
						break;
					case 1:
						$simbolo = '+';
						break;
					default:
						$simbolo = '';
						break;
				}
				$cbg 			= "<option value='@val'>@txt$simbolo</option>";
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
		function getPointSlider(){
			$slider 	= $this->getSlider();
			$retorno 	= new stdClass();
			$div 	= '';
			$active = "activePoint";
			foreach ($slider as $key => $value) {
				if(!$key == 0){
					$active = "";
				}
				$div .= "
					<div class='pointCuadro' id='fb'>
						<div class='circle-text circle-slider pointIMG activePoint' other='".$value->rutaImg."'>
							<div>
							</div>
						</div>
					</div>
				";
			}
			$retorno->div 	= $div;
			$retorno->first = $slider[0]->rutaImg;
			return $retorno;
		}
		function getSlider(){
			$sql = "SELECT rutaImg,doc_nombre FROM shum_tb_home_slider ORDER BY doc_fecha_creacion DESC LIMIT 0,4";
			$this->db->trans_start();
				$query = $this->db->query($sql);
			$this->db->trans_complete();
			$retorno = $query->result();
			foreach ($retorno as $key => $value) {
				$retorno[$key]->rutaImg = $this->getImgSrc($value->rutaImg);
			}
			return $retorno;
		}
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
			$homeData->commitmentBackground = $this->getImgSrc($homeData->commitmentBackground);
			foreach ($homeData as $key => $value) {
				if(!strpos($value,"http://") && $key != 'commitmentBackground'){
					$homeData->$key = "http://".$value;
				}
				
			}
			return $homeData;
		}
	// get home 
		function getHouse(){
			// vars 
				$sql = "SELECT * FROM `shum_tb_house_listing` where latitud IS NOT NULL AND longitud IS NOT NULL;";
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
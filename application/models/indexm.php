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
		function getAlinaTweets(){
			$tweets = $this->getTweets(1,"schumacherrlty");
			$text 	= "";
			// print_r($tweets);
			foreach ($tweets as $key => $value) {
				$text .= "<li>
							<p>"
							.$value["text"].
							"</p>
							</li>
						";
			}
			return $text;
		}
		function getAlinaBlog(){
			$feeds 		= $this->getRSS("http://alina.peacefulmediadev.com/feed/");
			$postTitle 	= "";
			foreach ($feeds as $key => $value) {
				$postTitle .= "
					<li style='border-bottom:1px solid rgba(204, 204, 204, 0.5);padding-bottom:15px;'>
						<a href='".$value["link"]."' style='text-decoration:none;'>".$value["title"]."</a>
					</li>
				";
			}
			return $postTitle;
		}
		function getSellerBuyerImage($homeData){
			// vars 
				$sql 				= "SELECT * FROM shum_tb_imageSellerBuyer";
				$result				= $this->getResulset($sql);
				$cuadrito 			= new stdClass();
				$cuadrito->buyers 	= "";
				$cuadrito->sellers 	= "";
			foreach ($result as $key => $value) {
				$ruta 	= $value->doc_ruta.$value->doc_nombre;
				$img 	= $this->getImgSrc($ruta);
				if($value->doc_descripcion == "buyers-home"){
					$cuadrito->buyers = "
					<div class='col-md-6 col-lg-6 cont-sellers' >
						<a href='".$homeData->home_buyer."' target='_blank' >
							<div class='col-lg-12 boxBuySell ' >
								<div class='row' id='boxBuySell0' style='background:url(".$img."); background-size: 100% 100%;'>
									<h2 class='textBuySellerBox text-center'>Home buyers</h2>
								</div>
							</div>
						</a>
					</div>";
				}
				if($value->doc_descripcion == "sellers-home"){
					$cuadrito->sellers = "
					<div class='col-md-6 col-lg-6 cont-sellers' >
						<a href='".$homeData->homeSeller."' target='_blank' >
							<div class='col-lg-12 boxBuySell'>
								<div class='row' id='boxBuySell2' style='background:url(".$img."); background-size: 100% 100%;' >
									<h2 class='textBuySellerBox text-center'>Home sellers</h2>
								</div>
							</div>	
						</a>	
					</div>";
				}
			}
			return $cuadrito;
		}
		function getSortHouse2($op){
			// vars 
				$retorno 		= new stdClass();
				$sql 			= "SELECT * 
								   FROM (".$this->smallLisingSinFoto().") houseListing
								   WHERE marketStatus <> 'Finished'
								  ";	
				$retorno->div 	= "";
				if($op == 1){
					$sql .= "ORDER BY listPrice ASC"; // low to high
				}else{
					$sql .= "ORDER BY listPrice DESC";
				}
				// $sql 			.= "WHERE marketStatus <> 'Finished'";
				$houseListings 	= $this->getResulseti($sql);
				$retorno->cn 	= $houseListings->cn;
				$houseListings 	= $houseListings->query;
				$retorno->data 	= $houseListings;
				// $retorno->cn 	= 
			// do it 
				foreach ($houseListings as $key => $value) {
					$imgSrc = $this->getImgSrc($value->rutaImg);
					$retorno->div .= $this->getDivCasa($value,$imgSrc);
				}
				return $retorno;	
		}
		// function getSortHouse($op){
		// 	// vars 
		// 		$retorno 		= new stdClass();
		// 		$sql 			= "SELECT * 
		// 						   FROM (".$this->getSqlHouseListing().") houseListing
		// 						   WHERE marketStatus <> 'Finished'
		// 						  ";	
		// 		$retorno->div 	= "";
		// 		if($op == 1){
		// 			$sql .= "ORDER BY listPrice ASC"; // low to high
		// 		}else{
		// 			$sql .= "ORDER BY listPrice DESC";
		// 		}
		// 		// $sql 			.= "WHERE marketStatus <> 'Finished'";
		// 		$houseListings 	= $this->getResulseti($sql);
		// 		$retorno->cn 	= $houseListings->cn;
		// 		$houseListings 	= $houseListings->query;
		// 		$retorno->data 	= $houseListings;
		// 		// $retorno->cn 	= 
		// 	// do it 
		// 		foreach ($houseListings as $key => $value) {
		// 			$imgSrc = $this->getImgSrc($value->rutaImg);
		// 			$retorno->div .= $this->getDivCasa($value,$imgSrc);
		// 		}
		// 		return $retorno;

		// }
	// news to the market
		/*function getImagenesNewsToMarket($id){
			$sql 		= "SELECT 
								CONCAT(doc_ruta,doc_nombre) AS imagen 
							FROM crm_documento LEFT JOIN crm_ambito ON amb_id = doc_amb_id WHERE amb_exp_id = ".$id." and doc_tipo = 'image' ";
			$imagenes 	= $this->getResulset($sql);
			$inputs 	= "<div class='sourceImageNewsToMarket'>";
			foreach ($imagenes as $key => $value) {
				if($key == 0){
					$active = "active";
				}else{
					$active = "";
				}
				$imgSrc = $this->getImgSrc($value->imagen);
				$imgSrc = str_replace(" ","%20",$imgSrc);
				$inputs .= "<input type='hidden' class='imgSlideNewsToMarket ".$active."' value='".$imgSrc."'>";
			}
			$inputs 	.= "</div>";
			return $inputs;
		}*/
		function getImagenesNewsToMarket($id){
			$sql 		= "SELECT 
								CONCAT(doc_ruta,doc_nombre) AS imagen 
							FROM crm_documento LEFT JOIN crm_ambito ON amb_id = doc_amb_id WHERE amb_exp_id = ".$id." and doc_tipo = 'image' ";
			$imagenes 	= $this->getResulset($sql);
			$inputs = "<div class='container'>";
			foreach ($imagenes as $key => $value) {
				$imgSrc = $this->getImgSrc($value->imagen);
				$imgSrc = str_replace(" ","%20",$imgSrc);

				if($key == 0){
					$inputs .= "<img class='firstimg imagesNewToMarket2 imagesNewToMarket img-responsive' src='".$imgSrc."'/>";
				}else{
					$inputs .= "<img class='imagesNewToMarket2 imagesNewToMarket img-responsive' style='display:none' src='".$imgSrc."' />";
				}	
			}
			$inputs 	.= "</div>";
			return $inputs;
		}

		function getNewsToTheMarket($l1=0,$l2=4){
			// load 
				$this->load->model("listingsm");
				$listingModel = new Listingsm();
			// vars 
				$divNews 	= "";
				$casas 		= $listingModel->getCasasNewsMarket2($l1,$l2);
				$casas 		= $casas->resultado[0];
			// do it 
				// echo "<pre>";
				// 	print_r($casas);
				// echo "</pre>";
				foreach ($casas as $key => $value) {
					$imgSrc = $this->getImgSrc($value->rutaImg);
					$imgSrc = str_replace(" ","%20",$imgSrc);
					if($key < 4){
						// <img class='img-responsive imgFull imgNewsToMarket' src='".$imgSrc."'  >
						$inputs = $this->getImagenesNewsToMarket($value->homeId);
						$divNews .= "
							<div class='col-sm-5 col-md-3 casaNewsToMarket' id='".$value->homeId."'>

							<a class='aaah' href='".site_url("property_detail/index/".$value->homeId." ")."'>
								<div class='row white n-cuadroCasita'>
									<div class='row container-fluid imgNewsToMarket'>"
									    . $inputs .
										"<div class='row container-fluid numImageNewsMarket'>	
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
						</div>";	
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
					$listingDiv = "";
					if($value->listings != "-1"){
						$listingDiv = "
							<p>
								<img class='img-responsive imgLine' src='".base_url("img/our_team/listing.png")."' > 
								".$value->listings." ACTIVE LISTINGS
							</p>";
					}
				
					$cuadrito .= "
					<div class='col-sm-6 col-md-3 container-fluid ourTeamDescription'>
						<a class='aEmpleadoLink' href='".site_url("individual/index/".$value->idEmpleado."")."'>
							<div class='row  boxOurTeam'>
								<div class='row'>
									<div class='col-lg-6 col-md-12 alignTop paddingNull'>
										<img class='imgTeam imgFull' src='".$img."' >	
									</div>
									<div class='col-lg-6 col-md-12 alignTop container-fluid dataTeam'>
										<h2 class='nombreEmpTeam'> ".$value->nombre."</h2>
										<h3> ".$value->posicion." </h3>
										<p>".$value->shortDescription."</p>
									</div>
								</div>
								<div class='row rowContactoTeam'>
								<ul>
									<li>".$listingDiv."</li>
										<li><p>
											<a href='mailto:".$value->email."' class='emailEmpleado'>
												<img class='img-responsive imgLine' src='".base_url("img/our_team/email.png")."' > 
												EMAIL ".$value->simpleName."
											</a>
									</p></li>
									</ul>
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
				$sql = "SELECT * FROM (".$this->getSqlNominaEmp().") nominaEmp ";
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
					FROM (".$this->getSqlHouseListing().") houseListing
					WHERE statusHome = 'Publish Item' AND marketStatus <> 'Finished' ";
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
			@$retorno->first = $slider[0]->rutaImg;
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
			$homeData->blogsAlina 	= $this->getAlinaBlog();
			$homeData->tweets 		= $this->getAlinaTweets();
			$homeData->commitmentBackground = $this->getImgSrc($homeData->commitmentBackground);
			foreach ($homeData as $key => $value) {
				if(!strpos($value,"http://") && $key != 'commitmentBackground'){
					$homeData->$key = "http://".$value;
				}
				
			}
			return $homeData;
		}
		// function pruebaData(){
		// 	$sql 		= $this->getSqlHouseListing();
		// 	$sql 		= "	SELECT * 
		// 				   	FROM (".$sql.") houseListing
		// 					WHERE marketStatus <> 'Finished'";
		// 	$listing 	= $this->getResulset($sql);
		// 	return $listing;
		// }
	// // get home 
		function getHouse(){
			// vars 
				$sql = "SELECT * FROM (".$this->getSqlHouseListing().") houseListing WHERE marketStatus <> 'Finished' AND  latitud IS NOT NULL AND longitud IS NOT NULL;";
			// do it 
				$this->db->trans_start();
					$query 		= $this->db->query($sql);
					$retorno 	= $query->result(); 
				$this->db->trans_complete();
				$query->free_result();
				$query->next_result();
			return $retorno;
		}
		function getHouseForMap(){
			$houses = $this->getHouse();
			foreach ($houses as $key => $value) {
				$houses[$key]->rutaImg = $this->getImgSrc($value->rutaImg);
			}
			return $houses;
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
		function smallLisingSinFoto(){
			$sql = "SELECT streetNumber.exp_id as homeId,
					CONCAT(
							streetNumber.exp_valor,
							' ',
							streetName.exp_valor,
							' ',
							type.exp_valor
							) AS `nombreVivienda`,
							IF (
								(
									isnull(`city`.`exp_valor`)
									OR (`city`.`exp_valor` = '')
								),
								'Sin asignar',
								`city`.`exp_valor`
							) AS `cityTown`,
							`list`.`exp_valor` AS `listPrice`,
							concat(
								`documento`.`doc_ruta`,
								`documento`.`doc_nombre`
							) AS `rutaImg`,
							marketStatus.marketStatus
					FROM (
						SELECT
							`crm_exp_expediente`.`exp_id` AS `exp_id`,
							`crm_exp_expediente`.`exp_valor` AS `exp_valor`
						FROM
							`crm_exp_expediente`
						WHERE
							(
								`crm_exp_expediente`.`exp_atr_id` = 3868
							)
					) streetNumber
					LEFT JOIN (
						SELECT
							`crm_exp_expediente`.`exp_id` AS `exp_id`,
							`crm_exp_expediente`.`exp_valor` AS `exp_valor`,
							`crm_exp_expediente`.`exp_fecha_creacion` AS `listingDate`
						FROM
							`crm_exp_expediente`
						WHERE
							(
								`crm_exp_expediente`.`exp_atr_id` = 3869
							)
					)streetName
					ON streetNumber.exp_id = streetName.exp_id 
					LEFT JOIN (
						SELECT
							`crm_exp_expediente`.`exp_id` AS `exp_id`,
							`crm_exp_expediente`.`exp_valor` AS `exp_valor`
						FROM
							`crm_exp_expediente`
						WHERE
							(
								`crm_exp_expediente`.`exp_atr_id` = 3870
							)
					) type
					on type.exp_id = streetName.exp_id 
					LEFT JOIN (
						SELECT
							`crm_exp_expediente`.`exp_id` AS `exp_id`,
							`crm_exp_expediente`.`exp_valor` AS `exp_valor`
						FROM
							`crm_exp_expediente`
						WHERE
							(
								`crm_exp_expediente`.`exp_atr_id` = 3875
							)
					) city
					on city.exp_id = streetNumber.exp_id
					LEFT JOIN(
						SELECT
							`crm_exp_expediente`.`exp_id` AS `exp_id`,
							`crm_exp_expediente`.`exp_valor` AS `exp_valor`
						FROM
							`crm_exp_expediente`
						WHERE
							(
								`crm_exp_expediente`.`exp_atr_id` = 3865
							)
					) list
					on list.exp_id = streetNumber.exp_id
					LEFT JOIN (
						
							SELECT *
							FROM (
							SELECT
								`amb`.`amb_exp_id` AS `amb_exp_id`,
								doc_id,
								`doc`.`doc_fecha_creacion` AS `doc_fecha_creacion`,
								`doc`.`doc_ruta` AS `doc_ruta`,
								`doc`.`doc_nombre` AS `doc_nombre`,
								`doc`.`doc_amb_id` AS `doc_amb_id`,
								`doc`.`doc_descripcion` AS `doc_descripcion`,
								doc.doc_orden
							FROM
								(
									`crm_documento` `doc`
									LEFT JOIN `crm_ambito` `amb` ON (
										(
											`amb`.`amb_id` = `doc`.`doc_amb_id`
										)
									)
								)
							WHERE
								(
									(`amb`.`amb_com_id` = 17)
									and `doc`.`doc_tipo` = 'image'

									
								)
								ORDER BY doc_orden
								
							) sliderProperty
							group by amb_exp_id 
						
					) documento
					on documento.amb_exp_id = streetNumber.exp_id
					LEFT JOIN (
						SELECT
							`exp`.`exp_id` AS `exp_id`,
							`exp`.`exp_valor` AS `marketStatus`
						FROM
							`crm_exp_expediente` `exp`
						WHERE
							(
								(`exp`.`exp_atr_id` = 3778)
								AND (`exp`.`exp_com_id` = 17)
								AND (`exp`.`exp_cat_id` = 12)
							)
					) marketStatus
					on marketStatus.exp_id = streetNumber.exp_id";
			return $sql;
		}
		function smallIndexListing(){
			$sql = "SELECT streetNumber.exp_id as homeId,
					imagesHome.numFotos,
					CONCAT(
							streetNumber.exp_valor,
							' ',
							streetName.exp_valor,
							' ',
							type.exp_valor
							) AS `nombreVivienda`,
							IF (
								(
									isnull(`city`.`exp_valor`)
									OR (`city`.`exp_valor` = '')
								),
								'Sin asignar',
								`city`.`exp_valor`
							) AS `cityTown`,
							`list`.`exp_valor` AS `listPrice`,
							concat(
								`documento`.`doc_ruta`,
								`documento`.`doc_nombre`
							) AS `rutaImg`,
							marketStatus.marketStatus
					FROM (
						SELECT
							`crm_exp_expediente`.`exp_id` AS `exp_id`,
							`crm_exp_expediente`.`exp_valor` AS `exp_valor`
						FROM
							`crm_exp_expediente`
						WHERE
							(
								`crm_exp_expediente`.`exp_atr_id` = 3868
							)
					) streetNumber
					LEFT JOIN (
						SELECT
							`crm_exp_expediente`.`exp_id` AS `exp_id`,
							`crm_exp_expediente`.`exp_valor` AS `exp_valor`,
							`crm_exp_expediente`.`exp_fecha_creacion` AS `listingDate`
						FROM
							`crm_exp_expediente`
						WHERE
							(
								`crm_exp_expediente`.`exp_atr_id` = 3869
							)
					)streetName
					ON streetNumber.exp_id = streetName.exp_id 
					LEFT JOIN (
						SELECT
							`crm_exp_expediente`.`exp_id` AS `exp_id`,
							`crm_exp_expediente`.`exp_valor` AS `exp_valor`
						FROM
							`crm_exp_expediente`
						WHERE
							(
								`crm_exp_expediente`.`exp_atr_id` = 3870
							)
					) type
					on type.exp_id = streetName.exp_id 
					LEFT JOIN (
						SELECT
							`crm_exp_expediente`.`exp_id` AS `exp_id`,
							`crm_exp_expediente`.`exp_valor` AS `exp_valor`
						FROM
							`crm_exp_expediente`
						WHERE
							(
								`crm_exp_expediente`.`exp_atr_id` = 3875
							)
					) city
					on city.exp_id = streetNumber.exp_id
					LEFT JOIN(
						SELECT
							`crm_exp_expediente`.`exp_id` AS `exp_id`,
							`crm_exp_expediente`.`exp_valor` AS `exp_valor`
						FROM
							`crm_exp_expediente`
						WHERE
							(
								`crm_exp_expediente`.`exp_atr_id` = 3865
							)
					) list
					on list.exp_id = streetNumber.exp_id
					LEFT JOIN (
						
							SELECT *
							FROM (
							SELECT
								`amb`.`amb_exp_id` AS `amb_exp_id`,
								doc_id,
								`doc`.`doc_fecha_creacion` AS `doc_fecha_creacion`,
								`doc`.`doc_ruta` AS `doc_ruta`,
								`doc`.`doc_nombre` AS `doc_nombre`,
								`doc`.`doc_amb_id` AS `doc_amb_id`,
								`doc`.`doc_descripcion` AS `doc_descripcion`,
								doc.doc_orden
							FROM
								(
									`crm_documento` `doc`
									LEFT JOIN `crm_ambito` `amb` ON (
										(
											`amb`.`amb_id` = `doc`.`doc_amb_id`
										)
									)
								)
							WHERE
								(
									(`amb`.`amb_com_id` = 17)
									and `doc`.`doc_tipo` = 'image'

									
								)
								ORDER BY doc_orden
								
							) sliderProperty
							group by amb_exp_id 
						
					) documento
					on documento.amb_exp_id = streetNumber.exp_id
					LEFT JOIN (
						SELECT
							`exp`.`exp_id` AS `exp_id`,
							`exp`.`exp_valor` AS `marketStatus`
						FROM
							`crm_exp_expediente` `exp`
						WHERE
							(
								(`exp`.`exp_atr_id` = 3778)
								AND (`exp`.`exp_com_id` = 17)
								AND (`exp`.`exp_cat_id` = 12)
							)
					) marketStatus
					on marketStatus.exp_id = streetNumber.exp_id
					lEFT JOIN (
					SELECT numImage.idVivienda,COUNT(numImage.idVivienda) AS numFotos
					FROM (
						SELECT DISTINCT
							`exp`.`exp_id` AS `idVivienda`,
							`documento`.`doc_nombre` AS `doc_nombre`
						FROM
							(
								(
									(
										`crm_documento` `documento`
										LEFT JOIN `crm_ambito` `ambito` ON (
											(
												`ambito`.`amb_id` = `documento`.`doc_amb_id`
											)
										)
									)
									LEFT JOIN `crm_exp_expediente` `exp` ON (
										(
											`exp`.`exp_id` = `ambito`.`amb_exp_id`
										)
									)
								)
								LEFT JOIN `crm_compania` `compania` ON (
									(
										`compania`.`com_id` = `exp`.`exp_com_id`
									)
								)
							)
						WHERE
							(
								(`compania`.`com_id` = 17)
								AND (`exp`.`exp_cat_id` = 12)
								AND (
									`documento`.`doc_tipo` = 'image'
								)
							)
				) numImage
				GROUP BY(numImage.idVivienda)
				) imagesHome
				on imagesHome.idVivienda = streetNumber.exp_id
					";
			return $sql;
		}
}
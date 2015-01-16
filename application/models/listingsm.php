<?php 
include_once(APPPATH.'models/padrem.php');
class Listingsm extends Padrem
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	/*
	* implementar la estandarizacion del metodo htmlcasitas
	*/
	// select display
		function displayBy(){

		}
		function getHTMLcasitas($casitas){
			$html = "";
			foreach ($casitas as $key => $value) {
				$img = $this->getImgSrc($value->rutaImg);
				$html .= $this->getDivCasita($value,$img);
			}
			return $html;
		}
	// ###################################
		function searchNow($frm,$l1=0,$l2=12){
			$retorno 		= new stdClass();
			$casitas 		= $this->casitasResultado($frm,$l1,$l2);
			$countReg		= ceil($casitas->cn[0]->casas/12);
			$activeNumber 	= $l2;
			$paginacion 	= $this->getNumsPaginacion($countReg,$activeNumber);
			$casitas 		= $casitas->result;
			$div 			= "";
			foreach ($casitas as $key => $value) {
				$img = $this->getImgSrc($value->rutaImg);
				$div .= $this->getDivCasita($value,$img);
			}
			// preparando el retorno 
				$retorno->estado 				= true; 
				$retorno->contenido 			= $div;
				$retorno->paginacion 			= $paginacion;
				$retorno->paginasTotales[0] 	= 1;
				$retorno->paginasTotales[1] 	= $countReg;
			// return $casitas;
			return $retorno;
		}
		function retornoStandar($casas,$l1,$l2){
			// vars
				$retorno = new stdClass();
			// do it 
			$casitas 	= $casas->result;
			$casitas 	= $this->getHTMLcasitas($casitas);
			$activeNumber 	= $l2 / ($l2-$l1);
			$countReg		= ceil($casas->cn[0]->casas/12);
			$paginacion		= $this->getNumsPaginacion($countReg,$activeNumber);
			// preparar retorono 
				$retorno->casitas 				= $casitas;
				$retorno->paginacion 			= $paginacion;
				$retorno->paginasTotales[0]		= 1;
				$retorno->paginasTotales[1] 	= $countReg;
			return $retorno;
		}
		function finishedListings($l1=0,$l2=12){
			// vars 
				$frm 				= new stdClass();
				$frm->marketStatus 	= "Finished";
			// do it 
				$casas 		= $this->casitasResultado($frm,$l1,$l2);
				$retorno 	= $this->retornoStandar($casas,$l1,$l2);
				return $retorno;
		}
		function mostRecent($l1=0,$l2=12){
			// vars 
				$retorno 			= new stdClass();
				$frm 				= new stdClass();
				// $frm->recent 		= true;	
				$frm->marketStatus	= "Active";		
			// do it 
				$casas 		= $this->casitasResultado($frm,$l1,$l2);
				$retorno 	= $this->retornoStandar($casas,$l1,$l2);
				return $retorno;
		}
		function casitasFromAgent($agentId,$l1=0,$l2=12){
			// vars 
				$retorno 	= new stdClass();
				$frm 		= new stdClass();
				$agent 		= $this->getNombreFromIdAgent($agentId);
				$frm->agent = $agent;
			// do it 
				$casas 			= $this->casitasResultado($frm,$l1,$l2);
				$retorno 		= $this->retornoStandar($casas,$l1,$l2);
				return $retorno;
					
		}
			function getNombreFromIdAgent($agentId){ // retorna el nombre completo del agente a partir de su id
				// vars 
					$sql = "SELECT * FROM shum_tb_nombrecompleto WHERE idEmpleado = ".$agentId."";
				// do it 
					$this->db->trans_start();
						$query = $this->db->query($sql);
						$query = $query->result();
					$this->db->trans_complete();
					return $query[0]->nombreCompleto;
			}
		function casitasResultado($frm,$l1=0,$l2=12){
			// vars 
				$regresar = new stdClass();
				if(!empty($frm)){
					$sql[0] = $this->addWhere("",$frm);
				}else{
					$sql[0] = "";
				}
				$sql[1] = "SELECT COUNT(*) AS casas
				FROM (".$this->getSqlHouseListing().") houseListing ".$sql[0];
				$sql[0] = "SELECT * 
				FROM (".$this->getSqlHouseListing().") houseListing ".$sql[0]."
				LIMIT ".$l1.",".$l2."
				";
			// do it 
				$this->db->trans_start();
					$query 		= $this->db->query($sql[0]);
					$retorno[0] = $query->result();
					$query 		= $this->db->query($sql[1]);
					$retorno[1] = $query->result();
				$this->db->trans_complete();
				// preparando retorno
					$regresar->result 				= $retorno[0];
					$regresar->cn 					= $retorno[1];
					$regresar->query 				= $sql[1];
				return $regresar;
		}
		function addWhere($sql,$frm){
			$cn = 0;
			if(isset($frm->active) AND $frm->active != -1){
				$condicion[$cn] = "rooms >= ".$frm->cbMinBed." ";
				$cn++;
			}
			if(isset($frm->cbMinBed) AND $frm->cbMinBed != -1){
				$condicion[$cn] = "rooms >= ".$frm->cbMinBed." ";
				$cn++;
			}
			if(isset($frm->cbMinBath) AND $frm->cbMinBath != -1){
				$condicion[$cn] = "bathroom >= ".$frm->cbMinBath." ";
				$cn++;
			}
			if(isset($frm->cbMinSf) AND $frm->cbMinSf != -1){
				$condicion[$cn] = "sq >= ".$frm->cbMinSf." ";
				$cn++;	
			}
			if(isset($frm->propertyType) AND $frm->propertyType != -1){
				$condicion[$cn] = "propertyType = '".$frm->propertyType."' ";
				$cn++;		
			}
			if(isset($frm->cbMinPrice) AND $frm->cbMinPrice != -1){
				$condicion[$cn] = "listPrice >= ".$frm->cbMinPrice." ";
				$cn++;		
			}
			if(isset($frm->cbMaxPrice) AND $frm->cbMaxPrice != -1){
				$condicion[$cn] = "listPrice <= ".$frm->cbMaxPrice." ";
				$cn++;		
			}
			if(isset($frm->agent)){
				$condicion[$cn] = "agent = '".$frm->agent."' ";
				$cn++;
			}
			if(isset($frm->marketStatus) && !empty($frm->marketStatus)){
				$condicion[$cn] = "marketStatus = '".$frm->marketStatus."' ";
				$cn++;
			}
			if(isset($condicion) && !empty($condicion)){
				foreach ($condicion as $key => $value) {
					if($key == 0){
						$sql .= "WHERE ";
						$sql .= $value;
					}else{
						$sql .= "AND ".$value; 
					}
				}	
			}

			if(isset($frm->recent) && $frm->recent){
				$sql = "ORDER BY homeId DESC";
			}

			return $sql;
		}
	function getDivCasita($value,$imgSrc){
		if($value->marketStatus == "Finished"){
			$textoCasita = "Finished";
		}else{
			$textoCasita = "";	
		}
		$imgSrc = str_replace(" ","%20",$imgSrc);
		// <img class='imgFull' src='".$imgSrc."' >
		$div = "
					<div class='col-lg-3 col-md-4 col-sm-4 casa'>
						<a class='aCasa' href='".site_url("property_detail/index/".$value->homeId." ")."'>
							<div class='row imgListing'  style='background:url(".$imgSrc.")'>
								<div class='row container-fluid'>
									<h2 class='textEstadoCasa'>".$textoCasita."<h2>
								</div>
							</div>
							<div class='row container-fluid descripcionCasa'>
								<div class='row container-fluid'>
									<h3>".$value->nombreVivienda."</h2>	
								</div>
								<div class='row container-fluid'>
									<i class='fa fa-map-marker mappin'></i>
									<h5 class='cityTown'>".$value->cityTown."</h5>
								</div>
								<div class='row container-fluid'>
									<h2>$".$value->listPrice."</h2>
								</div>
								<div class='row container-fluid'>
									<div class='col-md-4 col-sm-4 col-xs-4 textFootListing '>
										<span class='titleFootDescriptionCasa'>SQ FT:</span><span class='desFootDescriptionCasa'>".$value->sq." ft</span>
									</div>
									
									<div class='col-md-4 col-sm-4 col-xs-4 textFootListing ' >
										<span class='titleFootDescriptionCasa'>BED:</span> <span class='desFootDescriptionCasa'>".$value->rooms."</span>
									</div>								
									<div class='col-md-4 col-sm-4 col-xs-4 textFootListing '>
										<span class='titleFootDescriptionCasa'>BATH:</span> <span class='desFootDescriptionCasa'>".$value->bathroom."</span> 
									</div>
								</div>
							</div>
						</a>
					</div>
				";
		return $div;
	}
	function getListasCasas($l1=0,$l2=12){
		// vars
			$var 			= $this->getCasas($l1,$l2);
			$casas 			= $var->resultado[0];
			$cn 			= 0; 
			$html 			= "";
			$retorno 		= new stdClass();
			$countReg 		= $var->resultado[1][0]->casas / 12;
			$countReg 		= ceil($countReg);
			$activeNumber 	= $l2; 
		foreach ($casas as $key => $value) {
			if($cn == 0){
				//$html .= "<div class='row container-fluid'>";
			}
			// base_url("img/listings/h1.png")
			$imgSrc = URLOCAL;
			$imgSrc	.= str_replace("../Archivos/","", $value->rutaImg); 
			$html 	.= $this->getDivCasita($value,$imgSrc);
			if($cn == 3){
				$cn = 0;
				//$html .= "</div>";
			}else{
				$cn++;
			}	
		}
		$retorno->cn 				= $this->getNumsPaginacion($countReg,$activeNumber);
		$retorno->html 				= $html;
		$retorno->paginasTotales[0] = 1;
		$retorno->paginasTotales[1] = $countReg;
		$retorno->query 			= $var->query;
		return $retorno;
	}
	function getCasas($l1=0,$l2=12){
		// vars 
			// mucho ojo podria afectar a otro lado
			$sql[0] 	= "SELECT * 
						   FROM (".$this->getSqlHouseListing().") houseListing
						   ORDER BY homeId DESC
						   LIMIT ".$l1." , ".$l2." 
						   ";
			$sql[1] 	= "SELECT COUNT(*) AS casas
					   		FROM (".$this->getSqlHouseListing().") houseListing
					   		";
			$regresar 	= new stdClass();
		// do it 
			$this->db->trans_start();
				$query 		= $this->db->query($sql[0]);
				$retorno 	= $query->result();
				$query 		= $this->db->query($sql[1]);
				$retorno2 	= $query->result();
				// $query->free_result();
				// $query->next_result();
			$this->db->trans_complete();
			$regresar->resultado[0] = $retorno;
			$regresar->resultado[1] = $retorno2;
			$regresar->query 		= $sql[0];
		return $regresar;
	}
	function getCasa($homeId){
		$this->db->trans_start();
			// $query = $this->db->get_where('shum_tb_house_listing', array('homeId' => $homeId));
			$query = "SELECT * FROM (".$this->getSqlHouseListing().") houseListing WHERE 'homeId' = ".$homeId." ";
		$this->db->trans_complete();
		$retorno = $query->result();
		return @$retorno[0];
	}
	function getNumsPaginacion($cn,$active=0){ // variable filtro se usara para saber si se uso una busqueda del searchbar
		$div = "
			<div class='col-lg-1 col-sm-1 imgNav' direccion='0' id='imgNavLeft'>
				<i class='fa fa-angle-left blank'></i>
			</div>
		";
		for ($i=0; $i < 9; $i++) { 
			if($i == ($active-1) ){
				$txtActive = "activeNumber";
			}else{
				$txtActive = "";
			}
			if($i % 10){
					
			}
			$div .= "
				<div class='btnPaginacion col-lg-1 col-sm-1 ".$txtActive."' valor='".($i+1)."'>
					".($i+1)."
				</div>
			";
		}
		$div .= "
		<div class='col-lg-1 col-sm-1 imgNav' direccion='1' id='imgNavRight'>
			<i class='fa fa-angle-right blank'></i>
		</div>
		";
		return $div;

	}
	function getCasasNewsMarket($l1=0,$l2=12){
		// vars 
			// mucho ojo podria afectar a otro lado
			$sql[0] 	= "SELECT * 
						   FROM (".$this->getSqlHouseListing().") houseListing
						   WHERE marketStatus <> 'Finished'
						   ORDER BY homeId DESC
						   LIMIT ".$l1.",".$l2." 
						   ";
			$sql[1] 	= "SELECT COUNT(*) AS casas
					   		FROM (".$this->getSqlHouseListing().") houseListing
					   		WHERE marketStatus <> 'Finished'
					   		";
			$regresar 	= new stdClass();
		// do it 
			$this->db->trans_start();
				$query 		= $this->db->query($sql[0]);
				$retorno 	= $query->result();
				$query 		= $this->db->query($sql[1]);
				$retorno2 	= $query->result();
				// $query->free_result();
				// $query->next_result();
			$this->db->trans_complete();
			$regresar->resultado[0] = $retorno;
			$regresar->resultado[1] = $retorno2;
		return $regresar;
	}
	

}
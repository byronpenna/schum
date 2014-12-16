<?php 
include_once(APPPATH.'models/padrem.php');
class Property_detailsm extends Padrem
{
	function __construct()
	{

	}
		function getKeys($homeId){
			$sql = "SELECT * FROM schum_tb_opcionesexp WHERE expop_exp_id = ".$homeId."";
			$this->db->trans_start();
				$query = $this->db->query($sql);
			$this->db->trans_complete();
			return $query->result();
		}
		function getDivKeys($homeId){
			$keys 		= $this->getKeys($homeId);
			$div 		= ""; 
			$keysArr 	= new stdClass();
			foreach ($keys as $key => $value) {
				$propiedad = $value->opa_atr_id;
				if(isset($keysArr->$propiedad)){
					$keysArr->$propiedad .= ",";
				}else{
					$keysArr->$propiedad = "";
				}
				$keysArr->$propiedad .= $value->opa_nombre;
			}
			foreach ($keysArr as $key => $value) {
				$div .= "<article id='contkey'><h4>".$this->getAtrName($key)."</h4>
				<p>".$value."</p></article>
				";
			}
			return $div;
		}
		function getOtherKeysPropertys($homeId){
			$sql = "select * from shum_tb_keysproperty where exp_id = ".$homeId."";
			$this->db->trans_start();
			$query = $this->db->query($sql);
			$this->db->trans_complete();
			$query = $query->result();
			return $query;
		}
		function getOthersDivKey($homeId){
			$otherKeys 	= $this->getOtherKeysPropertys($homeId);
			$keysDiv 	= $this->getDivKeys($homeId);
			foreach ($otherKeys as $key => $value) {
				$keysDiv .= "<h4>".$value->atr_nombre."</h4>
				<p>".$value->exp_valor."</p>
				";
			}
			return $keysDiv;
		}
		function getAtrName($key){
			$sql = "SELECT atr_nombre FROM crm_atr_atributo WHERE atr_id = ".$key."";
			$this->db->trans_start();
				$query = $this->db->query($sql);
			$this->db->trans_complete();
			$query = $query->result();
			return $query[0]->atr_nombre;
		}
		// #########################################
			function getBoolOpenHouse($homeId){
				$this->db->trans_start();
					$query = $this->db->query("SELECT COUNT(*) AS existe FROM shum_tb_openhouse WHERE homeId = ".$homeId." ");
				$this->db->trans_complete();
				$retorno = $query->result();
				if($retorno[0]->existe > 0){
					return true;
				}else{
					return false;
				}
			}
			function getEmpInformation($agentName){
				// load
					$this->load->model("individualm");
				// vars 
					$individualModel 	= new Individualm();					
					$idEmpleado 		= $this->getEmpId($agentName);
					if(!empty($idEmpleado)){
						$empleado 					= $individualModel->getEmpleado($idEmpleado);	
						$empleado[0][0]->listings 	= $this->getListing($agentName);
					}else{
						$empleado 			= new stdClass();
						$empleado->estado 	= false;
					}
					return $empleado;
			}
			function getListing($agentName){
				$sql = "SELECT *
						FROM shum_tb_especial_listing
						WHERE agente = '".$agentName."'";
				$listing = $this->getResulset($sql);
				return $listing[0]->cnListings;
			}
			function getEmpId($empNombre){
				$sql = "SELECT idEmpleado 
						FROM shum_tb_nombrecompleto AS nombreCompleto
						WHERE nombreCompleto.nombreCompleto = '".$empNombre."' ";
				$retorno = $this->getResulset($sql);
				if( !empty($retorno) ){
					$retorno = $retorno[0]->idEmpleado;
				}
				return $retorno;
			}
		// #########################################
		function getPropertyInformation($homeId){
			$sql = "SELECT * 
					FROM shum_tb_house_listing
					WHERE homeId = ".$homeId." ";
			$this->db->trans_start();
				$query 		= $this->db->query($sql);
				$retorno  	= $query->result();
			$this->db->trans_complete();
			// preparando el envio 
				if($retorno[0]->pdfFeature != '#'){
					$retorno[0]->pdfFeature = $this->getImgSrc($retorno[0]->pdfFeature);	
				}
				
			return $retorno[0];
		}

		function divAppliances($homeId){
			// vars
				$appliances = $this->getAppliances($homeId);
				$div 		= "";
			// do it 
				foreach ($appliances as $key => $value) {
					if($key == 0){
						$div .= $value->opa_nombre;
					}else{
						$div .= ",".$value->opa_nombre;
					}
				}
				$div .= ".";
			return $div;
		}
		function getAppliances($homeId){
			$sql = "SELECT * 
					FROM shum_tb_house_inclusions
					WHERE homeId = ".$homeId." ";
			$retorno = $this->getResulset($sql);
			return $retorno;
		}
	// slider 
		function getThumbnail($l1,$l2,$homeId){
			// vars
				$images = $this->getImages($l1,$l2,$homeId);
			// do it
				$img = "";
				foreach ($images as $key => $value) {
					$img[$key] = $this->getUrlImage($value);
					$img[$key] .= $value->doc_nombre;
				}
			return $img;
		}
		function getImgThumbnail($l1,$l2,$homeId){
			$thumbnails = $this->getThumbnail($l1,$l2,$homeId);
			// $miniatura 	= "<div class='col-lg-5 col-sm-5 paddingNull'>"; 
			$miniatura 		= new stdClass(); 
			$miniatura->div 	= ""; 
			$miniatura->first 	= "";
			if(isset($thumbnails) && !empty($thumbnails) && is_array($thumbnails)){
				
				foreach ($thumbnails as $key => $value) {
					if($key == 0){
						$miniatura->first = $value;
					}
					$miniatura->div .= "					
							<div><img class='thumbnailSlider imgFull' src=".$value." />	</div>
					";
				}	
			}
			// $miniatura .= "</div>";	
			return $miniatura;
		}
		function getImages($l1,$l2,$homeId='1485'){
			// vars 
				$sql = "SELECT *
						FROM crm_documento AS documento
						LEFT JOIN crm_ambito AS ambito
						ON  ambito.amb_id = documento.doc_amb_id
						WHERE ambito.amb_exp_id = ".$homeId." AND documento.doc_descripcion = 'slider-property' 
						ORDER BY documento.doc_orden
						LIMIT 0,12
						";
			// do it 
				$this->db->trans_start();
					$query 		= $this->db->query($sql);
					$retorno 	= $query->result();
				$this->db->trans_complete();
				$query->free_result();
				$query->next_result();
			return $retorno;	
		}
		function getUrlImage($image){
			$imgSrc = URLOCAL;
			$imgSrc .= str_replace("../Archivos/","", $image->doc_ruta);
			return $imgSrc;
		}
		function getSlider($idProperty){
			@$images = $this->getImages(0,1,$idProperty);
			@$imgSrc = $this->getUrlImage($images[0]);
			@$imgSrc .= $images[0]->doc_nombre;
			// la url si debe ser la del server aunque ahorita este como site_url
			// $imgPrincipal = "<img class='imgFull' src='".$imgSrc." ' />";
			$imgPrincipal = $imgSrc;
			return $images;
		}
}
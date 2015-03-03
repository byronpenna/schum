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
		function getDivKeys($value,$atrNombre){
			$div = "
			<article id='contkey' class='ckeyK'><h4>".$atrNombre."</h4>
				<p>".$value."</p>
			</article>
			";
			return $div;
		}
		
		function getOtherKeysPropertys($homeId){
			// $sql = "SELECT * FROM shum_tb_keysproperty where exp_id = ".$homeId."";
			$sql = "SELECT * from 
				(
					select 
					expop_exp_id as exp_id,
					expop_atr_id as atr_id,
					if( atr_nombre = 'Neighbourhood / Subdivision Rural Municipality','Neighbourhood',atr_nombre) as atr_nombre,
					opa_nombre AS exp_valor
					from crm_expop_expedienteopcion 
					inner join crm_atr_atributo 
					on atr_id = expop_atr_id
					INNER JOIN crm_opa_opcionatr
					on opa_id = expop_opa_id
					where expop_exp_id = ".$homeId." 
				) yeah
			 union select 
	`exp_id`,
	`atr_id`,
	if( atr_nombre = 'Neighbourhood / Subdivision Rural Municipality','Neighbourhood',	atr_nombre) as atr_nombre, 
	 `exp_valor`
			from shum_tb_keysproperty where exp_id = ".$homeId."";
			$this->db->trans_start();
			$query = $this->db->query($sql);
			$this->db->trans_complete();
			$query = $query->result();
			return $query;
		}
		function getArrTitulo($yearBuilt,$school){

			$titulo[0] = new stdClass(); 	$titulo[1] = new stdClass(); 
			$titulo[2] = new stdClass();	$titulo[3] = new stdClass();
			$titulo[4] = new stdClass();	$titulo[5] = new stdClass();
			$titulo[6] = new stdClass();

			$titulo[0]->text = "<h2 class='txtSubtitle'>Property description</h2>"; 	$titulo[1]->text = "<h2 class='txtSubtitle'>general info</h2>"; 
			$titulo[2]->text = "<h2 class='txtSubtitle'>Lot information</h2>";			$titulo[3]->text = "<h2 class='txtSubtitle'>taxes and local improvements</h2>";
			$titulo[4]->text = "<h2 class='txtSubtitle'>Features</h2>"; 					$titulo[5]->text = "<h2 class='txtSubtitle'>Interior</h2>";
			$titulo[6]->text = "<h2 class='txtSubtitle'>Utilities</h2>";


			


			$titulo[0]->estado = false; 	$titulo[1]->estado = false; 
			$titulo[2]->estado = false;		$titulo[3]->estado = false;
			$titulo[4]->estado = false;		$titulo[5]->estado = false;
			$titulo[6]->estado = false;

			return $titulo;
		}
		function getSqlRooms($homeId){
			$sql = "SELECT atr_id,atr_nombre,exp_valor,if(atr_nombre like '%Room Type%','1',
						if(atr_nombre like '%Dimension 1%',2.1,
							if(atr_nombre like '%Dimension 2%',2.2,'-')
						)
					) as nivel 
					from crm_atr_atributo 
					inner join crm_exp_expediente
					on exp_atr_id = atr_id
					where atr_cat_id = 12 and atr_area = 'Rooms' and atr_comp_id = 17 
					and (atr_tipo_objeto = 'Text' or atr_tipo_objeto = 'Select') and exp_id = ".$homeId."
 				";
			return $sql;
		}
		function getRooms($homeId){
			$rooms 		= $this->getResulset($this->getSqlRooms($homeId));
			$keysRooms 	= "<h2 class='txtSubtitle'>Approx. Room Sizes</h2>"; 
			$detalle 	= false;
			foreach ($rooms as $key => $value) {
				if($value->nivel == "1" && $value->exp_valor != ""){
					$keysRooms .= "
						<article id='contkey' class='ckeyK'>
							<h4 class='text-center'>".$value->exp_valor."</h4>
							<p class='text-center'>
						";
					$detalle = true;
				}	
				if($value->nivel == "2.1" && $detalle == true){
					$keysRooms .= $value->exp_valor;
				}
				if($value->nivel == "2.2" && $detalle == true){
					$keysRooms .= " x ".$value->exp_valor."</p></article>";
					$detalle = false;
				}
			}
			return $keysRooms;
		}
		function getArrTitleKey(){
			$arr = new stdClass();
			$arr->propertyDescription 	= array(5327,3928,3931,3929);
			$arr->generalInfo 			= array(3872,3873,3884,3885,3886);
			$arr->lotInformation 		= array(3933,3934,3935,3936);
			$arr->taxes 				= array(3938,3939,3940,3941,3942,3943,3944);
			$arr->remark 				= array(3949,3950,3951,3952,3953,3954,3955,3956,4003,3958,3959,3061,3960,3961);
			$arr->interior 				= array(3964,3965,3967,3968,3969,3970,3971,3972,3973,3966,3977);
			$arr->util 					= array(3994,3995,3996,3997,4008);
			return $arr;
		}
		function getCheckKeys($homeId,$yearBuilt="",$school){
			// $keys 		= $this->getKeys($homeId);
			$arr 		= $this->getArrTitleKey();
			$titulo 	= $this->getArrTitulo($yearBuilt,$school);
			$div 		= ""; 
			$keysArr 	= new stdClass();
			// foreach ($keys as $key => $value) {
			// 	$propiedad = $value->atr_id;
			// 	if(isset($keysArr->$propiedad)){
			// 		$keysArr->$propiedad .= ",";
			// 	}else{
			// 		$keysArr->$propiedad = "";
			// 	}
			// 	$keysArr->$propiedad .= $value->opa_nombre;
			// }
			// *********************** 
				$otherKeys 	= $this->getOtherKeysPropertys($homeId);
				foreach ($otherKeys as $key => $value) {		
					// $keyDiv = $this->getDivKeys($value->exp_valor,$value->atr_nombre);
					if(!isset($keyDiv[$value->atr_id])){
						$keyDiv[$value->atr_id] = "<article id='contkey' class='ckeyK'><h4 class='text-center'>".$value->atr_nombre."</h4>
									<p>".$value->exp_valor;
					}else{
						$keyDiv[$value->atr_id] .= ", ".$value->exp_valor;
					}
					
				}
				if(isset($keyDiv)){
					foreach ($keyDiv as $key => $value) {
						$keyDiv[$key] .= "</p>
						</article>";
					}	
				}
				
				$variableGay = array();
				foreach ($otherKeys as $key => $value) {		
					
					if(in_array($value->atr_id,$arr->propertyDescription)){
						if( @!isset($variableGay[$value->atr_id]) || @!$variableGay[$value->atr_id] ){
							$titulo[0]->estado = true;
							$titulo[0]->text .= $keyDiv[$value->atr_id]; 	
						}
					}else if(in_array($value->atr_id,$arr->generalInfo)){
						if( @!isset($variableGay[$value->atr_id]) || @!$variableGay[$value->atr_id] ){
							$titulo[1]->estado = true;
							$titulo[1]->text .= $keyDiv[$value->atr_id];
						}
					}else if(in_array($value->atr_id,$arr->lotInformation)){
						if( @!isset($variableGay[$value->atr_id]) || @!$variableGay[$value->atr_id] ){
							$titulo[2]->estado = true;
							$titulo[2]->text .= $keyDiv[$value->atr_id];
						}
					}else if(in_array($value->atr_id,$arr->taxes)){
						if( @!isset($variableGay[$value->atr_id]) || @!$variableGay[$value->atr_id] ){
							$titulo[3]->estado = true;
							$titulo[3]->text .= $keyDiv[$value->atr_id];
						}
					}else if(in_array($value->atr_id,$arr->remark)){
						if( @!isset($variableGay[$value->atr_id]) || @!$variableGay[$value->atr_id] ){
							$titulo[4]->estado = true;
							$titulo[4]->text .= $keyDiv[$value->atr_id];
						}
					}else if(in_array($value->atr_id,$arr->interior)){
						if( @!isset($variableGay[$value->atr_id]) || @!$variableGay[$value->atr_id] ){
							$titulo[5]->estado = true;
							$titulo[5]->text .= $keyDiv[$value->atr_id];
						}
					}else if(in_array($value->atr_id,$arr->util)){
						if( @!isset($variableGay[$value->atr_id]) || @!$variableGay[$value->atr_id] ){
							$titulo[6]->estado = true;
							$titulo[6]->text .= $keyDiv[$value->atr_id];
						}
					}




					$variableGay[$value->atr_id] = true;
				}
				if($yearBuilt != ""){
					$titulo[0]->text .= "
					<article id='contkey'>
						<h4 class='text-center'>Year Built</h4>
						<p>".$yearBuilt."</p>
					</article>
					";
				}

				if($school != ""){
					$titulo[4]->text .= "
					<article id='contkey'>
						<h4 class='text-center'>School Division</h4>
						<p>".$school."</p>
					</article>"; 
				}
				
			// ***********************
				// foreach ($keysArr as $key => $value) {
				// 	$atrNombre 	= $this->getAtrName($key);
				// 	// $div 	.= $this->getDivKeys($value,$atrNombre);
				// 	$keyDiv = $this->getDivKeys($value,$atrNombre);
				// 	if(in_array($key,$arr->propertyDescription)){
				// 		$titulo[0]->estado = true;
				// 		$titulo[0]->text .= $keyDiv; 
				// 	}else if(in_array($key,$arr->generalInfo)){
				// 		$titulo[1]->estado = true;
				// 		$titulo[1]->text .= $keyDiv;
				// 	}else if(in_array($key,$arr->lotInformation)){
				// 		$titulo[2]->estado = true;
				// 		$titulo[2]->text .= $keyDiv;
				// 	}else if(in_array($key,$arr->taxes)){
				// 		$titulo[3]->estado = true;
				// 		$titulo[3]->text .= $keyDiv;
				// 	}else if(in_array($key,$arr->remark)){
				// 		$titulo[4]->estado = true;
				// 		$titulo[4]->text .= $keyDiv;
				// 	}
				// }
			foreach ($titulo as $key => $value) {
				if($value->estado){
					$div .= $value->text;	
				}
			}
			return $div;
		}
		function getOthersDivKey($homeId){

			$otherKeys 	= $this->getOtherKeysPropertys($homeId);
			$keysDiv 	= $this->getCheckKeys($homeId);
			$arr 		= $this->getArrTitleKey();
			$titulo 	= $this->getArrTitulo();

			foreach ($otherKeys as $key => $value) {		
				$keyDiv = $this->getDivKeys($value->exp_valor,$value->atr_nombre);
				if(in_array($value->atr_id,$arr->propertyDescription)){
					$titulo[0]->estado = true;
					$titulo[0]->text .= $keyDiv; 
				}else if(in_array($value->atr_id,$arr->generalInfo)){
					$titulo[1]->estado = true;
					$titulo[1]->text .= $keyDiv;
				}else if(in_array($value->atr_id,$arr->lotInformation)){
					$titulo[2]->estado = true;
					$titulo[2]->text .= $keyDiv;
				}else if(in_array($value->atr_id,$arr->taxes)){
					$titulo[3]->estado = true;
					$titulo[3]->text .= $keyDiv;
				}else if(in_array($value->atr_id,$arr->remark)){
					$titulo[4]->estado = true;
					$titulo[4]->text .= $keyDiv;
				}
			}

			foreach ($titulo as $key => $value) {
				if($value->estado){
					$keysDiv .= $value->text;	
				}
				
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
						FROM (".$this->getSqlEspecialListing().") specialListing
						WHERE agente = '".$agentName."'";
				$listing = $this->getResulset($sql);
				return @$listing[0]->cnListings;
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
					FROM (".$this->getSqlHouseListing().") houseListing
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
			$miniatura->min 	= "";
			if(isset($thumbnails) && !empty($thumbnails) && is_array($thumbnails)){
				
				foreach ($thumbnails as $key => $value) {
					$value = str_replace(" ","%20",$value);
					if($key == 0){
						$miniatura->first = $value;
					}
					if($key == 0){
						$position = "z-index:40";
					}else{
						$position = "";
					}
					$miniatura->div .= "
					<a class='fancybox-button'  rel='fancybox-button' href='".$value."'>
						<img class='imgNewSlider' style='".$position."' src='".$value."' />
					</a>
					";
					$miniatura->min .= "
						<div>
							<img class='thumbnailSlider imgFull' src=".$value." />	
						</div>";
					// $miniatura->div .= "					
					// 		<div><img class='thumbnailSlider imgFull' src=".$value." />	</div>
					// ";
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
						WHERE ambito.amb_exp_id = ".$homeId." and doc_tipo = 'image'
						ORDER BY documento.doc_orden
						LIMIT ".$l1.",".$l2."
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
		function getSlider2($idProperty){
			@$images = $this->getImages(0,1,$idProperty);
			@$imgSrc = $this->getUrlImage($images[0]);
			@$imgSrc .= $images[0]->doc_nombre;
			// la url si debe ser la del server aunque ahorita este como site_url
			// $imgPrincipal = "<img class='imgFull' src='".$imgSrc." ' />";
			$imgPrincipal = $imgSrc;
			return $imgPrincipal;
		}

}
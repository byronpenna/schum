<?php
include_once(APPPATH.'models/padrem.php');
class Calendarm extends Padrem
{
	
	function __construct() 
	{
		parent::__construct();
	}
	function getAllOpenHouse(){
		$this->db->trans_start();
			$query = $this->db->query("SELECT * FROM shum_tb_openhouse ORDER BY startDate DESC LIMIT 0,3");
		$this->db->trans_complete();
		return $query->result();
	}
	function getDivOpenHouseGeneral(){
		// load 
			$this->load->model("listingsm");
		// vars
			$listingModel 	= new Listingsm();
			$openHouse 	= $this->getAllOpenHouse();
			$casa 		= $openHouse; 	
			$div 		= "";
			// $div = $openHouse;
		foreach ($openHouse as $key => $value) {
			$casa 	= $listingModel->getCasa($value->homeId);
			if(is_object($casa)){
				$img 	= $this->getImgSrc($casa->rutaImg);
				$div 	.= $this->templateDiv($casa,$value,$img);	
			}
			// $div .= "| ".print_r($casa).",".$value->homeId." |";
		}
		return $div;
	}
	function getOpenHouse($homeId){
		$this->db->trans_start();
			$query = $this->db->query("SELECT * FROM shum_tb_openhouse WHERE homeId = ".$homeId." LIMIT 0,3");
		$this->db->trans_complete();
		return $query->result();
	}
	function templateDiv($casa,$value,$img){
		$div = "
			<div class='col-xs-12 col-sm-10 col-sm-offset-1  col-md-9 col-sx-10 col-lg-9 calendar'>
				<div class='col-xs-12 col-sm-3 col-md-3 col-lg-3 photosection'>
                    <div class='imgfull'>
					   <img src='".$img."' class='imgfull row'>
                    </div>
					<h2>".$casa->nombreVivienda."</h2>
					<i class='fa fa-map-marker icon'></i> <h3>&nbsp;".$casa->cityTown."</h3>
				</div>
				<div class=' col-xs-12 col-sm-6 col-md-6 col-lg-6 descriptionsection'>
					<div class='col-xs-12 descript'>
						<h2>Description</h2>
						<p>
							".$casa->description."
						</p>
					</div>
					<h4 class='price price1'>$".$casa->listPrice."</h4>
					<div class='col-xs-12 des' style='text-align:justify'>
						<h4 class='price'>$".$casa->listPrice." |</h4><h4 class='descr'>SQ FT:".$casa->sq." ft2 |</h4><h4 class='descr'>BED: ".$casa->rooms." |</h4><h4 class='descr'>BATH: ".$casa->bathroom."</h4>
					</div>
				</div>
				<div class='col-xs-12 col-sm-3 col-md-3 col-lg-3'>
					<div class='horario col-xs-12' >
						<i class='fa fa-calendar icono'></i>
						<h3>DATE: ".strtoupper(date("M, d Y",strtotime($value->startDate)))."</h3>
						<h3>TIME: ".date("g:iA ",strtotime($value->age_hora_inicio))." - ".date("g:iA ",strtotime($value->age_hora_fin))." </h3>
					</div>
					<div class='horario1 col-xs-12' >
						<h4 class='text-center'>".strtoupper(date("F, d Y",strtotime($value->startDate)))." ".date("g:iA ",strtotime($value->age_hora_inicio))." - ".date("g:iA ",strtotime($value->age_hora_fin))." </h4>
					</div>
				</div>
			</div>
		";	
		return $div;
	}
	function getDivOpenHouse($homeId){
		// loads 
			$this->load->model("listingsm");
		// vars 
			$listingModel 	= new Listingsm();
			$casa 			= $listingModel->getCasa($homeId);;
			$openHouse 		= $this->getOpenHouse($homeId);
			$div 			= "";
			$img 			= $this->getImgSrc($casa->rutaImg);
		// do it 
			foreach ($openHouse as $key => $value) {
				$div .= $this->templateDiv($casa,$value,$img);
			}
		return $div;	
	}
}
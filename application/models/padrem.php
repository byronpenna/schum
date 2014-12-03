<?php 
class Padrem extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
	}
	public function getResulset($sql){
		$this->db->trans_start();
			$query 		= $this->db->query($sql);
			$retorno 	= $query->result(); 
			$query->free_result();
			$query->next_result();
		$this->db->trans_complete();
		return $retorno;
	}
	public function getImgSrc($imgRuta){
		$imgSrc = URLOCAL;
		$img 	= str_replace("../Archivos/","", $imgRuta); 
		$imgSrc .= $img;
		return $imgSrc;
	}
}
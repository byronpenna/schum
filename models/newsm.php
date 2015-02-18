<?php 
include_once(APPPATH.'models/padrem.php');
class Newsm extends Padrem
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getNews(){
		$sql 			= "call schum_proc_getnews()";
		$news 			= $this->getResulset($sql);
		$news[0]->img 	= $this->getTagImgNews();
		return $news[0]; 
	}
	function getImgNews(){
		$sql 	= "SELECT CONCAT(doc_ruta,doc_nombre) AS ruta from crm_documento inner join crm_ambito on amb_id = doc_amb_id where amb_exp_id = 1572 and doc_descripcion = 'news' order by doc_fecha_creacion desc limit 0,1";
		$img 	= $this->getResulset($sql);
		if(!empty($img)){
			return $img[0];	
		}else{
			return false;
		}
		
	}
	function getTagImgNews(){
		$img 	= $this->getImgNews();
		$tagImg = "";
		if($img !== false){
			$tagImg = "<img class='grafica' src='".$this->getImgSrc($img->ruta)."'> ";
			// $tagImg = $img; 		
		}
		return $tagImg;	
	}
}
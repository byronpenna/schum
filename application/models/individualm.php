<?php 
include_once(APPPATH.'models/padrem.php');
class Individualm extends Padrem
{
	
	function __construct()
	{
	}
	function getAwards($empId){
		$sql = "call shum_getAwards(".$empId.")";
		$retorno = $this->getResulset($sql);
		return $retorno;
	}
	function getDivAward($empId){
		$award 	= $this->getAwards($empId);
		$div 	= '';
		foreach ($award as $key => $value) {
			$imgSrc = $this->getImgSrc($value->rutaImg);
			$div 	.= "<img src='".$imgSrc."'>";
		}
		return $div;
	}
	function getHTMLTestimonios($empId){
		$testimonios 	= $this->getTestimonios($empId);
		$div 			= "";
		foreach ($testimonios as $key => $value) {
			$data = explode("/",$value->not_texto);
			$div .= "
			<div class='row container-fluid dataOtherSay'>
				<div class='col-md-8'>
					<p>
						".$data[0]."
					</p>
					<h2>".$data[1]."</h2>
					<h3>".$data[2]."</h3>
				</div>
			</div>
			";
		}
		return $div;
	}
	function getTestimonios($empId){
		$sql = "SELECT * 
				FROM shum_tb_emp_notas
				WHERE idEmpleado = ".$empId." ";
		$this->db->trans_start();
			$query 		= $this->db->query($sql);
			$retorno 	= $query->result(); 
		$this->db->trans_complete();
		return $retorno;
	}
	function getEmpleado($empId){
		// vars 
			$sql[0] = "call shum_getEmpleado(".$empId.");";
			$sql[1] = "SELECT *
						FROM shum_tb_emp_idiomas AS idiomas
						WHERE idiomas.idExpediente = ".$empId." ";
		// do it 
			$this->db->trans_start();
				$query 		= $this->db->query($sql[1]);
				$retorno[1] = $query->result();
				$query 		= $this->db->query($sql[0]);
				$retorno[0]	= $query->result(); 
				$query->free_result();
				$query->next_result();	
			$this->db->trans_complete();
			$retorno[1] 				= $this->getNewIdiomas($retorno[0][0]->idioma);// $retorno[1]
			$retorno[0][0]->rutaImg 	= $this->getImgSrc($retorno[0][0]->rutaImg);
		return $retorno;
	}
	function getNewIdiomas($idiomas){
		$idioma = "<div class='containerIdioma'>";
		$idiomas = explode(",",$idiomas);
		foreach ($idiomas as $key => $value) {
			$idioma .= "<h2>".$value."</h2>";
		}
		return $idioma;
	}
	function getIdiomas($idiomas){
		$idioma = "<div class='containerIdioma'>";
		foreach ($idiomas as $key => $value) {
			$idioma .= "<h2>".$value->idioma."</h2>";
		}
		$idioma .= "</div>";
		return $idioma;
	}
}
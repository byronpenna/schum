<?php 
class Mapas_casam extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getHomes(){
		// vars

		// do it 
			$this->db->trans_start();
				$homes = $this->db->get("crm_ubicaciones_maps");
				$homes = $homes->result();
			$this->db->trans_complete();
		
	}
}
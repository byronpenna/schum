<?php
include_once(APPPATH.'models/padrem.php');
class Our_storym extends Padrem
{
	function __construct()
	{
		parent::__construct();
	}
	function getOurStory(){
		$sql = "SELECT atrTitulo.exp_id,atrTitulo.exp_valor AS titulo,atrTexto.exp_valor AS texto
				FROM (
					SELECT exp_id,exp_valor
					FROM crm_exp_expediente 
					WHERE exp_atr_id = 5333
				) atrTitulo 
				INNER JOIN (
					SELECT exp_id,exp_valor
					FROM crm_exp_expediente 
					WHERE exp_atr_id = 5335
				) atrTexto
				ON atrTexto.exp_id = atrTitulo.exp_id";
		$ourStory = $this->getResulset($sql);
		return $ourStory[0];
	}
}
<?php 
include_once(APPPATH.'models/padrem.php');
class Contact_usm extends Padrem
{
	
	function __construct()
	{
	}
	function sendMail($frm){
		$retorno 			= new stdClass();
		$retorno->estado 	= false;
		$res 				= null;
		if($frm->recaptcha != ""){
			$google_url			= "https://www.google.com/recaptcha/api/siteverify";
			$secret				= '6LddGwATAAAAAMHSPEw2EBnR4fybVD-YjN1DZMT8';
			$ip					= $_SERVER['REMOTE_ADDR'];
			//https://www.google.com/recaptcha/api/siteverify?secret=your_secret&response=response_string&remoteip=user_ip_address
			$url 				= $google_url."?secret=".$secret."&response=".$frm->recaptcha."&remoteip=".$ip;
			$res 				= $this->getCurlData($url);
			$res 				= json_decode($res, true);
			$retorno->mensaje 	= "nicee";
			$retorno->estado 	= true;
			$retorno->ip 		= $ip;
			// mail("info@driventofinish.com","General Inquiry: Realty Ltd.",$frm->message,"from:".$frm->emailT." ");	
		}else{
			$retorno->mensaje = "por favor demuestre que no es un robot";
		}
		$retorno->res = $res;
		return $retorno;
	}
	function getCurlData($url)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_TIMEOUT, 10);
		curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
		$curlData = curl_exec($curl);
		curl_close($curl);
		return $curlData;
	}
}
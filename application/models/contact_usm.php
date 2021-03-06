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
			$secret				= '6Le7vwITAAAAAMtA3NSgwfy2HZH3Bz8zotH7jsdC';
			$ip					= $_SERVER['REMOTE_ADDR'];
			//https://www.google.com/recaptcha/api/siteverify?secret=your_secret&response=response_string&remoteip=user_ip_address
			$url 				= $google_url."?secret=".$secret."&response=".$frm->recaptcha."&remoteip=".$ip;
			$res 				= $this->getCurlData($url);
			$res 				= json_decode($res, true);
			if(isset($res["success"]) && $res["success"]){
				mail("info@driventofinish.com","General Inquiry: Realty Ltd.",$frm->message,"from:".$frm->emailT." ");		
				$retorno->estado 	= true;
				$retorno->mensaje 	= "Your message has been successfully sent";			
			}else{
				$retorno->mensaje 	= "You are a robot";
			}
		}else{
			$retorno->mensaje = "Please, verify that you are not a robot";
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